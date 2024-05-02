
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shawn's Bridal Shop | {{$page}}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/css/adminlte.min.css">

</head>
<body>
    <div class="wrapper">

        <section class="invoice">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <strong>Shawn's Bridal Shop</strong>
                    </h2>
                </div>
            </div>

            <div class="row invoice-info mt-3">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <i class="fa fa-building"></i> <strong>&nbsp;&nbsp;Shawn's Bridal Shop</strong><br>
                        <i class="fa fa-map-marker-alt"></i> &nbsp;&nbsp;&nbsp;941 Rizal Blvd. Pooc <br>
                        <i class="fa fa-phone"></i> &nbsp;&nbsp;+63 917 336 4743<br>
                        <i class="fa fa-envelope"></i> &nbsp;&nbsp;shechellebridalshop@gmail.com
                    </address>
                </div>

                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;<strong>{!! Helper::nameFormat($transaction->first_name, $transaction->middle_name, $transaction->last_name, $transaction->suffix) !!}</strong><br>
                        <i class="fa fa-map-marker-alt"></i> &nbsp;&nbsp;&nbsp;{{ $transaction->address }}<br>
                        <i class="fa fa-phone"></i> &nbsp;&nbsp;{{ $transaction->contact_number }}<br>
                    </address>
                </div>

                <div class="col-sm-4 invoice-col">
                    <b>Transaction No.: </b>&nbsp;&nbsp;{{ $transaction->id }}<br>
                    <b>Transaction Date: </b>&nbsp;&nbsp;{{ date_format(date_create($transaction->transaction_date), 'M. j, Y') }}<br>
                    <b>Scheduled Return Date: </b>&nbsp;&nbsp;{{ $transaction->scheduled_return_date != "" ? date_format(date_create($transaction->scheduled_return_date), 'M. j, Y') : 'N/A' }}<br>
                </div>

            </div>


            <div class="row mt-3">
                <div class="col-12 table-responsive">
                    <table class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th width="12%">Product No.</th>
                                <th>Product</th>
                                <th width="8%">Qty</th>
                                <th width="10%">Price</th>
                                <th width="8%">Type</th>
                                <th width="12%">Date Returned</th>
                                <th width="11%">Remarks</th>
                                <th width="11%">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $damage_deposit = 0;
                                $delayed_fee = 0;
                                $subtotal = 0;
                            @endphp
                            @if(count($rent) > 0)
                                @foreach ($rent as $r)
                                    @php
                                        if($r->status == "Returned with damage") {
                                            $damage_deposit +=  $r->damage_deposit;
                                            if(\Carbon\Carbon::createFromFormat('Y-m-d', $transaction->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned)) {
                                                $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $transaction->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned));
                                                if($daysDifference > 0 ) {
                                                    $delayed_fee += ($additional * $daysDifference);
                                                }
                                            }
                                            $subtotal += $r->rent_price;

                                        } elseif($r->status == "Paid") {
                                            $subtotal += $r->sale_price;

                                        } else { // RETURNED
                                            $subtotal += $r->rent_price;
                                            if(\Carbon\Carbon::createFromFormat('Y-m-d', $transaction->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned)) {
                                                $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $transaction->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $r->date_returned));
                                                if($daysDifference > 0 ) {
                                                    $delayed_fee += ($additional * $daysDifference);
                                                }
                                            }
                                        }

                                    @endphp
                                    <tr>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->mame.' '.$r->description }}</td>
                                        <td>{{ $r->quantity }}</td>
                                        <td>₱ {{ $r->status == "Paid" ? number_format($r->sale_price, 2) : number_format($r->rent_price, 2) }}</td>
                                        <td>
                                            @if($r->status == "Paid")
                                                {{ "Sale" }}
                                            @else 
                                                {{ "Rent" }}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $r->status != "Paid" ? date_format(date_create($r->date_returned), 'M. j, Y') : '' }}
                                        </td>
                                        <td>
                                            @if($r->status == "Paid")
                                                {{ "Paid" }}
                                            @endif

                                            @if($r->status == "Returned with damage")
                                                {{ "Damaged" }}
                                            @endif
                                        </td>
                                        <td>₱ {{ $r->status == "Paid" ? number_format($r->sale_price, 2) : number_format($r->rent_price, 2) }}</td>
                                    </tr>
                                @endforeach

                            @endif
                            
                            @if(count($sale) > 0)
                                @foreach ($sale as $s)
                                    @php
                                        $subtotal += $s->quantity*$s->sale_price;
                                    @endphp
                                    <tr>
                                        <td>{{$s->id}}</td>
                                        <td>{{$s->name.' '.$s->description}}</td>
                                        <td>{{$s->quantity}}</td>
                                        <td>₱ {{number_format(($s->sale_price), 2)}}</td>
                                        <td>Sale</td>
                                        <td></td>
                                        <td>Paid</td>
                                        <td>₱ {{number_format(($s->quantity*$s->sale_price), 2)}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="row mt-2">

                <div class="col-6">

                </div>

                <div class="col-6">
                    {{-- <p class="lead">Amount Due 2/22/2014</p> --}}
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>₱ {{ number_format($subtotal, 2)}}</td>
                            </tr>
                            <tr>
                                <th>Damage Deposit/Fee</th>
                                <td>₱ {{ number_format($damage_deposit, 2)}}</td>
                            </tr>
                            <tr>
                                <th>Delayed Return Fee</th>
                                <td>₱ {{ number_format($delayed_fee, 2)}}</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>₱ {{ number_format(($subtotal + $damage_deposit + $delayed_fee), 2)}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
    window.addEventListener("load", window.print());
    </script>
</body>
</html>
