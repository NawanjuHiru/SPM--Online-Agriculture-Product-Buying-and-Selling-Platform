@extends('product_management.layout')
@section('title', 'Product List')
@section('content')



        {{-- <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">

                    <div class="col">

                        <div class="col-md-6">

                                <div class="card-body" id="AllProducts">

                                </div>

                    </div>

            </div>
        </center> --}}




        <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Untitled</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <style>
            /* Left column */
            .leftcolumn {
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: left;
                width: 25%;
                padding-left: 20px;
            }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                display: none;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            .rating-container .form-control:hover,
            .rating-container .form-control:focus {
                background: #fff;
                border: 1px solid #ced4da;
            }

            .rating-container textarea:focus,
            .rating-container input:focus {
                color: #000;
            }
        </style>
    </head>

    <body>
        <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <h2 class="text-left" style="color: #6EBD6C; margin-top: 10px;">Available Products</h2>
                <div class="input-group" style="margin-top:-40px; margin-left:750px;">
                    <div class="form-outline" style="border:1px solid #6EBD6C;height:40px">
                        <input type="search" id="form1" class="form-control" style="height: 40px; " />
                        <label class="form-label" for="form1" style="color: #6EBD6C">Search</label>
                    </div>
                    <button type="button" class="btn" style="background-color: #6EBD6C;width: 40px; height: 40px">
                        <i class="fas fa-search" style="color:white;"></i>
                    </button>
                </div>
                <div class="col-sm-16" style="margin-bottom: 40px; margin-top:20px" id="AllProducts" >
                    {{-- <div class="card" style="height: 140px">
                        <div class="card-body">
                            <div class="float-sm-start">
                                content 1
                            </div>
                            <div class="float-md-start" style="margin-left: 60px ">
                                content 2
                            </div>
                            <div class="float-lg-start" style="margin-left: 70px">
                                content 3
                            </div>
                            <div class="float-lg-start" style="margin-left: 100px">
                                content 4
                            </div>
                            <div class="float-lg-start" style="margin-left: 100px">
                                content 5
                            </div>
                            <div class="float-right" style="margin-top:10px">
                                <a href="#" class="btn"
                                    style="background-color:#F20505; color:white; width:125px">Buy
                                    Now</a><br>
                                <a href="#" class="btn"
                                    style="background-color:#F3AF00; color:white; margin-top: 10px">Add to cart</a>
                            </div>
                            <div class="float-right" style="margin-left: 1000px; margin-top:-110px">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </center>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>



@endsection

{{--footer--}}

@section('javaScript')
        <script src="{{ asset('jquery.min.js') }}"></script>
        <script>
            //fetch all products
            fetchAllProducts();
            function fetchAllProducts(){
                $.get('{{route("fetch.products")}}',{}, function(data){
                     $('#AllProducts').html(data.result);
                },'json');
            }


        </script>
