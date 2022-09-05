@extends('order_management.layout')
@section('title', 'check out')
@section('content')
    <br><br>
    <button class="btn btn1" onclick="history.back()"><i class="fa fa-arrow-left fa-2xl back_icon "
            aria-hidden="true"></i></button>

    <form class="form-group form1" id="orderForm">

        <fieldset>
            <h1 class="text-center">Check Out</h1>
            <legend><span class="number">1</span> Add your delivery details</legend>
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter the Name"><br>
                </div>
                <div class="col-sm-6">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" class="form-control" name="contact_number" placeholder="07xxxxxxxx"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="abc@gmail.com"><br>
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
                        window.location.href = '{{ url('/orders') }}';
                    },
                    error: function(errors) {

                    }
                });
                return false;
            });
        });
    </script>
@endsection
