@extends('product_management.layout')
@section('title', 'Product List')
@section('content')



        <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">

                    <div class="col">

                        <div class="col-md-6">

                                <div class="card-body" id="AllProducts">

                                </div>

                    </div>

            </div>
        </center>







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
