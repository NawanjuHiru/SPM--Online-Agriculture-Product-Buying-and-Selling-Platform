@extends('admin.layout')
@section('title', 'Review')
@section('content')

    <div style=" padding: 30px">
        <h2 class="" style=" margin-right: 750px;">Review & Feedback</h2>
        <div class="" style="background-color: #F4F7F8; ">
            <table class="table table-hover" style="width:100%;">
                <tr style="background-color: #6EBD6C;">
                    <th><b></b></th>
                    <th><b>Username</b></th>
                    <th><b>Comments</b></th>
                    <th><b>Rating</b></th>
                    <th><b>Action</b></th>
                </tr>
                @foreach ($reviewratings as $reviewrating)
                    <tr style="height: 50px;">
                        <td>{{ $reviewrating->id }}</td>
                        <td>{{ $reviewrating->username }}</td>
                        <td>{{ $reviewrating->comments }}</td>
                        <td>
                            @for ($i = 1; $i <= $reviewrating->star_rating; $i++)
                                <span><i class="fa fa-star text-warning"></i></span>
                            @endfor
                        </td>
                        <td>
                            <div class="">
                                <a href="/delete/{{ $reviewrating->id }}" class="btn btn-danger"
                                    style="width: 90px; height: 35px; opacity: 70%">
                                    delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

@endsection
