<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container align-items-center justify-content-center border border-primary">
        <center>
            @if(Session::has('success'))
            <div class="alert alert-success">
                <span>User Registered Sucessfully</span>
            </div>
            @endif
            @if(Session::has('failure'))
            <div class="alert alert-danger">
                <span>Something went wrong!!.. User did not Registered</span>
            </div>
            @endif
            <form action="/register" method="POST" style="width: 40%" class="text-center">
                @csrf
                <div class="mb-3">
                    <lebel class="form-label">username</lebel>
                    <input type="text" class="form-control" name="username" value="{{old('username')}}"/>
                    <span class= "text-danger">@error('username') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <lebel class="form-label">email</lebel>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
                    <span class= "text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <lebel class="form-label">password</lebel>
                    <input type="text" class="form-control" name="password" value="{{old('email')}}"/>
                    <span class= "text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Register" />
                </div>
            </form>
            <span>New User???.... <a href="/login">Login<a></span>
        </center>
    </div>
</body>

</html>