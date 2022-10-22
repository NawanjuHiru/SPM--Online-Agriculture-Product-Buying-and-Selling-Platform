@extends('order_management.layout')
@section('title','payment')
@section('content')

    <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px;margin-left:250px;">

        <div class="row g-2">
            <div class="col">


                <h1 class="text-center"
                    style="font-family:'Trebuchet MS', sans-serif;margin-left:20px; margin-top:20px; color:#224957">
                    Payment Method </h1>

                <div class="container" style="margin-bottom:10px">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/order_management/payment_method.png') }}"
                                 class="d-block w-100 img-fluid" alt="image">
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <h4 class="text-success">Select your payment method</h4>
                            </div>
                            {{-- <form method="post" action=""> --}}
                            <div class="p-4">
                                <div class="container"
                                     style="background-color: #E8ECF2 ;height: 50px;margin-bottom: 10px;border-radius: 10px; ">
                                    <div class="custom-control custom-radio" onclick="setpaymethod('cash')">
                                        <div class="row pb-10">
                                            <input style="padding-bottom:-50px;" class="custom-control-input"
                                                   type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label style="font-size:22px;margin-left: 30px;"
                                                   class="custom-control-label" for="flexRadioDefault1">Cash On Delivery<i
                                                    class="fa-regular fa-money-bill-1" style="margin-left: 15px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="container"
                                     style="background-color: #E8ECF2;height: 50px;margin-bottom: 10px;border-radius: 10px;">
                                    <div class="custom-control custom-radio" onclick="setpaymethod('card')">
                                        <div class="row pb-9">
                                            <input style="" class="custom-control-input" type="radio"
                                                   name="flexRadioDefault" id="flexRadioDefault2">
                                            <label style="font-size:22px;margin-left: 45px;"
                                                   class="custom-control-label" for="flexRadioDefault2">Card Payment<i
                                                    class="fa-brands fa-cc-visa"
                                                    style="margin-left: 15px;margin-top: 10px;"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-success" type="button" onclick="rdirect()"><span></span> MAKE
                                        PAYMENT
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


{{--footer--}}

@section('javaScript')

    <script>

        var location1 = "";

        function setpaymethod(method1) {
            if (method1 === 'cash') {
                location1 = "{{url('/cashondelivery')}}";
            } else if (method1 === 'card') {
                location1 = "{{url('/stripe')}}";
            }
        }

        function rdirect() {
            window.location.href = location1;
        }

    </script>

@endsection



