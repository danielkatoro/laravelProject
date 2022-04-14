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
            <form action="{{route('customer.store')}}" class="form" method="post">
                @csrf
                <div class="form-group">
                    <label class="small" for="name">Name</label>
                    <input class="form-control" type="text" name="Name" id="name" placeholder="@exemple">
                </div>
                <div class="form-group">
                    <label class="small" for="phone">Phone</label>
                    <input class="form-control" type="tel" name="Phone" id="phone">
                </div>
                <div class="form-group">
                    <label class="small" for="rate">Rate</label>
                    <input class="form-control" type="number" name="Rate" id="rate" min="1" step="1">
                </div>
                <div class="form-group">
                    <label class="small" for="email">Email</label>
                    <input class="form-control" type="email" name="Email" id="email" placeholder="adresse@exemple">
                </div>
                <br>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" value="Save customer">
                </div>
            </form>
        </div>
        <div class=" pt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->Name }}</td>
                        <td>{{ $item->Phone}}</td>
                        <td>{{ $item->Rate }}%</td>
                        <td>{{ $item->Email }}</td>
                        <td>{{ $item->taille }}</td>
                        <td><a href="customer_edit/{{$item->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="customer_destroy/{{$item->id}}" class="btn btn-danger">Del</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    
    
</body>
</html>