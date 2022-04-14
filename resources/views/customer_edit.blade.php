<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Customers</title>
</head>
<body>
    <div class="container mt-5 col-4">
    <div>
            <form action="{{route('customer.update')}}" class="form" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$customer->id}}">
                <div class="form-group">
                    <label class="small" for="name">Name</label>
                    <input class="form-control" type="text" name="Name" value="{{$customer->Name}}" id="name" placeholder="@exemple">
                </div>
                <div class="form-group">
                    <label class="small" for="phone">Phone</label>
                    <input class="form-control" value="{{$customer->Phone}}" type="tel" name="Phone" id="phone">
                </div>
                <div class="form-group">
                    <label class="small" for="rate">Rate</label>
                    <input class="form-control" value="{{$customer->Rate}}" type="number" name="Rate" id="rate" min="1" step="1">
                </div>
                <div class="form-group">
                    <label class="small" for="email">Email</label>
                    <input class="form-control" value="{{$customer->Email}}" type="email" name="Email" id="email" placeholder="adresse@exemple">
                </div>
                <br>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" value="Update customer">
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>