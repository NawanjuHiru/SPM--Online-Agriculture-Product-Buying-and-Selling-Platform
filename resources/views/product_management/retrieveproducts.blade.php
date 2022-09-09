@extends('product_management.layout')
@section('title','Retrieve Products')
@section('content')

    <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <div class="row g-3">
                    <div class="col">


            <h1 class="text-center" style="font-family:'Trebuchet MS', sans-serif;margin-left:0px; margin-top:20px"> My Products </h1>
            <br><br>
            <div class="container" style="margin-bottom:20px">


                <table id="product_details" class="display" style="width: 100%; ">
                    <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Description</th>

                        <th width="25%">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>

            </div>
        </div>
            </div>
        </div>
    </center>
    <br>


@endsection

{{--footer--}}

@section('javaScript')
    <script type="text/javascript">

        $(document).ready(() => {
            window.product_details = $('#product_details').DataTable({
                processing: true,
                serverSide: true,
                columns: [
                    {data: 'product_id', 'bVisible': false},
                    {data: 'product_name'},
                    {data: 'category'},
                    {data: 'product_price'},
                    {data: 'product_desc'},
                    {data: 'action'},

                ],
                ajax: {
                    "url": '{{url('/get_product_list')}}',
                    "type": "POST",

                }
            });
        });

        $('#product_details').on('click', '.btn_delete', function () {
            var product_id = $(this).data('id');

            var delete_confirm = $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {

                    cancel: function () {
                    },

                    somethingElse: {
                        text: 'Delete',
                        type: 'red',
                        btnClass: 'btn-red',
                        keys: ['enter', 'shift'],
                        action: function () {

                            $.ajax({
                                url: '{{url('/products/delete')}}' + '/' + product_id,
                                type: 'DELETE',
                                dataType: 'JSON',
                                success: function (response) {
                                    alert(response.msg);
                                    order_table.ajax.reload();
                                    delete_confirm.close();

                                },
                                error: function (errors) {

                                }
                            });
                            return false;
                        }
                    }
                }
            });


        });
    </script>

@endsection
