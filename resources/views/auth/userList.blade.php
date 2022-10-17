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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/user_management/user.css') }}">
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


    <title>Admin | User List</title>
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
                    <button type="button" class="btn " onclick="window.location.href='/auth/logout'"
                        style="margin-top: 12px; margin-right:25px; background-color:white; color:#6EBD6C;">
                        <i class="fas fa-user-alt" style="margin-right:2px; color:#6EBD6C"></i>
                        <span>Sign Out</span>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- Nav bar-->
    
        <!-- Side bar -->
        <div class="sidebar"style="border: solid 2px; border-color:white; background-color:#6EBD6C;">
            <b>
                <a href="{{ route('auth.userList') }}" style="color: #f1f1f1; margin-top: -40px"><i class="bi bi-people-fill"></i>
                    Users</a>
                <a href="" style="color: #f1f1f1"><i class="bi bi-bag-fill"></i> Products</a>
                <a href="/orders" style="color: #f1f1f1"><i class="bi bi-box-fill"></i> Orders</a>
                <a href="delivery" style="color: #f1f1f1"><i class="bi bi-cart-check-fill"></i> Delivery Details</a>
                <a href="review" style="color: #f1f1f1"><i class="bi bi-star-fill"></i> Review & Feedback</a>
                <a href="{{ route('logout.perform') }}" style="color: #f1f1f1; position: absolute; bottom: 0;"><i class="bi bi-power"></i>
                    Logout</a>
            </b>
        </div>
        <!-- Side bar -->
    
        <div class="content" style="margin-left: 250px">
            @yield('content')
        </div>

        @yield('content')

        <div class="main">
        <br><b><h1><center>User List </h1></b>
        <br>
        <input type="text" class="search" id="searchbar" onkeyup="searchUser()" name="search" placeholder="Search here..">
        <center>
        <button class="ibtn4" onclick="openForm()"><i class="fa fa-user-plus"></i></button>
        <div class="form-popup" id="myForm">
            <form action="{{ route('auth.save') }}" class="form-container" method="POST">
                @if(Session::get("success"))
                <div class="alert alert-success">
                    {{ Session::get("success") }}
                </div>
                @endif

                @if(Session::get("fail"))
                <div class="alert alert-success">
                    {{ Session::get("fail") }}
                </div>
                @endif

                @csrf
                <button class="ibtn6" onclick="closeForm()"><i class="fa fa-window-close" aria-hidden="true"></i></button><br>
                <h1>User Form</h1>
                <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="integer" class="form-control" name="mobileNumber" placeholder="Mobile Number" value="{{ old('mobileNumber') }}" required>
                <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}" required>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
        <button class="ibtn5" onclick="window.location.href='/auth/downloadPdf'"><i class="fa fa-download"></i></button>
        <br>

        <!-- Update Form -->
        <div class="form-popup" id="update-form">
            <form action="{{ route('auth.update') }}" class="form-container" method="post">
                @csrf
                <button type="button" class="ibtn6" onclick="closeUpdateForm()"><i class="fa fa-window-close" aria-hidden="true"></i></button><br>
                <h1>User Form</h1>
                <input type="text" name="id" id="update-user-id" hidden />
                <input type="text" class="form-control" name="username" value="" placeholder="Username" required/>
                <input type="text" class="form-control" name="email" placeholder="Email" required />
                <input type="integer" class="form-control" name="mobileNumber" placeholder="Mobile Number" required />
                <input type="text" class="form-control" name="address" placeholder="Address" required />
                <input type="password" class="form-control" name="password" placeholder="Password" required />
                <button type="submit" class="btn">Update</button>
            </form>
        </div>

        <table class="styled-table" id="userTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Action</th>
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
                    <td>
                        <button class="ibtn2" onclick="openUpdateForm('{{ $user->user_id }}')"><i class="fa fa-pencil-square-o"></i></button>
                        
                        <button class="ibtn3" onclick="document.getElementById('df-id{{ $user->user_id }}').style.display='block'"><i class="fa fa-trash"></i></button>
                        <div id="df-id{{ $user->user_id }}" class="modal">
                            <span onclick="document.getElementById('df-id{{ $user->user_id }}').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <form class="modal-content" action="{{ route('auth.delete', $user->user_id ) }}">
                              <div class="container">
                                <h1>Delete Account</h1>
                                <p>Are you sure you want to delete this account?</p>
                          
                                <div class="clearfix">
                                  <button class="btn7" class="cancelbtn">Cancel</button>
                                  <button class="btn8" class="deletebtn">Delete</button>
                                </div>
                              </div>
                            </form>
                          </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

                <!-- Footer -->

                <footer class="text-white"
                style="background-color: #6EBD6C; margin-top:50px; background-image: url('../images/Header and Footer/footer.png');">
                    <!-- Grid container -->
                    <div class="container p-4">
                        <!--Grid row-->
                        <div class="row" style>
                            <!--Grid column-->
                            <div class="align-left" style="margin-left: -auto">
                                <h3 class="">Agri Online</h3>
                                    <p>
                                        Supporting Sustainable Greener Agriculture with Innovation,<br/> Quality Inputs and Extension
                                        Services.
                                    </p>
                            </div>
                            <!--Grid column-->
        
                            <!--Grid column-->
                            <div class="float-end" style="margin-left: 900px; margin-top: -100px;">
                                <h5 class="text-uppercase">Navigate</h5>
        
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#!" class="text-white">Home</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Product</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->
                            <div class="" style="margin-left: -10px; margin-top: -20px;">
                                <i class="fab fa-facebook" style="margin-left: 10px;"></i>
                                <i class="fab fa-linkedin" style="margin-left: 10px;"></i>
                                <i class="fab fa-instagram" style="margin-left: 10px;"></i>
                                <i class="fab fa-whatsapp" style="margin-left: 10px;"></i>
                            </div>
                        </div>
                    <!--Grid row-->
                    </div>
                    <!-- Grid container -->
        
        
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2022 Copyright: SER080
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
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

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>

<script>
    const updateForm = document.getElementById("update-form");

    function openUpdateForm(user_id) {
        document.getElementById("update-user-id").setAttribute("value", user_id);
        updateForm.style.display = "block";
    }

    function closeUpdateForm() {
        updateForm.style.display = "none";
    }
</script>

<script>
    var modal = document.getElementById('df-id{{ $user->user_id }}');
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    $('#userTable').on('click', '.deletebtn', function () {
        var user_id = $(this).data('id');

        var delete_confirm = $.confirm({
            title: 'Confirm!',
            content: 'Simple confirm!',
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
                            url: '{{url('/userList')}}' + '/' + user_id,
                            type: 'DELETE',
                            dataType: 'JSON',
                            success: function (response) {
                                alert(response.msg);
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

<script>
    function searchUser() {
        var input, filter, table, thead, tbody, tr, td, i, txtValue;
        input = document.getElementById("searchbar");
        filter = input.value.toUpperCase();
        table = document.getElementById("userTable");
        tbody = table.getElementsByTagName("tbody");
        tr = table.getElementsByTagName("tr");
        
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
            
            @yield('javaScript')
            
            </html>