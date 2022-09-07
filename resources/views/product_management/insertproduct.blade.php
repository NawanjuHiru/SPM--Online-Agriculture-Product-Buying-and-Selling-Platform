@extends('product_management.layout')
@section('title', 'Add Product')
@section('content')


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
                <div class="row g-3">
                    <div class="col">

                        @foreach($errors->all() as $error)
                        <div class= "alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endforeach

                        <form method="POST" action="/addProduct"  style="width: 100%">
                            {{csrf_field()}}
                            <h2 class="text-left">Add Products</h2>
                            <p class="text-left">Enter your product details here.</p>

                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="proname" placeholder="Product Name">
                            </div>
                            <div class="form-group" style="margin-top: 10px; ">
                                <select name="procategory" class="form-group"
                                    placeholder="Product Category">
                                    <option value = "hidden"  style="margin-top: 10px; " disabled selected >Select Product Category</option>
                                    <option value = "Sales Income"> Vegetables </option>
                                    <option value = "Interest Income"> Fruits </option>
                                    <option value = "Commission Income"> Fertilizer </option>
                                    <option value = "Individual Order Income"> Equipment </option>
                                </select>

                            </div>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="proprice" placeholder="Product Price">
                            </div>
                            <div class="form-group"><input class="form-control" type="text"
                                    name="prodesc" placeholder="Description" style="margin-top: 10px; height: 80px; padding-bottom: 80px; ">
                            </div>
                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    style="background-color:#6EBD6C; color: white;">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </center>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
