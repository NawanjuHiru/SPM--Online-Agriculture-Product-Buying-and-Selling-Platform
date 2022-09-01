<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthe=device-width, initial-scale.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="" integrity="">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-4 com-md-offset-4">
                    <h4>Sign in</h4>
                    <br>
                    <p>Reset or update passwod</p>
                    <br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" value="{{ old('password') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Reset Password</button>
                        <br>
                        <a href="{{ route('auth.login') }}">Sign in</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>