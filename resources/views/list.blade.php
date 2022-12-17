<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<style>
     body{
        font-family: 'Times New Roman',Times, serif;
    }
</style>
<body>
    <div class="d-flex justify-content-center align-items-center col-md-5 mt-5">
        <h3 class="text-primary">Student Details</h3>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <table class="table table-striped table-bordered col-md-5 mt-3" style="width:1000px">
            <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($users as $users )
                <tr>

                <td>{{$loop->iteration}}</td>
                {{-- <td>{{$users->id}}</td> --}}
                <td>{{$users->name}}</td>
                <td>{{$users->age}}</td>
                <td>{{$users->contact}}</td>
                <td>{{$users->email}}</td>
               <td><a href="edit/{{$users->id}}"><i class="fa-solid fa-pen-to-square btn btn-success"></i></a></td>
               <td><a href="delete/{{$users->id}}"><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
