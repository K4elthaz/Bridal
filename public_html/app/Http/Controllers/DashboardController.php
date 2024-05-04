<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $page = [
            'name' =>  'Dashboard',
            'title' =>  'System Dashboard',
            'crumb' =>  array('Dashboard' => '')
        ];

        $selectedDateSales  = $request->input('selected_date_sales');
        $selectedDateRentals  = $request->input('selected_date_rentals');
        $selectedDateCustomers  = $request->input('selected_date_customers');
        $selectedDateOutRentals  = $request->input('selected_date_out_rentals');


        if (!$selectedDateSales) {
            $selectedDateSales = Carbon::now('Asia/Manila')->toDateString();
        }

        if (!$selectedDateRentals) {
            $selectedDateRentals = Carbon::now('Asia/Manila')->toDateString();
        }

        if (!$selectedDateCustomers) {
            $selectedDateCustomers = Carbon::now('Asia/Manila')->toDateString();
        }

        if (!$selectedDateOutRentals) {
            $selectedDateOutRentals = Carbon::now('Asia/Manila')->toDateString();
        }
        
        
        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $sale = [];
        $rent = [];

        foreach($months as $month) {

            $monthly_sales = 0;

            $sales = TransactionProduct::select(
                'tbl_prices.sale_price',
                'tbl_transaction_products.quantity'
            )
            ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
            ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
            ->where(function($s) {
                $s->where('tbl_transaction_products.type', TransactionProduct::SALE)
                ->orwhere(function($r) {
                    $r->where('tbl_transaction_products.type', TransactionProduct::RENT)
                    ->where('tbl_transaction_products.status', TransactionProduct::PAID);
                });
            })
            ->whereMonth('tbl_transactions.transaction_date', $month)
            ->whereYear('tbl_transactions.transaction_date', Carbon::now('Asia/Manila')->format('Y'))
            ->get();

            foreach($sales as $s) {
                $monthly_sales += ($s->quantity * $s->sale_price);
            }

            $sale[] = $monthly_sales;

            $monthly_rent = 0;

            $rents = TransactionProduct::select(
                'tbl_prices.rent_price',
                'tbl_prices.damage_deposit',

                'tbl_transaction_products.quantity',
                'tbl_transaction_products.date_returned',
                'tbl_transaction_products.status',

                'tbl_transactions.transaction_date',
                'tbl_transactions.scheduled_return_date'
            )
            ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
            ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')

            ->where('tbl_transaction_products.type', TransactionProduct::RENT)
            ->whereIn('tbl_transaction_products.status', [TransactionProduct::RETURNED, TransactionProduct::RETURNEDWITHDAMAGE])

            ->whereNull('tbl_transactions.deleted_at')
            ->where('tbl_transactions.status', Transaction::COMPLETED)
            ->whereMonth('tbl_transactions.transaction_date', $month)
            ->whereYear('tbl_transactions.transaction_date', Carbon::now('Asia/Manila')->format('Y'))
            ->get();

            foreach($rents as $r) {

                if(\Carbon\Carbon::createFromFormat('Y-m-d', $r->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned)) {
                    $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $r->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned));
                    if($daysDifference > 0 ) {
                        $monthly_rent += (TransactionProduct::ADDITIONAL * $daysDifference);
                    }
                }

                if($r->status == TransactionProduct::RETURNED) {
                    $monthly_rent += $r->rent_price;
                    
                } else { // RETURNED WITH DAMAGE
                    $monthly_rent += $r->rent_price;
                    $monthly_rent += $r->damage_deposit;
                }
            }

            $rent[] = $monthly_rent;
        }

        $day_sale = [];

        $ts = TransactionProduct::select(
            'tbl_prices.sale_price',
            'tbl_transaction_products.quantity',
            'tbl_transactions.transaction_date'
        )
        ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->where(function($s) {
            $s->where('tbl_transaction_products.type', TransactionProduct::SALE)
            ->orwhere(function($r) {
                $r->where('tbl_transaction_products.type', TransactionProduct::RENT)
                ->where('tbl_transaction_products.status', TransactionProduct::PAID);
            });
        })
        ->get();

        $todays_sales = 0;
        $day_sales = 0;
        foreach($ts as $s) {
            $todays_sales += ($s->sale_price * $s->quantity);
            $day_sales += ($s->sale_price * $s->quantity);
            // Use the transaction_date as the key
            $day_sale[$s->transaction_date] = $day_sales;
            $day_sales = 0;
        }

        echo json_encode($day_sale);

        $tr = TransactionProduct::select(
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit',

            'tbl_transaction_products.quantity',
            'tbl_transaction_products.date_returned',
            'tbl_transaction_products.status',

            'tbl_transactions.transaction_date',
            'tbl_transactions.scheduled_return_date'
        )
        ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')

        ->where('tbl_transaction_products.type', TransactionProduct::RENT)
        ->whereIn('tbl_transaction_products.status', [TransactionProduct::RETURNED, TransactionProduct::RETURNEDWITHDAMAGE, TransactionProduct::ONGOING])

        ->get();

        $todays_rent = 0;
        $day_rent = [];
        $day_rents = 0;
        foreach($tr as $r) {

            if($r->status == TransactionProduct::RETURNED || $r->status == TransactionProduct::RETURNEDWITHDAMAGE) {
                if(\Carbon\Carbon::createFromFormat('Y-m-d', $r->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned)) {
                    $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $r->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned));
                    if($daysDifference > 0 ) {
                        $todays_rent += (TransactionProduct::ADDITIONAL * $daysDifference);
                        $day_rents += (TransactionProduct::ADDITIONAL * $daysDifference);
                    }
                }
            }

            if($r->status == TransactionProduct::RETURNED) {
                $todays_rent += $r->rent_price;
                $day_rents += $r->rent_price;
                
            } else { // RETURNED WITH DAMAGE
                $todays_rent += $r->rent_price;
                $todays_rent += $r->damage_deposit;
                $day_rents += $r->rent_price;
                $day_rents += $r->damage_deposit;
            }
            
            // Use the transaction_date as the key
            $day_rent[$r->transaction_date] = $day_rents;
            $day_rents = 0;
        }

        $customers = Customer::whereDate('created_at', $selectedDateCustomers)->count();

        $out_for_rent = TransactionProduct::leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->where('tbl_transactions.status', '<>', Transaction::COMPLETED)
        ->whereNull('tbl_transactions.deleted_at')
        ->where('tbl_transaction_products.type', TransactionProduct::RENT)
        ->whereDate('tbl_transactions.transaction_date', $selectedDateOutRentals)
        ->count('tbl_transaction_products.id');
        
        $website_visitors = [];

        foreach($months as $month) {
            $web_visitors = Visitor::where('month', $month)->where('year', Carbon::now('Asia/Manila')->format('Y'))->first();
            $web_visitors ? $website_visitors[] = $web_visitors->total : $website_visitors[] = 0;
        }

        return view('dashboard', compact(
            'page',
            'sale',
            'rent',
            'day_rent',
            'day_sale',
            'todays_sales',
            'todays_rent',
            'customers',
            'out_for_rent',
            'website_visitors'
        ));
    }
}
