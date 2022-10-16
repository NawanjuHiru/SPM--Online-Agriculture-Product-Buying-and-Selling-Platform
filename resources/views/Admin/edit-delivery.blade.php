@extends('admin.layout')
@section('title', 'Update Delivery Details')
@section('content')

    <form style="padding: 25px; width: 1000px" action="/editdelivery" method="POST">
        @csrf
        <h2>Update order {{ $data['username'] }}</h2>
        <p class="float-end" style="margin-top: -35px">Order ID {{ $data['id'] }}</p>
        <input type="hidden" name="id" style="width: 420px" value="{{ $data['id'] }}">

        <label>Username</label>
        <input type="text" name="username" style="width: 420px" value="{{ $data['username'] }}">

        <label>Contact Number</label>
        <input type="text" name="telno" style="width: 420px" value="{{ $data['telno'] }}">

        <label>Status</label>
        <select name="status"type="text" name="status" value="{{ $data['status'] }}"
            style="width: 420px; height: 50px">
            <option value="Inprogress">In progress</option>
            <option value="Delivered">Delivered</option>
        </select>

        <label>Address</label>
        <input type="text" name="address" style="width: 420px" value="{{ $data['address'] }}"><br>

        <button type="submit" style="width: 420px;">Update</button>
    </form>

@endsection
