@extends('order_management.layout')
@section('title','shopping cart')
@section('content')

    <div class="container-fluid vh-100" style="margin-top:20px">
        <div class="" style="margin-top:50px;">
            <div class="rounded d-flex justify-content-center">

                <div class="col-md-9 col-sm-10 shadow-lg p-5" style="background-color: #E5E5E5;border-radius: 25px;">
                    <div class="text-center">
                        <h3 class="text" style="color:#224957">Shopping Cart</h3>
                    </div>
                    <div class="p-4">
                        <div class="container">


                            <table id="carttable" class="display" style="width: 100%; ">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th width="60px">Action</th>

                                </tr>
                                </thead>

                                <tbody>
                                </tbody>

                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--footer--}}

@section('javaScript')
    <script type="text/javascript">

        $(document).ready(() => {
            window.order_table = $('#carttable').DataTable({
                processing: true,
                serverSide: true,
                columns: [
                    {data: 'id', 'bVisible': false},
                    {data: 'image'},
                    {data: 'product'},
                    {data: 'price'},
                    {data: 'action'},

                ],
                ajax: {
                    "url": '{{url('/get_cart')}}',
                    "type": "POST",

                }
            });
        });

        $(document).ready(() => {
            $('#carttable').Datetable({
                'columndefs': [{
                    'target': 0,
                    'checkbox': {
                        'selectRow': true
                    }
                }]
            })
        });

    </script>

@endsection

