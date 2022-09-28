<!DOCTYPE html>
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