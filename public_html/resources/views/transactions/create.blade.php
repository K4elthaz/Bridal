@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/transactions.js"></script>
    <script>
        // Get the current date in the format YYYY-MM-DD
        function getCurrentDate() {
          const today = new Date();
          const year = today.getFullYear();
          let month = today.getMonth() + 1;
          let day = today.getDate();
    
          // Pad single-digit months and days with a leading zero
          month = month < 10 ? '0' + month : month;
          day = day < 10 ? '0' + day : day;
    
          return `${year}-${month}-${day}`;
        }

        // Set the minimum date for the start date to the current date
        $('#transaction_date').attr('min', getCurrentDate());

        updateScheduledReturnDate();

        function updateScheduledReturnDate() {
            const transactionDate = $('#transaction_date').val();
        
            // Add 3 days to the transaction date
            const scheduledReturnDate = new Date(transactionDate);
            scheduledReturnDate.setDate(scheduledReturnDate.getDate() + 3);
        
            const year = scheduledReturnDate.getFullYear();
            let month = scheduledReturnDate.getMonth() + 1;
            let day = scheduledReturnDate.getDate();
        
            // Pad single-digit months and days with a leading zero
            month = month < 10 ? '0' + month : month;
            day = day < 10 ? '0' + day : day;
        
            // Set the value and minimum date for the end date
            $('#scheduled_return_date').val(`${year}-${month}-${day}`);
            $('#scheduled_return_date').attr('min', `${year}-${month}-${day}`);
        }
    
        // Set the default value and minimum date for the end date to 3 days after the start date
        $('#transaction_date').on('input', function() {
            updateScheduledReturnDate();
        });
      </script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        
        <div class="col-md-12">
            @include('layouts.message')
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>List of Products</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0" id="tbl-transactions" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Product No.</th>
                                <th  class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Name</th>
                                <th  class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Description</th>
                                <th width="12%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Category</th>
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Sale Price</th> 
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Rent Price</th> 
                                {{-- <th width="11%"class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Rental Deposit</th>  --}}
                                <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td data-label="ID" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $product->id }} 
                                        </span>
                                    </td>
                                    <td data-label="Name" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $product->name }} 
                                        </span>
                                    </td>
                                    <td data-label="Description" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $product->description }} 
                                        </span>
                                    </td>
                                    <td data-label="Category" class="align-middle header with-label">
                                        <span class="text-xs">
                                            @if($product->category_id == 1)
                                                {{ "MEN'S" }}
                                            @elseif($product->category_id == 1)
                                                {{ "WOMEN'S" }}
                                            @else
                                                {{ "KID'S" }}
                                            @endif
                                        </span>
                                    </td>
                                    <td data-label="Sale Price" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ '₱ '.number_format($product->sale_price, 2)  }}
                                        </span>
                                    </td>
                                    <td data-label="Rent Price" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ '₱ '.number_format($product->rent_price, 2)  }}
                                        </span>
                                    </td>
                                    <td class="td-action" align="center">

                                        <button class="icon icon-shape pt-0 icon-sm shadow border-radius-md bg-gradient-dark
                                        btn-product"
                                            id="{{$product->id}}"
                                            data-name="{{$product->name}}"
                                            data-description="{!! $product->description !!}"
                                            data-for-sale="{{$product->for_sale}}"
                                            data-available-for-rent="{{$product->available_for_rent}}"
                                            data-sale-price="{{$product->sale_price}}"
                                            data-rent-price="{{$product->rent_price}}"
                                            data-damage-deposit="{{$product->damage_deposit}}"
                                            data-sale-price2="{{ '₱ '.number_format($product->sale_price, 2)  }}"
                                            data-rent-price2="{{ '₱ '.number_format($product->rent_price, 2)  }}"
                                            data-damage-deposit2="{{ '₱ '.number_format($product->damage_deposit, 2)  }}"
                                            data-available-for-rent="{{$product->available_for_rent}}"
                                            data-photo="{{$product->activePhoto != '' ? $product->activePhoto->filename : ''}}"
                                        >
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12" id="transaction-form" style="display: none">
            <form action="/transactions/store" method="POST" id="create-transaction-form">
            @csrf
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="bg-pink text-gradient">Transaction Information</h6>
                        </div>
                        <div class="col-md-6">
                            <label>Customer</label>
                            <select class="form-control select2 select2-create" name="customer" required>
                                <option selected disabled></option>
                                @foreach($customers as $customer)
                                    <option value="{{$customer->id}}" {{ old('customer') == $customer->id ? 'selected' : '' }}>{!! Helper::nameFormat($customer->first_name, $customer->middle_name, $customer->last_name, $customer->suffix) !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Transaction Date</label>
                            <input type="date" id="transaction_date" value="{{old('transaction_date', date('Y-m-d'))}}" class="form-control" name="transaction_date" required/>
                        </div>
                        <div class="col-md-3">
                            <label>Scheduled Return Date</label>
                            <input type="date" id="scheduled_return_date" class="form-control" {{old('scheduled_return_date')}} name="scheduled_return_date" id="scheduled_return_date" />
                        </div>
                    </div>
                </div>
            </div>
                <div id="selected-products">

                </div>

                <div align="center">
                    <button type="submit" class="btn bg-gradient-dark" id="btn-save-transaction" onclick="return confirm('Are you sure you want to save this transaction?')">SAVE TRANSACTION</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection