@extends('order_management.layout')
@section('title', 'check out')
@section('content')
    <br><br>
    <button class="btn btn1" onclick="history.back()"><i class="fa fa-arrow-left fa-2xl back_icon "
            aria-hidden="true"></i></button>



@foreach($errors->all() as $error)
    <div class= "alert alert-danger" role="alert" style="padding:2px 2px;">
    {{$error}}
    </div>
@endforeach
        <form class="form-group form1" id="orderForm">
            {{csrf_field()}}

            <fieldset>
                <h1 class="text-center" style="color:#224957">Check Out</h1>

                <div class="row pb-3">
                    <div class="col-4 text-center" >
                        <img src="{{ asset($product->product_image ?? '') }}" alt="" height="100px" width="100px">
                    </div>
                    <div class="col-4 text-center" style="margin-top: 30px;">
                        <h3 class="">{{ $product->product_name ?? '' }}</h3>
                    </div>
                    <div class="col-4 text-center" style="margin-top: 30px;">
                        <h3>{{ number_format($product->product_price, 2) }}</h3>
                    </div>
                </div>
                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
<hr>
                <legend><span class="number">1</span> Add your delivery details</legend>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter the Name" required><br>
                    </div>
                    <div class="col-sm-6">
                        <label for="contact_number">Contact Number:</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="07xxxxxxxx" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="abc@gmail.com" required><br>
                    </div>
                    <div class="col-sm-6">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter the Address" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="zip_code">Zip code:</label>
                        <input type="text" class="form-control" name="zip_code" placeholder="11010" required><br>
                    </div>
                    <div class="col-sm-3">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city" placeholder="Colombo" required><br>
                    </div>
                    <div class="col-sm-4">
                        <button id="saveButton" class="btn btn-success save_btn">Save</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter the Address"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="zip_code">Zip code:</label>
                    <input type="text" class="form-control" name="zip_code" placeholder="11010"><br>
                </div>
                <div class="col-sm-3">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" placeholder="Colombo"><br>
                </div>
                <div class="col-sm-4">
                    <button id="saveButton" class="btn btn-success save_btn">Save</button>
                </div>
            </div>
        </fieldset>

        {{-- <div class="button1"> --}}
        {{-- <button id="saveButton" class="btn btn-primary" style=" color:white;width:140px;font-family:'Trebuchet MS', sans-serif; ">Add</button> --}}
        {{-- <a href="{{url('/orders')}}" class="btn btn" --}}
        {{-- style="background-color:#001f4d!important; color:white;width:140px;font-family:'Trebuchet MS', sans-serif; ">Back</a> --}}
        {{-- </div> --}}

    </form>







@endsection

{{-- footer --}}

@section('javaScript')

    <script>
        $(document).ready(function() {
            $('#saveButton').click(function(e) {

                e.preventDefault();

                var data = {
                    formdata: $('#orderForm').serialize()
                }

                $.ajax({
                    url: '{{ url('/orders') }}',
                    type: 'POST',
                    dataType: 'JSON',
                    data: $.param(data),
                    success: function(response) {
                        alert(response.msg);
                        window.location.href = '{{url('/orders')}}/'+response.orderId+'/edit';
                    },
                    error: function(errors) {

                    }
                });
                return false;
            });
        });
    </script>
@endsection
