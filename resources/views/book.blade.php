<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    @include('header')
    <div class="container p-20">
      <form action="" method="" class="ms-auto me-auto" style="width:500px">
          <div class="mb-3">
            <label for="First-Name">First Name</label>
            <input type="text" class="form-control" name="fname" >
          </div>
          <div class="mb-3">
            <label for="Last-Name">Last Name</label>
            <input type="text" class="form-control" name="lname">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <button type="submit" class="btn btn-success">Book</button>
      </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
   