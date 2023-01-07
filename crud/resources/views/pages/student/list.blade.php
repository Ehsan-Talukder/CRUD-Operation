<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!-- Grid -->
<div class="container">
  <div class="row">
    <div class="col-sm">
      <table class="table table-border">
        <tr>
            <h1 align="center">Student List</h1>
        </tr>
        <br>
        <tr>
            <button class="btnn" value= "submit"> <a href="/studentAdd"> Add Student </a></button>
        </tr>
<br>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Mobile</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
<!-- Database show to list -->
        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->username}}</td>
            <td>{{$student->password}}</td>
            <td><button class="btn btn-primary-sm"> <a href="/studentEdit/{{$student->id}}/{{$student->name}}">Edit</a></button></td>
            <td><button onclick="return confirm('Are you sure?')" class="btn btn-danger-sm"> <a href="/studentDelete/{{$student->id}}/{{$student->name}}">Delete</a></button></td>
        </tr>
        @endforeach
        <!-- end -->
      </table>
    </div>
  </div>
</div>
<!-- Grid Closed -->

</body>
</html>