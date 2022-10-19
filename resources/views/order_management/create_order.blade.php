@extends('order_management.layout')
@section('title','check out')
<link rel = "icon" href = 
"https://cdn-icons-png.flaticon.com/512/2713/2713479.png" 
        type = "image/x-icon">
@section('content')
    <br><br>
    <button style="margin-left:-150px;" class="btn btn1" onclick="history.back()"><i class="fa fa-arrow-left fa-2xl back_icon "
                                                         aria-hidden="true"></i></button>


    <form class="form-group form1 shadow-lg" id="orderForm" style="background-color: #E5E5E5;border-radius: 25px;">
        {{csrf_field()}}

        <fieldset >
            <h1 class="text-center" style="color:#224957">Check Out</h1>

            <div class="row pb-3">
                <div class="col-4 text-center">
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
            <legend><span class="number">#</span> Add your delivery details</legend>
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">*Name:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="name" placeholder="Enter the Name" required><br>
                </div>
                <div class="col-sm-6">
                    <label for="contact_number">*Contact Number:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="contact_number" placeholder="07xxxxxxxx" required><br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email">*Email:</label>
                    <input type="email"  style="color:black; background-color: #f6f6f6" class="form-control" name="email" placeholder="abc@gmail.com" required><br>
                </div>
                <div class="col-sm-6">
                    <label for="address">*Address:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="address" placeholder="Enter the Address" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="zip_code">*Zip code:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="zip_code" placeholder="11010" required><br>
                </div>
                <div class="col-sm-3">
                    <label for="city">*City:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="city" placeholder="Colombo" required><br>
                </div>
                <div class="col-sm-4">
                    <button id="saveButton" class="btn btn-success save_btn">Save</button>
                </div>
            </div>
        </fieldset>


    </form>

@endsection

{{--footer--}}

@section('javaScript')

    <script>

        $(document).ready(function () {

            $('#orderForm').validate({
                rules: {
                    name: {
                        lettersonly: true,
                        minlength: 2

                    },

                    contact_number: {
                        digits: true,
                        minlength: 10,
                        maxlength: 10


                    },

                    address: {
                        minlength: 8
                    },

                    zip_code: {
                        digits: true,
                        minlength: 5,
                        maxlength: 5

                    },
                    city: {
                        lettersonly: true,
                        minlength: 2

                    },

                },

                messages: {
                    name: {
                        lettersonly: "Please enter only letters"
                    },

                    contact_number: {
                        digits: "Please enter only digits",
                        minlength: "Enter a valid contact number"

                    },

                    zip_code: {
                        digits: "Please enter only digits",
                        minlength: "Enter a valid zip"

                    },

                }
            });


            $('#saveButton').click(function (e) {

                e.preventDefault();
                var valid = $('#orderForm').valid();
                if (!valid) {
                    return false;
                }

                var data = {
                    formdata: $('#orderForm').serialize()
                }

                var save_confirm = $.confirm({
                    title: 'Confirm Save!',
                    content: 'Are you sure you want to save?',
                    buttons: {

                        cancel: function () {
                        },

                        somethingElse: {
                            text: 'Save',
                            type: 'Green',
                            btnClass: 'btn-green',
                            keys: ['enter', 'shift'],
                            action: function () {

                                $.ajax({
                                    url: '{{url('/orders')}}',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: $.param(data),

                                    success: function (response) {

                                        save_confirm.close();
                                        window.location.href = '{{url('/orders')}}/' + response.orderId + '/edit';
                                    },
                                    error: function (errors) {

                                        alert(response.msg);
                                    }
                                });
                                return false;

                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection



