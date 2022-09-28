<html lang="en">
<body>
<div class="body-section">
    <h3 class="heading">Delivery Report</h3>
    <br>
    <table class="table-bordered" style="font-size:70%">
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
</body>
</html>
