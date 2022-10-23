@extends('order_management.layout')
@section('title', 'Cash On Delivery')
@section('content')

    <div class="container-fluid vh-100" style="margin-top:-100px">
        <div class="" style="margin-top:200px;">
            <div class="rounded d-flex justify-content-center">

                <div class="col-md-4 d-sm-none shadow-lg d-md-block"
                     style="border-bottom-left-radius: 25px;border-top-left-radius: 25px">
                    <img src="{{ asset('images/order_management/cashondelivery.png') }}" class="d-block w-100 img-fluid"
                         alt="image">
                </div>

                <div class="col-md-4 col-sm-12 shadow-lg p-5"
                     style="border-bottom-right-radius: 25px;border-top-right-radius: 25px;background-color: #E5E5E5;">
                    <div class="text-center">
                        <h3 class="text-success">Cash On Delivery</h3>
                    </div>

                    <div class="p-4">

                        <p> You can pay in cash to our courier when you receive the goods at your doorstep </p>
                        <br><br>
                        <hr>

                        <h3> Total Amount<br>Rs.200</h3>

                        <hr>
                        <div class="d-grid col-12 mx-auto">
                            <a href="/delivery" class="btn btn-success"> Confirm Order </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

{{-- footer --}}

@section('javaScript')


@endsection
