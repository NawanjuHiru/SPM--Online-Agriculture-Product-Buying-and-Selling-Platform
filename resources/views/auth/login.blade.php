@extends('initial_home_layout')
@section('title','Sign In')
@section('content')


<div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px;margin-left:250px;">

    <div class="row g-2" >
        <div class="col" >


<h1 class="text-center" style="font-family:'Trebuchet MS', sans-serif;margin-left:20px; margin-top:20px; color:#224957"> Sign In </h1>

<div class="container" style="margin-bottom:10px">
    <div class="row">
      <div class="col">
        <img src="{{ asset('/images/User/signin.jpg') }}" id="profile" width="420" height="350"
        border-radius="4" readonly>
      </div>
      <div class="col">
        <form action="{{ route('auth.check') }}" method="POST">

            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            @csrf
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="username" placeholder="Enter the user name"
                    value="{{ old('username') }}" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter the password" required>
            </div>
            <div class="left">
                <a  style="text-decoration: none;" href="{{ route('auth.adminlogin') }}">Admin Login</a>
                <br><br>
                <center>
                <button type="submit" class="btn btn-success" style="width:150px;">Sign
                    In</button>
                    <center><br>
                <P>Not a member? <a style="text-decoration: none;" href="{{ route('auth.register') }}">SignUp</a>
            </div>
        </form>
    
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection


{{--footer--}}

@section('javaScript')

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

@endsection





