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

    <div class="col-sm-4">
        <div class="addbookdetails">
            <h1>Add Book Details</h1>
        </div>
        <form method="POST" action="/addbook" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="BookName" name="bookname" placeholder="Book Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="AuthorName" name="authorname" placeholder="Author Name">
            </div>
            <div class="form-group">
                <textarea rows="4" cols="50" name="details" class="form-control" placeholder="Details"></textarea>
            </div>
            <div class="form-group">
            <label class="col-sm-6 col-form-label">Select Cover Page Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Upload Cover Page Image">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary " style="padding-left: 50px; padding-right: 50px">Add Book</button>
            </div>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="col-sm-4">
        <div class="uploadimgpreview">
            <h3>Select Image Preview</h3>
            <img id="preview-image-before-upload" style="max-height: 250px;">
        </div>
    </div>

    <div class="col-sm-4"></div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e)
        {
            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result); }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

    <div class="col-sm-12">
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('message') }}.
            </div>
        @endif
    </div>


    <div class="col-sm-12">
        <table class="table table-dark">
            <thead>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Details</th>
                <th>Book Cover Page</th>
            </thead>
             @foreach($bookdetabledata as $tbdata)
            <tr>
                <td>{{$tbdata->bookname}}</td>
                <td>{{$tbdata->authorname}}</td>
                <td>{{$tbdata->details}}</td>
                <td>{{$tbdata->filename}}</td>
                <td>
                    <a href="/bookupdate/{{$tbdata->id}}" class="btn btn-warning">Update</a>
                    <a href="/bookdelete/{{$tbdata->id}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
