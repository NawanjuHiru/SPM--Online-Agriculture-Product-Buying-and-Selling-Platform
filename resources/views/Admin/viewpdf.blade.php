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
                            <th><b>ID</b></th>
                            <th><b>Username</b></th>
                            <th><b>Telephone</b></th>
                            <th><b>Status</b></th>
                            <th><b>Address</b></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($deliveries as $deliveries)
                            <tr>
                                <td>{{ $deliveries->id }}</td>
                                <td>{{ $deliveries->username }}</td>
                                <td>{{ $deliveries->telno }}</td>
                                <td>{{ $deliveries->status }}</td>
                                <td>{{ $deliveries->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </center>
</body>

</html>
