<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthe=device-width, initial-scale.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User | Sign Up</title>
        <link rel="stylesheet" href="" integrity="">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-4 com-md-offset-4">
                    <h4>Sign up</h4>
                    <br>
                    <p>Create an account</p>
                    <br>
                    <form action="{{ route('auth.save') }}" method="POST">
                        
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
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="integer" class="form-control" name="mobileNumber" placeholder="Mobile Number" value="{{ old('mobileNumber') }}">
                            <span class="text-danger">@error('mobileNumber'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}">
                            <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                        <br><br>
                        <a href="{{ route('auth.login') }}">Already a member? Sign in</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>