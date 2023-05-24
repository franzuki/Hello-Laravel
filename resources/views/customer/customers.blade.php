<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    @include('/header')
    <div class="container">
    <div>
        <h2>Customers</h2>
    </div>
    <div>
        <a href="{{url('Customer/add-customer')}}" style="float:right" class="btn btn-primary mb-1">Add Customer</a>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success" id="alert">
        {{session()->get('success')}}
    {{-- <button style="float:right" type="button" class="close" data-dismiss="alert" >x</button> --}}
    </div>
    @endif
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Hotel</th>
                    <th>Seats</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($data as $cust)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$cust->name}}</td>
                    <td>{{$cust->hotel}}</td>
                    <td>{{$cust->seats}}</td>
                    <td>       
                     <a href="{{url('Customer/edit-customer/'.$cust->id)}}" class="btn btn-info">Edit</a>
                     <a href="{{url('Customer/delete-customer/'.$cust->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    <script type="text/javascript">
        $("document").ready(function(){
            setTimeout(function(){
                $("div.alert").remove();
            },3000);
        });
    </script>
</body>
</html>