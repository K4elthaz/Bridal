<?php

namespace App\Http\Traits;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor as ModelsVisitor;

use Carbon\Carbon;

trait Visitor {

    public function generateVisitorKey()
    {
        // Generate a random key with time and seconds
        $visitorKey = uniqid() . '_' . Carbon::now()->timestamp . '_' . rand(100, 999);
        // Store the key in the session for 24 hours
        Session::put('visitor_key', $visitorKey);

        return $visitorKey;
    }

    public function checkVisitor()
    {
        DB::beginTransaction();
        try {
            if (Session::has('visitor_key') ) {
                // Retrieve the key from the session
                $visitorKey = Session::get('visitor_key');
            } else {
                $visitorKey = $this->generateVisitorKey();
            }

            // php artisan migrate --path=/database/migrations/2023_07_07_152927_create_total_visitors_table.php

            $file = 'visitors.json';
            if (Storage::exists($file)) {

                $jsonString = file_get_contents(storage_path('app/'.$file));
                $jsonData = json_decode($jsonString, true);
                $date = $jsonData['date'];
                $visitors = $jsonData['visitors'];

                if($date != Carbon::now('Asia/Manila')->format('Y-m-d')) {

                    $date  = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $visitors =  [$visitorKey];

                    $month = ModelsVisitor::where([
                        'month' => Carbon::now('Asia/Manila')->format('m'),
                        'year' => Carbon::now('Asia/Manila')->format('Y')
                    ])
                    ->first();

                    if($month) {
                        $month->total = $month->total+1;
                        $month->save();
                    } else {
                        $month = new ModelsVisitor;
                        $month->month = Carbon::now('Asia/Manila')->format('m');
                        $month->year = Carbon::now('Asia/Manila')->format('Y');
                        $month->total = 1;
                        $month->save();
                    }
                } else {
                    if(!in_array($visitorKey, $visitors)) {
                        $visitors[] = $visitorKey;

                        $month = ModelsVisitor::where([
                            'month' => Carbon::now('Asia/Manila')->format('m'),
                            'year' => Carbon::now('Asia/Manila')->format('Y')
                        ])
                        ->first();

                        $month->total = $month->total+1;
                        $month->save();
                    }
                }
                $jsonData = [
                    "date" => $date,
                    "visitors" => $visitors
                ];

                $newJsonData = json_encode($jsonData, JSON_PRETTY_PRINT);
                Storage::put('visitors.json', $newJsonData);

            } else {

                $month = new ModelsVisitor;
                $month->month = Carbon::now('Asia/Manila')->format('m');
                $month->year = Carbon::now('Asia/Manila')->format('Y');
                $month->total = 0;
                $month->save();

                $jsonData = [
                    "date" => Carbon::now('Asia/Manila')->format('Y-m-d'),
                    "visitors" => []
                ];
                $jsonData = json_encode($jsonData, JSON_PRETTY_PRINT);
                Storage::put('visitors.json', $jsonData);
            }

            DB::commit();
            return true;

        } catch(\Exception $e) {
            return false;
        }
    }

}

?>