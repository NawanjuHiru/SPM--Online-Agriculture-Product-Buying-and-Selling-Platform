@extends('Admin.layout')
@section('title','All Orders')
@section('content')

    <br><br>
    <div class="text-center">
        <h3 class="text" style="color:#072a0d">All Orders</h3>
    </div>
    <div class="container-fluid vh-100" style="margin-top:20px">
        <div class="" style="margin-top:50px;">
            <div class="rounded d-flex justify-content-center">

                <div class="col-md-12 col-sm-10 shadow-lg p-5" style="background-color: #eef1f1;border-radius: 15px;">
                    
                    <div class="p-4">
                        <div class="container">
                <a style="float: right;" href="/downloadPdf" class="btn btn-success" role="button">Genarate Report <i class="fa fa-download"></i></a>

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

