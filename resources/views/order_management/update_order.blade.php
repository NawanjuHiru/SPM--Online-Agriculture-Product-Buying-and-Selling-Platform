@extends('order_management.layout')
@section('title', 'check out')
@section('content')
    <br><br>
    <button class="btn btn1" onclick="history.back()"><i class="fa fa-arrow-left fa-2xl back_icon "
            aria-hidden="true"></i></button>


    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert" style="padding:2px 2px;">
            {{ $error }}
        </div>
    @endforeach


    <form class="form-group form1" method="post" action="{{ url('/orders/' . $order->order_id) }}">
        @method('PUT')
        {{ csrf_field() }}

        <fieldset>
            <h1 class="text-center">Order Details</h1>

            <div class="row pb-3">
                <div class="col-4 text-center">
                    <img src="{{ asset($order->product->product_image ?? '') }}" alt="" height="100px"
                        width="100px">
                </div>
                <div class="col-4 text-center" style="margin-top: 30px;">
                    <h3 class="">{{ $order->product->product_name ?? '' }}</h3>
                </div>
                <div class="col-4 text-center" style="margin-top: 30px;">
                    <h3>{{ number_format($order->product->product_price, 2) }}</h3>
                </div>
            </div>
            <input type="hidden" name="product_id" value="{{ $order->product->product_id }}">
            <hr>
            <legend><span class="number">1</span> Add your delivery details</legend>
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $order->name }}" /><br>
                </div>
                <div class="col-sm-6">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" class="form-control" name="contact_number"
                        value="{{ $order->contact_number }}" /><br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ $order->email }}" /><br>
                </div>
                <div class="col-sm-6">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value="{{ $order->address }}" /><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="zip_code">Zip code:</label>
                    <input type="text" class="form-control" name="zip_code" value="{{ $order->zip_code }}" /><br>
                </div>
                <div class="col-sm-3">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" value="{{ $order->city }}" /><br>
                </div>

            </div>


            {{-- <div class="button1"> --}}
            {{-- <button id="saveButton" class="btn btn-primary" style=" color:white;width:140px;font-family:'Trebuchet MS', sans-serif; ">Add</button> --}}
            {{-- <a href="{{url('/orders')}}" class="btn btn" --}}
            {{-- style="background-color:#001f4d!important; color:white;width:140px;font-family:'Trebuchet MS', sans-serif; ">Back</a> --}}
            {{-- </div> --}}

            <input type="hidden" name="order_id" value="{{ $order->order_id }}" />


            <input type="submit" class="btn btn-primary" value="Next" />
            &nbsp;&nbsp;

            <button onclick="goBack()" class="btn btn"
                style="background-color:#001f4d!important; color:white;width:140px;margin-top: 10px;">Back
            </button>
        </fieldset>
    </form>

@endsection
