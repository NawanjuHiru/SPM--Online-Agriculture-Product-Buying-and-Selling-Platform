<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    </head>
<body>

    <nav class="topnav-right" style="background-color: #6EBD6C; height:60px">
    <center> 
<div class="body-section">
    <h3 class="heading">Order Report</h3>
    <br>
    <table class="table-bordered" style="font-size:14px">
        <thead>
        <tr>
            <th>Order Id</th>
            <th>Name:</th>
            <th>Contact Number:</th>
            <th>Email:</th>
            <th>Address:</th>
            <th>Zip Code:</th>
            <th>City:</th>
        </tr>
        </thead>

        <tbody>
        @foreach($order_details as $order)
            <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->contact_number}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->zip_code}}</td>
                <td>{{$order->city}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</center>
</body>
</html>
