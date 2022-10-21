@extends('order_management.layout')
@section('title','shopping cart')
@section('content')

<div class="col-sm-9 card" style="background-color: #F4F7F8; margin-top:40px;margin-left:200px;">

    <div class="row g-2" >
        <div class="col" >


<h1 class="text-center" style="font-family:'Trebuchet MS', sans-serif;margin-left:50px; margin-top:20px"> Shopping Cart </h1>
<br><br>
<div class="container" style="margin-bottom:20px">


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

