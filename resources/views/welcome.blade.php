<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    {{-- <form action="/sendTelegram" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> --}}

      <form class="row g-3" action="/sendTelegram" method="POST">
        @csrf
        <div class="col-auto">
          <label for="name" class="visually-hidden">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
        </div>
        <div class="col-auto">
          <label for="phone" class="visually-hidden">Your phone</label>
          <input type="number" class="form-control" id="phone" name="phone" placeholder="Your phone">
        </div>
        
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
      </form>


    {{-- <h1>Hello, world!</h1> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>