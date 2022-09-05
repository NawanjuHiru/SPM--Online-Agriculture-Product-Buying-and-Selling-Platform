<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthe=device-width, initial-scale.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User | Reset Password</title>
        <link rel="stylesheet" href="" integrity="">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-4 com-md-offset-4">
                    <h4>Reset Password</h4>
                    <br>
                    <form action="{{ route('auth.resetPassword') }}" method="POST">
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                        @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $email ?? old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>