@extends('admin.layout')
@section('title', 'Review')
@section('content')

    <div style=" padding: 30px">
        <h2 class="" style=" margin-right: 750px;"><b>Delivery Details</b></h2>
        <a style="float: right; background-color:#6EBD6C; color:white; margin-top:-43px" href="/download_Pdf" class="btn"
            role="button">Generate Report <i class="fa fa-download"></i></a><br>
        <div class="" style="background-color: #F4F7F8; ">
            <table class="table table-hover" style="width:100%;">
                <tr style="background-color: #6EBD6C;">
                    <th><b></b></th>
                    <th><b>Username</b></th>
                    <th><b>Telephone</b></th>
                    <th><b>Status</b></th>
                    <th><b>Address</b></th>
                    <th style="width: 20%"><b>
                            <center>Action</center>
                        </b></th>
                </tr>
                @foreach ($deliveries as $deliveries)
                    <tr style="height: 50px;">
                        <td>{{ $deliveries->id }}</td>
                        <td>{{ $deliveries->username }}</td>
                        <td>{{ $deliveries->telno }}</td>
                        <td>{{ $deliveries->status }}</td>
                        <td>{{ $deliveries->address }}</td>
                        <td>
                            <div style="">
                                <center>
                                    <a href="/delete-delivery/{{ $deliveries->id }}" class="btn btn-danger"
                                        style="width: 90px; height: 35px; opacity:90%"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </a>

                                    <a href="/edit-delivery/{{ $deliveries->id }}" class="btn btn-success"
                                        style="width: 90px; height: 35px; opacity: 100%; background-color: #6EBD6C!important;color:white;">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </center>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
