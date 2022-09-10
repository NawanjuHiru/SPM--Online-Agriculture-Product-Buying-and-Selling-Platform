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


    <form class="form-group form1" method="post" action="{{ url('/orders/' . $orderdata->order_id) }}">
        @method('PUT')
        {{ csrf_field() }}

        <fieldset>
            <h1 class="text-center">Update Order</h1>
            <legend><span class="number">1</span> Add your delivery details</legend>
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $orderdata->name }}" /><br>
                </div>
                <div class="col-sm-6">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" class="form-control" name="contact_number"
                        value="{{ $orderdata->contact_number }}" /><br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ $orderdata->email }}" /><br>
                </div>
                <div class="col-sm-6">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value="{{ $orderdata->address }}" /><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="zip_code">Zip code:</label>
                    <input type="text" class="form-control" name="zip_code" value="{{ $orderdata->zip_code }}" /><br>
                </div>
                <div class="col-sm-3">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" value="{{ $orderdata->city }}" /><br>
                </div>

            </div>


            {{-- <div class="button1"> --}}
            {{-- <button id="saveButton" class="btn btn-primary" style=" color:white;width:140px;font-family:'Trebuchet MS', sans-serif; ">Add</button> --}}
            {{-- <a href="{{url('/orders')}}" class="btn btn" --}}
            {{-- style="background-color:#001f4d!important; color:white;width:140px;font-family:'Trebuchet MS', sans-serif; ">Back</a> --}}
            {{-- </div> --}}

            <input type="hidden" name="order_id" value="{{ $orderdata->order_id }}" />


            <input type="submit" class="btn btn-primary" value="Update" />
            &nbsp;&nbsp;

            <button onclick="goBack()" class="btn btn"
                style="background-color:#001f4d!important; color:white;width:140px">Back
            </button>
        </fieldset>
    </form>

@endsection
