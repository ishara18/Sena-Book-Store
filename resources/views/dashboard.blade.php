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

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}.
    </div>
    @endif

    <div class="col-sm-4"></div>

    <div class="col-sm-4">
        <div class="dashboardcenter">
            <h1>Book Section</h1>
            <div class="dashboardbooksection">
                <a href="books"><h3>View Books</h3></a>
                <a href="bookedit"><h3>Add book</h3></a>
                <a href="bookedit"><h3>Delete Book</h3></a>
                <a href="bookedit"><h3>Update Book Details</h3></a>
            </div>
            <hr>
            <h1>Author Section</h1>
            <div class="dashboardauthorsection">
                <a href=""><h3>Add Author</h3></a>
                <a href=""><h3>Delete Author</h3></a>
            </div>
            <hr>
            <h1>Offers Section</h1>
            <div class="dashboardofferssection">
                <a href=""><h3>Add Offer</h3></a>
                <a href=""><h3>Update offer</h3></a>
                <a href=""><h3>Delete Details</h3></a>

            </div>
        </div>

    </div>

    <div class="col-sm-4"></div>

</body>
</html>
