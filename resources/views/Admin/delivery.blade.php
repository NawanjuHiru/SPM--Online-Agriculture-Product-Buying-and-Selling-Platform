@extends('admin.layout')
@section('title', 'Review')
@section('content')

    <div style=" padding: 30px">
        <h2 class="" style=" margin-right: 750px;">Delivery Details</h2>
        <a class="btn btn-success float-end" style="margin-bottom:10px" href="">Export Report</a>
        <div class="" style="background-color: #F4F7F8; ">
            <table class="table table-hover" style="width:100%;">
                <tr style="background-color: #6EBD6C;">
                    <th><b></b></th>
                    <th><b>Username</b></th>
                    <th><b>Telephone</b></th>
                    <th><b>Status</b></th>
                    <th><b>Address</b></th>
                    <th><b>Action</b></th>
                </tr>
                @foreach ($deliveries as $deliveries)
                    <tr style="height: 50px;">
                        <td>{{ $deliveries->id }}</td>
                        <td>{{ $deliveries->username }}</td>
                        <td>{{ $deliveries->telno }}</td>
                        <td>{{ $deliveries->status }}</td>
                        <td>{{ $deliveries->address }}</td>
                        <td>
                            <div class="">
                                <a href="/delete-delivery/{{ $deliveries->id }}" class="btn btn-danger"
                                    style="width: 90px; height: 35px; opacity: 70%">
                                    delete</a>
                                <a href="/delete/{{ $deliveries->id }}" class="btn btn-primary"
                                    style="width: 90px; height: 35px; opacity: 70%">
                                    Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

@endsection
