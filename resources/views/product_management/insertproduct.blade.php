@extends('product_management.layout')
@section('title', 'Add Product')
@section('content')



        <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <div class="row g-3">
                    <div class="col">

                        @foreach($errors->all() as $error)
                        <div class= "alert alert-danger" role="alert">
                        {{$error}}
                        </div>
                        @endforeach

                        <form method="POST" action="{{ route('insert.product') }}" enctype="multipart/form-data" style="width: 100%" id="productForm">
                            {{csrf_field()}}
                            <h2 class="text-left">Add Products</h2>
                            <p class="text-left">Enter your product details here.</p>

                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="proname" placeholder="Product Name">
                                    @error('Product Name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="form-group" style="margin-top: 10px; ">
                                <select name="procategory" class="form-group"
                                    placeholder="Product Category">
                                    <option value = "hidden"  style="margin-top: 10px; " disabled selected >Select Product Category</option>
                                    <option value = "Vegetables"> Vegetables </option>
                                    <option value = "Fruits"> Fruits </option>
                                    <option value = "Fertilizer"> Fertilizer </option>
                                    <option value = "Equipment"> Equipment </option>
                                </select>
                                <span class="text-danger error-text procategory_error"></span>

                            </div>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="proprice" placeholder="Product Price">
                                    <span class="text-danger error-text proprice_error"></span>
                            </div>
                            <div class="form-group"><input class="form-control" type="text"
                                    name="prodesc" placeholder="Description" style="margin-top: 10px; height: 80px; padding-bottom: 80px; ">
                                    <span class="text-danger error-text prodesc_error"></span>
                                </div>
                            <div class="col-sm-6">
                                <label for="image">You can upload a product image from here</label>
                                <input type="file" style="background-color:#6EBD6C; color: white;" name="image" id="image" placeholder="Upload an image">
                                <span class="text-danger error-text image_error"></span>
                                <br>
                            </div>

                            <div class="img-holder"></div>

                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    id="saveButton" style="background-color:#6EBD6C; color: white;">Add Product</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </center>

        </div>


    </body>

    </html>
@endsection

{{--footer--}}


@section('javaScript')
        <script src="{{ asset('jquery.min.js') }}"></script>
        <script>
            $(function(){

                $('#form').on('submit', function(e){
                    e.preventDefault();

                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:json,
                        contentType:false,
                        success: function (response) {
                            alert(response.msg);
                            window.location.href = '{{url('/product/create')}}';
                        },
                        error: function (errors) {

                        }
                    });

                });
            });



            //Reset input file
            $('input[type="file"][name="image"]').val('');
            //Image preview
            $('input[type="file"][name="image"]').on('change', function(){
                var img_path = $(this)[0].value;
                var img_holder = $('.img-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                     if(typeof(FileReader) != 'undefined'){
                          img_holder.empty();
                          var reader = new FileReader();
                          reader.onload = function(e){
                              $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:100px;margin-bottom:10px;'}).appendTo(img_holder);
                          }
                          img_holder.show();
                          reader.readAsDataURL($(this)[0].files[0]);
                     }else{
                         $(img_holder).html('This browser does not support FileReader');
                     }
                }else{
                    $(img_holder).empty();
                }
            });


            // //fetch all products
            // fetchAllProducts();
            // function fetchAllProducts(){
            //     $.get('{{route("fetch.products")}}',{}, function(data){
            //          $('#AllProducts').html(data.result);
            //     },'json');
            // }


        </script>
@endsection





