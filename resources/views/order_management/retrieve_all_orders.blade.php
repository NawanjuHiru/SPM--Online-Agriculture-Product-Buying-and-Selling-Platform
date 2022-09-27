@extends('order_management.layout')
@section('title','check out')
@section('content')

    <center>
        <div class="main">
            <h1 class="text-center" style="font-family:'Trebuchet MS', sans-serif;margin-left:0px;"> Orders </h1>
            <br><br>
            <div class="container">


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
                        <th width="25%">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>


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
                                url: '{{url('/orders')}}' + '/' + order_id,
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

