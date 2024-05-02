<!DOCTYPE html>
<html>
<title>Rentals Report</title>
<head>
    <style type="text/css">
        .font-11 {
            font-size: 11pt;
        }
    
        #main-table th{
            border: 1px solid #dee2e6;
            font-weight: normal;
            font-size: 9pt;
            text-align: left;
            padding-left: 2px;
            padding-right: 2px;
            padding-top: 3px;
            padding-bottom: 3px
        }
        #main-table tr, td{
            border: 1px solid #dee2e6;
            font-weight: normal;
            font-size: 9pt;
            padding-left: 2px;
            padding-right: 2px;
            text-align: left; 
            vertical-align: top;
        }
        #main-table {
            width: 100%;
            font-family: "Nunito", sans-serif;
            border-collapse: collapse;
        }

        body{
            font-family: "Nunito", Serif !important;
            font-size: 9pt;
        }

        p{
            margin: 0px;
        }
        .logo{
            height: 120px;
            width: 120px;
        }
        th{
            text-align: left;
        }
        .container{
            width: 13in;
            height: 8.5in;
            border: solid 2px #eee;
            padding: 10px;
        }
        @page{
            margin: .5cm;
        }
        
    
        @media print {
        
            body {
                font-family: "Nunito", Serif;
                font-size: 9pt;
            }
            p{
                margin: 0px;
            }
            
            .logo{
                height: 120px;
                width: 120px;
            }
            th{
                text-align: left;
            }
        
            @page{
                margin: .5cm;
            }
            .container{
                width: 13in;
                height: 8.5in;
                border: none !important;
                padding: none !important;
            }
        }
    </style>
</head>
<body onload="window.print()">
    <center>
        <div class="container">
            <div align="left" style="margin-bottom: 10px">
                <h2 style="margin-bottom: 5px">Rentals Report</h2>
                <label><b>{{ date_format(date_create($from_date), 'F j, Y') }} - {{ date_format(date_create($to_date), 'F j, Y') }}</b></label><br>
                <label><b>Total Transaction : {{ count($dataset) }}</b></label>
            </div>
            <table class="table table-bordered table-striped" id="main-table" style="width: 100%">
                <thead>
                    <tr>
                        <th width="5%">Transaction Number</th>
                        <th>Customer Name</th>
                        <th>Products</th>
                        <th width="5%">Category</th>
                        <th width="3%">Qty</th>
                        <th width="6%">Damage Deposit</th>
                        <th width="6%">Price</th>
                        <th width="9%">Transaction Date</th>
                        <th width="9%">Expected Returned Date</th>
                        <th width="9%">Date Returned</th>
                        <th width="5%">Late Returned Fee</th>
                        <th width="5%">Status</th>
                        <th width="6%">Total Additional Fees</th>
                        <th width="6%">Grand Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataset as $d)
                        @php
                            $grand_total = 0;
                        @endphp
                        @foreach($d['items'] as $key => $i)
                            @php
                                if($i->status == "Returned with damage") {
                                    $grand_total += $i->damage_deposit;
                                    if(\Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned)) {
                                        $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned));
                                        if($daysDifference > 0 ) {
                                            $grand_total += (500 * $daysDifference);
                                        }
                                    }
                                    $grand_total += $i->rent_price;
                                }  elseif($i->status == "Ongoing") {
                                    $grand_total += $i->rent_price;
                                } else { // RETURNED
                                    $grand_total += $i->rent_price;
                                    if(\Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned)) {
                                        $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned));
                                        if($daysDifference > 0 ) {
                                            $grand_total += (500 * $daysDifference);
                                        }
                                    }
                                }
                            @endphp
                        @endforeach
                        @foreach($d['items'] as $key => $i)
                            @php
                                $additional_fees = 0;    
                            @endphp
                            <tr>
                                @if($key == 0)
                                    <td rowspan="{{ count($d['items']) }}">{{ $d['transaction']->id }}</td>
                                    <td rowspan="{{ count($d['items']) }}">
                                        @php
                                            $full_name = $d['transaction']->first_name;
                                            if($d['transaction']->middle_name) {
                                                $full_name .= ' '.$d['transaction']->middle_name[0].'.';
                                            }
                                            $full_name .= ' '.$d['transaction']->last_name;

                                            if($d['transaction']->suffix) {
                                                $full_name .= ' '.$d['transaction']->suffix;
                                            }
                                        @endphp
                                        {{ $full_name }}
                                    </td>
                                @endif

                                <td>{{ $i->name }}</td>
                                <td>
                                    @php
                                        if($i->category == 1) {
                                            $category = "MEN";
                                        } else if($i->category == 2) {
                                            $category = "WOMEN";
                                        } else {
                                            $category = "KIDS";
                                        }
                                    @endphp
                                    {{ $category }}
                                </td>
                                <td>
                                    {{ $i->quantity }}
                                </td>
                                <td>₱ {{ number_format($i->damage_deposit, 2, '.', ',') }}</td>
                                <td>₱ {{ number_format($i->rent_price, 2, '.', ',') }}</td>
                                <td>{{ date_format(date_create($i->transaction_date), 'F j, Y') }}</td>
                                <td>{{ date_format(date_create($d['transaction']->scheduled_return_date), 'F j, Y') }}</td>
                                <td>{{ $i->date_returned ? date_format(date_create($i->date_returned), 'F j, Y') : '' }}</td>
                                <td>₱ 500.00</td>
                                <td>
                                    @php
                                        $status = "";
                                        if($i->status == "Returned with damage") {
                                            $additional_fees += $i->damage_deposit;
                                            if(\Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned)) {
                                                $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned));
                                                if($daysDifference > 0 ) {
                                                    $additional_fees += (500 * $daysDifference);
                                                }
                                            }
                                            // $grand_total += $i->rent_price;
                                            $status = "With Damage";

                                        }  elseif($i->status == "Ongoing") {
                                            // $grand_total += $i->rent_price;
                                            $status = "Ongoing";
                                        } else { // RETURNED
                                            // $grand_total += $i->rent_price;
                                            if(\Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date) < \Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned)) {
                                                $daysDifference = \Carbon\Carbon::createFromFormat('Y-m-d', $d['transaction']->scheduled_return_date)->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $i->date_returned));
                                                if($daysDifference > 0 ) {
                                                    $additional_fees += (500 * $daysDifference);
                                                }
                                            }
                                            $status = "Returned";
                                        }
                                    @endphp
                                    
                                    {{ $status }}
                                </td>
                                <td>₱ {{ number_format($additional_fees, 2, '.', ',') }}</td>
                                @if($key == 0)
                                    <td rowspan="{{ count($d['items']) }}" >₱ {{ number_format(($grand_total), 2, '.', ',') }}</td>
                                @endif
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>


