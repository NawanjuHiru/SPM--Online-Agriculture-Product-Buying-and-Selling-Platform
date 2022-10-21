<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/order_management/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            position: absolute;
            width: 252px;
            height: 100%;
            background: #111;
            padding-top: 50px;
        }

        .sidebar h1 {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 400;
            margin: 0;
            font-size: 25px;
            text-transform: uppercase;
        }
        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #bbb;
            text-decoration: none;
            letter-spacing: 2px;
        }
    </style>


    <title>@yield('title')</title>
</head>

<body style="overflow-x:hidden">
    <!-- Nav bar-->
    <nav class="topnav-right" style="background-color: #6EBD6C; height:60px">
        <ul class="nav justify-content-end" style="">
            <li class="nav-item" style="margin-right:1200px;">
                <a href="/" style="text-decoration: none">
                    <h2 style="color: white;margin-top:10px">Agri Online</h2>

                </a>
            </li>
            <li class="nav-item" style="margin-right: 10px">
                <button type="button" class="btn "
                    style="margin-top: 12px; margin-right:25px; background-color:white; color:#6EBD6C;">
                    <i class="fas fa-user-alt" style="margin-right:2px; color:#6EBD6C"></i>
                    <span>Sign In</span>
                </button>
            </li>
        </ul>
    </nav>
    <!-- Nav bar-->

    <!-- Side bar -->
    <div class="sidebar"style="border: solid 2px; border-color:white; background-color:#6EBD6C;">
        <b>
            <a href="/auth/userList" style="color: #f1f1f1; margin-top: -40px"><i class="bi bi-people-fill"></i>
                Users</a>
            <a href="/productlist/view" style="color: #f1f1f1"><i class="bi bi-bag-fill"></i> Products</a>
            <a href="/adminorders" style="color: #f1f1f1"><i class="bi bi-box-fill"></i> Orders</a>
            <a href="/admin/delivery" style="color: #f1f1f1"><i class="bi bi-cart-check-fill"></i> Delivery Details</a>
            <a href="/admin/review" style="color: #f1f1f1"><i class="bi bi-star-fill"></i> Review & Feedback</a>
            <a href="" style="color: #f1f1f1; position: absolute; bottom: 0;"><i class="bi bi-power"></i>
                Logout</a>
        </b>
    </div>
    <!-- Side bar -->

    <div class="content" style="margin-left: 250px">
        @yield('content')
    </div>



</body>


<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script>
    function goBack() {
        window.history.back();
    }
</script>



<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('javaScript')

</html>
