<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    @include('/header')
    <div class="container">
        <h2 class="d-flex justify-content-center">Add Customer</h2>
        <div class="center">
            @if(session()->has('success'))
            <div class="alert alert-success" id="alert">
                {{session()->get('success')}}
            <button style="float:right" type="button" class="close" data-dismiss="alert" >x</button>
            </div>
            @elseif(session()->has('fail'))
            <div class="alert alert-danger" id="alert">
                {{session()->get('fail')}}
            </div>
            @endif
        </div>
        <div class="row">
            <div class="d-flex justify-content-center col-md-12">
                <form style="width:500px" action="{{url('Customer/save-customer')}}" method="post">
                    @csrf
                    <div class="md-4">
                        <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            @error('name')
                                <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Hotel</label>
                            <input type="text" class="form-control" name="hotel" value="{{old('hotel')}}">
                            @error('hotel')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Seats</label>
                            <input type="number" class="form-control" name="seats" min="1" value="{{old('seats')}}">
                            @error('seats')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                    <a href="{{url('Customer/customers')}}" class="btn btn-danger mt-3">Back</a>
                </form>
            </div>
        </div>
        


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