@extends('Admin.layout')
@section('title','All Orders')
@section('content')

    <br><br>
    <div class="col-sm-11 card" style="background-color: #F4F7F8; margin-top:40px;margin-left:50px;">

        <div class="row g-2" >
            <div class="col" >


    <h1 class="text-center" style="font-family:'Trebuchet MS', sans-serif;margin-left:50px; margin-top:20px"> All Orders </h1>
    <br><br>
    <div class="container" style="margin-bottom:20px">
                <a style="float: right;" href="/orderReport" class="btn btn-success" role="button">Genarate Report <i class="fa fa-download"></i></a>

                <table id="ordertable" class="display" style="width: 100%; ">
                    <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Name:</th>
                        <th>Contact Number:</th>
                        <th>Email:</th>
                        <th>Address:</th>
                        <th>Zip Code:</th>
                        <th>City:</th>
                        <th style="width: 80px">Action</th>
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

    <br><br><br><br><br>


@endsection

{{--footer--}}

@section('javaScript')
    <script type="text/javascript">

        $(document).ready(() => {
            window.order_table = $('#ordertable').DataTable({
                processing: true,
                serverSide: true,
                columns: [
                    {data: 'order_id', 'bVisible': false},
                    {data: 'name'},
                    {data: 'contact_number'},
                    {data: 'email'},
                    {data: 'address'},
                    {data: 'zip_code'},
                    {data: 'city'},
                    {data: 'action'},
                ],
                ajax: {
                    "url": '{{url('/get_order_list')}}',
                    "type": "POST",

                }
            });
        });

        $('#ordertable').on('click', '.btn_delete', function () {
            var order_id = $(this).data('id');

            var delete_confirm = $.confirm({
                title: 'Confirm Delete!',
                content: 'Are you sure you want to delete?',
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
                                url: '{{url('/orders')}}' + '/' + order_id,
                                type: 'DELETE',
                                dataType: 'JSON',
                                success: function (response) {
                                    
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

