@extends('order_management.layout')
@section('title','stripe')
@section('content')

    <div class="container-fluid vh-100" style="margin-top:-100px">
        <div class="" style="margin-top:200px;">
            <div class="rounded d-flex justify-content-center">

                <div class="col-md-4 d-sm-none shadow-lg d-md-block"
                     style="border-bottom-left-radius: 25px;border-top-left-radius: 25px">
                    <img src="{{ asset('images/order_management/payment_gateway.png') }}"
                         class="d-block w-100 img-fluid" alt="image">
                </div>


                <div class="col-md-5 col-sm-12 shadow-lg p-5"
                     style="border-bottom-right-radius: 25px;border-top-right-radius: 25px;background-color: #E5E5E5;">
                    <div class="text-center">
                        <h3 class="text-success"><b> Add New Card </b></h3>
                    </div>
                    <div class="p-4">


                        <div class="container">

                            <div class="row">
                                <div class="col-md-13 col-md-offset-3">
                                    <div class="panel panel-default credit-card-box">
                                        <div class="panel-body">
                                            @if (Session::has('success'))
                                                <div class="alert alert-success text-center">
                                                    <a href="#" class="close" data-dismiss="alert"
                                                       aria-label="close">×</a>
                                                    <p>{{ Session::get('success') }}</p>
                                                </div>
                                            @endif
                                            <form
                                                role="form"
                                                action="{{route('stripe.post')}}"
                                                method="post"
                                                class="require-validation"
                                                data-cc-on-file="false"
                                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                id="payment-form">
                                                @csrf
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 form-group required'>
                                                        <label class='control-label'>Name on Card</label> <input
                                                            class='form-control' size='4' type='text' required />
                                                    </div>
                                                </div>
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 form-group card required'>
                                                        <label class='control-label'>Card Number</label> <input
                                                            autocomplete='off' class='form-control card-number'
                                                            size='20'
                                                            id="number"
                                                            type='text'
                                                            required />
                                                    </div>
                                                </div>
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                        <label class='control-label'>CVC</label> <input
                                                            autocomplete='off'
                                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                            type='text' required />
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label'>Expiration Month</label> <input
                                                            class='form-control card-expiry-month' placeholder='MM'
                                                            size='2'
                                                            type='text' required />
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label'>Expiration Year</label> <input
                                                            class='form-control card-expiry-year' placeholder='YYYY'
                                                            size='4'
                                                            type='text' required />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="btn btn-success btn-lg btn-block" type="submit">
                                                            Pay Now ($100)
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
@section('javaScript')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function () {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function (e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function (i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });


        // target the input field by ID and assign keyup event
        $('#number').on('keyup', function (e) {
            // get value of the input field
            var val = $(this).val();
            var newval = '';
            // write regex to remove any space
            val = val.replace(/\s/g, '');
            // iterate through each numver
            for (var i = 0; i < val.length; i++) {
                // add space if modulus of 4 is 0
                if (i % 4 == 0 && i > 0) newval = newval.concat(' ');
                // concatenate the new value
                newval = newval.concat(val[i]);
            }
            // update the final value in the html input
            $(this).val(newval);
        });



    </script>
@endsection


































































































{{--@extends('order_management.layout')--}}
{{--@section('title','stripe')--}}
{{--@section('content')--}}


{{--    <div class="container-fluid vh-100" style="margin-top:-100px">--}}
{{--        <div class="" style="margin-top:200px;">--}}
{{--            <div class="rounded d-flex justify-content-center">--}}

{{--                <div class="col-md-4 d-sm-none shadow-lg d-md-block"--}}
{{--                     style="border-bottom-left-radius: 25px;border-top-left-radius: 25px">--}}
{{--                    <img src="{{ asset('images/order_management/payment_gateway.png') }}"--}}
{{--                         class="d-block w-100 img-fluid" alt="image">--}}
{{--                </div>--}}

{{--                <div class="col-md-5 col-sm-12 shadow-lg p-5"--}}
{{--                     style="border-bottom-right-radius: 25px;border-top-right-radius: 25px;background-color: #E5E5E5;">--}}
{{--                    <div class="text-center">--}}
{{--                        <h3 class="text-success">Add New Card</h3>--}}
{{--                    </div>--}}
{{--                    <div class="p-4">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-13 col-md-offset-3">--}}
{{--                                    <div class="panel panel-default credit-card-box">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            @if (Session::has('success'))--}}
{{--                                                <div class="alert alert-success text-center">--}}
{{--                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>--}}
{{--                                                    <p>{{ Session::get('success') }}</p>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <form--}}
{{--                                                role="form"--}}
{{--                                                action="{{route('stripe.post')}}"--}}
{{--                                                method="post"--}}
{{--                                                class="require-validation"--}}
{{--                                                data-cc-on-file="false"--}}
{{--                                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"--}}
{{--                                                id="payment-form">--}}
{{--                                                @csrf--}}
{{--                                                <div class='form-row row'>--}}
{{--                                                    <div class='col-xs-12 form-group  required'>--}}
{{--                                                        <label class='control-label'>Name on Card</label> <input--}}
{{--                                                            class='form-control' size='4' type='text' required />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class='form-row row'>--}}
{{--                                                    <div class='col-xs-12 form-group  required'>--}}
{{--                                                        <label class='control-label'>Card Number</label>--}}
{{--                                                        <input type="text"--}}
{{--                                                               size="20"--}}
{{--                                                               autocomplete="off"--}}
{{--                                                               class="form-control"--}}
{{--                                                               id="number"--}}
{{--                                                               placeholder='xxxx xxxx xxxx xxxx'--}}
{{--                                                               required />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class='form-row row'>--}}
{{--                                                    <div class='col-xs-12 col-md-4 form-group cvc required'>--}}
{{--                                                        <label class='control-label'>CVC</label> <input autocomplete='off'--}}
{{--                                                                                                        class='form-control card-cvc'--}}
{{--                                                                                                        placeholder='123' size='4'--}}
{{--                                                                                                        type='text' required />--}}
{{--                                                    </div>--}}
{{--                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>--}}
{{--                                                        <label class='control-label'>Expiration Month</label> <input--}}
{{--                                                            class='form-control card-expiry-month' placeholder='MM' size='2'--}}
{{--                                                            type="text" required />--}}
{{--                                                    </div>--}}
{{--                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>--}}
{{--                                                        <label class='control-label'>Expiration Year</label> <input--}}
{{--                                                            class='form-control card-expiry-year' placeholder='YYYY' size='4'--}}
{{--                                                            type="text" required />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col-xs-12">--}}
{{--                                                        <button class="btn btn-success btn-lg btn-block" type="submit">Pay Now ($100)--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--@endsection--}}

{{--@section('javaScript')--}}
{{--    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        $(function () {--}}
{{--            var $form = $(".require-validation");--}}
{{--            $('form.require-validation').bind('submit', function (e) {--}}
{{--                var $form = $(".require-validation"),--}}
{{--                    inputSelector = ['input[type=email]', 'input[type=password]',--}}
{{--                        'input[type=text]', 'input[type=file]',--}}
{{--                        'textarea'--}}
{{--                    ].join(', '),--}}
{{--                    $inputs = $form.find('.required').find(inputSelector),--}}
{{--                    $errorMessage = $form.find('div.error'),--}}
{{--                    valid = true;--}}
{{--                $errorMessage.addClass('hide');--}}
{{--                $('.has-error').removeClass('has-error');--}}
{{--                $inputs.each(function (i, el) {--}}
{{--                    var $input = $(el);--}}
{{--                    if ($input.val() === '') {--}}
{{--                        $input.parent().addClass('has-error');--}}
{{--                        $errorMessage.removeClass('hide');--}}
{{--                        e.preventDefault();--}}
{{--                    }--}}
{{--                });--}}
{{--                if (!$form.data('cc-on-file')) {--}}
{{--                    e.preventDefault();--}}
{{--                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));--}}
{{--                    Stripe.createToken({--}}
{{--                        number: $('.card-number').val(),--}}
{{--                        cvc: $('.card-cvc').val(),--}}
{{--                        exp_month: $('.card-expiry-month').val(),--}}
{{--                        exp_year: $('.card-expiry-year').val()--}}
{{--                    }, stripeResponseHandler);--}}
{{--                }--}}
{{--            });--}}

{{--            function stripeResponseHandler(status, response) {--}}
{{--                if (response.error) {--}}
{{--                    $('.error')--}}
{{--                        .removeClass('hide')--}}
{{--                        .find('.alert')--}}
{{--                        .text(response.error.message);--}}
{{--                } else {--}}
{{--                    /* token contains id, last4, and card type */--}}
{{--                    var token = response['id'];--}}
{{--                    $form.find('input[type=text]').empty();--}}
{{--                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");--}}
{{--                    $form.get(0).submit();--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}


{{--        // target the input field by ID and assign keyup event--}}
{{--        $('#number').on('keyup', function(e){--}}
{{--            // get value of the input field--}}
{{--            var val = $(this).val();--}}
{{--            var newval = '';--}}
{{--            // write regex to remove any space--}}
{{--            val = val.replace(/\s/g, '');--}}
{{--            // iterate through each numver--}}
{{--            for(var i = 0; i < val.length; i++) {--}}
{{--                // add space if modulus of 4 is 0--}}
{{--                if(i%4 == 0 && i > 0) newval = newval.concat(' ');--}}
{{--                // concatenate the new value--}}
{{--                newval = newval.concat(val[i]);--}}
{{--            }--}}
{{--            // update the final value in the html input--}}
{{--            $(this).val(newval);--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}

