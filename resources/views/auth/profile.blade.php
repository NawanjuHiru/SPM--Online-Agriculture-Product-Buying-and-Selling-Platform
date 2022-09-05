<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthe=device-width, initial-scale.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User | Profile</title>
        <link rel="stylesheet" href="css/user.css">
        <style>
            .card {
                float: center;
                margin-top: 7%;
                box-shadow: 0 4px 8px 0 rgba(221, 216, 216, 0.2);
                transition: 0.3s;
                border-radius: 3%;
                width: 900px;
                height: 390px;
                margin-left: 15%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            .container {
                padding: 2px 16px;
            }

            .column1 {
                float: left;
                width: 500px;
                padding: 10px;
                height: 400px; 
                border-radius: 0%;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
                margin-left: 1%;
            }

            .img {
                border-radius: 5px 5px 0 0;
            }

            .btn {
                background-color: #0a07be;
                border: none;
                width: 180px;
                height: 30px;
                color: white;
                border-radius: 5%;
                padding: 6px 20px;
                text-align: center;
                font-size: 14px;
                margin: 4px 2px;
                margin-left: 15%;
                opacity: 0.8;
                transition: 0.3s;
            }

            .btn:hover {opacity: 3}

            .btn1 {
                background-color: #0a07be;
                border: none;
                width: 180px;
                height: 30px;
                color: white;
                border-radius: 5%;
                padding: 6px 20px;
                text-align: center;
                font-size: 14px;
                margin: 4px 2px;
                margin-left: 0%;
                opacity: 0.8;
                transition: 0.3s;
            }

            .btn1:hover {opacity: 3}


            .form-control {
                padding: 8px;
                margin: 4px 2px;
                width: 35%;
                height: 50%;
                border: 1px solid rgb(61, 121, 177);
                border-radius: 4px;
                background-color: #203b2a;
            }

            .h1 {
                padding: 6px 20px;
            }

        </style>
    </head>
    <body>
        <div class="card" style="background-color: #d7d7df">
            <div class="row">
                <div class="column1" margin-left="100">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="{{ asset('/images/User/profile.png') }}" id="profile" width="120" height="120" border-radius="3" readonly>
                    <br>
                    <form action="" method="POST" >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" width="10">
                        <br><br>
                    </form>
                    <button class="btn">Add Product To Sale</button><br>
                    <button class="btn">View My Products</button><br>
                    <button class="btn">My Orders</button><br>
                    <button class="btn">Delivery Status</button><br>
                </div>
            <div class="column2" margin-right="110"><br>
                <h1 style="font-family: Arial">User Profile</h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{-- {{ $user -> username) }} --}}" width="50">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{-- {{ $user -> email }} --}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="integer" class="form-control" name="mobileNumber" placeholder="Mobile Number" value="{{-- {{ $user -> mobileNumber }} --}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{-- {{ $user -> address }} --}}">
                    </div>
                    <br>
                    <button class="btn1" style="background-color: #07be16">Update</button>
                    <button class="btn1" style="background-color: #c50c0c">Delete</button><br>
                </form>
            </div>