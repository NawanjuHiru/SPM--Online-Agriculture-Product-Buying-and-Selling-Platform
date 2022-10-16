<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthe=device-width, initial-scale.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User | Sign In</title>
        <link rel="stylesheet" href="{{ asset('css/user_management/user.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"/>
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"/> --}}

        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> --}}
    </head>
    <body>
        <!-- Nav bar-->
        <nav class="topnav-right" style="background-color: #6EBD6C; height:60px">
            <ul class="nav justify-content-end" style="">
                <li class="nav-item" style="margin-right:800px;">
                    <h2 style="color: white;margin-top:10px">Agri Online</h2>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" style="color: white;margin-top:10px">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-top:10px">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-top:10px">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-top:10px">Contact Us</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn "
                            style="margin-top: 12px; margin-right:20px; background-color:white; color:#6EBD6C;">
                        <i class="fas fa-user-alt" style="margin-right:2px; color:#6EBD6C"></i>
                        <span>Sign In</span>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- Nav bar-->

        @yield('content')

        <div class="card2" width="900" height="300" style="background-color: #d7d7df" >
            <div class="row">
                <div class="column1" margin-left="100">
                    &nbsp;&nbsp;
                    <img src="{{ asset('/images/User/signin.jpg') }}" id="profile" width="420" height="350" border-radius="4" readonly>
                </div>
                <div class="column2" margin-right="100"><br>
                    <h1 style="font-family: Arial">Sign In</h1><br>
                    <form action="{{ route('auth.check') }}" method="POST">

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <a href="{{ route('auth.adminlogin') }}">Admin Login</a>
                        <br><br>
                        <button type="submit" class="btn1" s7tyle="background-color: #272ae6">Sign In</button><br>
                        <a href="{{ route('auth.register') }}">Create an account</a>
                    </form>
                </div>
            </div>
        </div>
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