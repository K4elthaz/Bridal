<!DOCTYPE html>
<html>
<title>Sales Report</title>
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
                <h2 style="margin-bottom: 5px">Sales Report</h2>
                <label><b>{{ date_format(date_create($from_date), 'F j, Y') }} - {{ date_format(date_create($to_date), 'F j, Y') }}</b></label><br>
                <label><b>Total Transaction : {{ count($dataset) }}</b></label>
            </div>
            <table class="table table-bordered table-striped" id="main-table" style="width: 100%">
                <thead>
                    <th width="13%">Transaction #</th>
                    <th width="13%">Customer Name</th>
                    <th>Products</th>
                    <th width="7%">Category</th>
                    <th width="5%">Qty</th>
                    <th width="11%">Price</th>
                    <th width="12%">Date</th>
                    <th width="14%">Grand Total</th>
                </thead>
                <tbody>
                    @foreach($dataset as $d)
                        @php
                            $grand_total = 0;          
                        @endphp
                        @foreach($d['items'] as $key => $i)
                            @php
                                $grand_total += $i->sale_price*$i->quantity;
                            @endphp
                        @endforeach
                        @foreach($d['items'] as $key => $i)
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
                                <td>{{ $i->quantity }}</td>
                                <td>₱ {{ number_format($i->sale_price, 2, '.', ',') }}</td>
                                <td>{{ date_format(date_create($d['transaction']->transaction_date), 'F j, Y') }}</td>
                                @if($key == 0)
                                    <td rowspan="{{ count($d['items']) }}">₱ {{ number_format($grand_total, 2, '.', ',') }}</td>
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


