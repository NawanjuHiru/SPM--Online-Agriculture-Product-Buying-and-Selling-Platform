@extends('order_management.layout')
@section('title', 'check out')
@section('content')
    <br><br>
    <button style="margin-left:-150px;" class="btn btn1" onclick="history.back()"><i class="fa fa-arrow-left fa-2xl back_icon "
                                                         aria-hidden="true"></i></button>



    <form style="background-color: #E5E5E5;border-radius: 25px;" class="form-group form1 shadow-lg" method="post" action="{{url('/orders/'.$order->order_id)}}">
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
            <legend><span class="number">#</span> Update your delivery details</legend>
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">Name:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="name" value="{{$order->name}}" required/><br>
                </div>
                <div class="col-sm-6">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text"  style="color:black; background-color: #f6f6f6" class="form-control" name="contact_number"
                           value="{{$order->contact_number}}" required/><br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email">Email:</label>
                    <input type="email" style="color:black; background-color: #f6f6f6" class="form-control" name="email" value="{{$order->email}}" required/><br>
                </div>
                <div class="col-sm-6">
                    <label for="address">Address:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="address" value="{{$order->address}}" required/><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="zip_code">Zip code:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="zip_code" value="{{$order->zip_code}}" required/><br>
                </div>
                <div class="col-sm-3">
                    <label for="city">City:</label>
                    <input type="text" style="color:black; background-color: #f6f6f6" class="form-control" name="city" value="{{$order->city}}" required/><br>
                </div>

    
            <input type="hidden" name="order_id" value="{{$order->order_id}}"/>

            <div class="col-sm-4">
                <input type="submit" style="color:white;width:140px;margin-top:30px; margin-left:115px;" class="btn btn-success" value="Update"/>

            </div>
        </div>
            
        </fieldset>
    </form>

@endsection
