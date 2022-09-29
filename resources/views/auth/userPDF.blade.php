{{-- <!DOCTYPE html>
<html>
<head>
    <title>UserPDF</title>
</head>
<body>
    <center>
    <h1>{{ $title }}</h1>
    <h3>{{ $description }}</h3>
    <p>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Address</th>
            </tr>
        </thead>
        @foreach ($user as $user)
            <tbody>
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobileNumber }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
            </tbody>
    </table>
</body>
</html>
 --}}










<html lang="en">

<body>

<div class="body-section">

    <h3 class="heading">Delivery Report</h3>

    <br>

    <table class="table-bordered" style="font-size:70%">

        <thead>

        <tr>

            <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Address</th>

        </tr>

        </thead>



        <tbody>

        @foreach($user as $user)

            <tr>

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

</body>

</html>