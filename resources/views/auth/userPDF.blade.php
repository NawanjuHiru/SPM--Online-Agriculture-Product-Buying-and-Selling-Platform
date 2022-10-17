<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <style>
            table {
                width: 100%;
            }

            th {
                padding: 12px 15px;
                height: 20px;
                background-color: #a2f5a0
            }

            tr, td {
                padding: 12px 15px;
                height: 20px;
                background-color: #b8e0b8
            }
        </style>
    </head>
<body>
    <nav class="topnav-right" style="background-color: #6EBD6C; height:100px">
        <center> 
            <div class="body-section">
                <br>
                <h3 class="heading">User Report</h3>
                <br><br>
                <table class="table-bordered" style="font-size:14px" align="center">
                    <thead>
                        <tr height="30px" width="100%">
                            <th>Id</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $user)
                        <tr height="30px" width="100%">
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobileNumber }}</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </center>
    </body>
</html>