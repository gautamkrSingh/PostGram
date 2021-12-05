<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container align-items-center justify-content-center border border-primary rounded">
        <center>
        @if(Session::has('failure'))
            <div class="alert alert-danger">
                <span>{{Session::get('failure')}}</span>
            </div>
            @endif
            <form action="/authentication" method="POST" style="width: 40%" class="text-center">
                @csrf
                <div class="mb-3">
                    <lebel class="form-label">username</lebel>
                    <input type="text" class="form-control" name="username" value="{{old('username')}}"/>
                    <span class= "text-danger">@error('username') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <lebel class="form-label">password</lebel>
                    <input type="text" class="form-control" name="password" />
                    <span class= "text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Login" />
                </div>
            </form>
            <span>New User???.... <a href="/registration">Register<a></span>
        </center>
    </div>
</body>

</html>