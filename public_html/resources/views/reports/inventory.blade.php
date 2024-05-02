<!DOCTYPE html>
<html>
<title>Inventory Report</title>
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
                <h2 style="margin-bottom: 5px">Inventory Report</h2>
                <label><b>{{ date_format(date_create($from_date), 'F j, Y') }} - {{ date_format(date_create($to_date), 'F j, Y') }}</b></label><br>
            </div>
            <table class="table table-bordered table-striped" id="main-table" style="width: 100%">
                <thead>
                    <th width="10%">Product #</th>
                    <th width="10%">Date Created</th>
                    <th>Products</th>
                    <th width="7%">Category</th>
                    <th width="10%">Damage Deposit</th>
                    <th width="7%">Rental Qty</th>
                    <th width="7%">Rental Price</th>
                    <th width="7%">Sale Qty</th>
                    <th width="7%">Sale Price</th>
                    <th width="7%">Out for Rent</th>
                    <th width="7%">Out for Sale</th>
                </thead>
                <tbody>
                    @foreach($dataset as $d)
                        <tr>
                            <td>{{ $d['id'] }}</td>
                            <td>{{ date_format(date_create($d['date_created']), 'F j, Y') }}</td>
                            <td>{{ $d['product_name'] }}</td>
                            <td>{{ $d['category'] }}</td>
                            <td>₱ {{ number_format($d['damage_deposit'], 2, '.', ',') }}</td>
                            <td>{{ $d['for_rent'] }}</td>
                            <td>₱ {{ number_format($d['rent_price'], 2, '.', ',') }}</td>
                            <td>{{ $d['for_sale'] }}</td>
                            <td>₱ {{ number_format($d['sale_price'], 2, '.', ',') }}</td>
                            <td>{{ $d['out_for_rent'] }}</td>
                            <td>{{ $d['out_for_sale'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>


