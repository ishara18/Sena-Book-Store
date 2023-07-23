<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sena Book Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }} ">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="{{url('/images/homelogo.png')}}" alt="Image" width="30" height="30"/>
            </a>
        </div>
        <ul class="nav navbar-nav mn-0 h4">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('books')}}">Books</a></li>
            <li><a href="{{url('/author')}}">Author</a></li>
            <li><a href="{{url('/offers')}}">Offers</a></li>
            <li><a href="{{url('/aboutus')}}">About Us</a></li>
            <li><a href="{{url('/contactus')}}">Contact Us</a></li>
            <li class="navregister"><a href="{{url('/accesspage')}}">Login/Register</a></li>
        </ul>
  </div>
</nav>

<div class="container">
    <div class="homepageheading">
        <h1>Sena Book Store</h1>
    </div>
    <div class="searchbooks">
        <h3>Search Books</h3>
    </div>
    <div class="viewallbooks">
        <h3>View All Books</h3>
    </div>
    <div class="footermain">
        <p>All Rights Reserved. @Lakshitha Coparation-Ishara Lakshitha</p>
    </div>

</div>

</body>
</html>
