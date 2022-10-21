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
    <h3 class="heading">Product Report</h3>
    <br>
    <table class="table-bordered" style="font-size:14px">
        <thead>
        <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Description</th>
        </tr>
        </thead>

        <tbody>
        @foreach($product_details as $product)
            <tr>
                <td>{{$product->product_id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_desc}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</center>
</body>
</html>
