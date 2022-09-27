@extends('order_management.layout')
@section('title','check out')
@section('content')

    <div class="container-fluid vh-100" style="margin-top:-100px">
        <div class="" style="margin-top:200px;">
            <div class="rounded d-flex justify-content-center">

                <div class="col-md-4 d-sm-none shadow-lg d-md-block"
                     style="border-bottom-left-radius: 25px;border-top-left-radius: 25px">
                    <img src="{{ asset('images/order_management/payment_method.png') }}"
                         class="d-block w-100 img-fluid" alt="image">
                </div>

                <div class="col-md-4 col-sm-12 shadow-lg p-5"
                     style="border-bottom-right-radius: 25px;border-top-right-radius: 25px;background-color: #E5E5E5;">
                    <div class="text-center">
                        <h3 class="text-success">Payment Method</h3>
                    </div>
                    <div class="p-4">
                        <div class="container"
                             style="background-color: #E8ECF2 ;height: 40px;margin-bottom: 10px;border-radius: 10px;">
                            <div class="form-check">
                                <div class="row pb-9">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault1" style="margin-top: 10px;">
                                    <label class="form-check-label" for="flexRadioDefault1" style="margin-top: 10px;">
                                        Cash On Delivery<i class="fa-regular fa-money-bill-1"
                                                           style="margin-left: 15px"></i>
                                    </label>


                                </div>
                            </div>
                        </div>
                        <div class="container"
                             style="background-color: #E8ECF2;height: 40px;margin-bottom: 10px;border-radius: 10px;">
                            <div class="form-check">
                                <div class="row pb-6">

                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault2" style="margin-top: 10px;" checked>

                                    <label class="form-check-label" for="flexRadioDefault2">Card Payment<i
                                            class="fa-brands fa-cc-visa"
                                            style="margin-left: 15px;margin-top: 10px;"></i></label>


                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-success" type="button"><span></span> MAKE PAYMENT</button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

{{--footer--}}

@section('javaScript')


@endsection



