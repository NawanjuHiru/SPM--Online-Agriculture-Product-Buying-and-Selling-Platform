@extends('order_management.layout')
@section('title','Retrieve Products')
@section('content')

    <center>
        <div class="container">
            <div class="row">
            <h2 style="text-align:center"><u>Product Details</u></h2>
            <br><br><br><br>
                <div class ="col-md-20">

                        @foreach($errors->all() as $error)
                            <div class= "alert alert-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach

                    <table class="table table-primary table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Product Id</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Category</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $product)
                                <tr>
                                    <td>{{$product -> product_id}}</td>
                                    <td>{{$product -> product_name}}</td>
                                    <td>{{$product -> category}}</td>
                                    <td>{{$product -> product_price}}</td>
                                    <td>{{$product -> product_desc}}</td>


                                    <td>
                                        <a href="#" class="btn btn-info">Update</a>
                                        <a href="#" class="btn btn-info" onclick= "return confirm('Do you really want to delete?')">Delete</a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </center>

    <br><br><br><br><br>


@endsection
