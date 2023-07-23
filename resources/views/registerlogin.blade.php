<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sena Book Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }} ">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <h4><a href="{{url('/')}}"><i class="fa fa-home" style="font-size:58px;"></i></a></h4>


    <div class="col-sm-4"></div>

    <div class="col-sm-4">
        <div class="centerloginpage">
            <i class="fa fa-user" style="font-size:78px;"></i>
            <h1>Login Form</h1>
        </div>
        <form method="POST" action="/login">
        @csrf
            <div class="form-group">
                <label for="InputEmail1">Email Address</label>
                <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter Your Email">

            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Enter Your Password">
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session()->has('message'))
                <p class="alert alert-danger"> {{ session()->get('message') }}</p>
            @endif

            <div class="text-center">
                <button type="submit" class="btn btn-primary " style="padding-left: 50px; padding-right: 50px">Log In</button>
            </div>
        </form>
        <div class="loginpageforgottenpw">
            <a href="{{url('forgotpassword')}}">
                <p>Forgotten password?</p>
            </a>
        </div>

        <hr>
        <div class="text-center">
            <a href="{{url('createnewaccount')}}">
                <button class="btncreatenewaccount">Create New Account</button>
            </a>
        </div>
    </div>

    <div class="col-sm-4"></div>

</body>
</html>
