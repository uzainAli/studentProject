<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Students List</title>
</head>
<body>
@if(Session::has('student-deleted'))
<span>
{{Session::get('student-deleted')}}
</span>
@endif
    <div class="container">
    <h1 class="text-center">Students List</h1>
    <a class="btn btn-success mt-3"href="{{route('student.add')}}">Add New Student</a>
    </div>
    <div class="container mt-2">
    <table class="table table-light table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Contact</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->course}}</td>
      <td>{{$student->mobile_no}}</td>
      <!--"{{route('student.edit',$student->id)}}" -->
      <td><a class="btn btn-warning" href= "/edit-student/{{$student->id}}">Edit</a></td>
      <td><a class="btn btn-danger" href="/delete-student/{{$student->id}}">Delete</a></td>
    </tr>
    @endforeach    
  </tbody>
</table>
    </div>
</body>
</html>