<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
a:link{
    text-decoration: none;
    color: white;

}
#btn{
    background-color: green;
}
button{
    background-color: red;
}

tr:hover {background-color:#f5f5f5;}
th {background-color:darkcyan;}

</style>
</head>
<body>

<h2>Course Application</h2>
<button id="btn"><a href="{{route('coursePage')}}">Add new</a></button>
<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Syllabus</th>
    <th>Duration</th>
    <th>Actions </th>
  </tr>
  @include('success')

@foreach ($courseEdit as $course)
     <tr>
     <td>{{$course->id}}</td>
     <td>{{$course->name}}</td>
     <td>{{$course->syllabus}}</td>
     <td>{{$course->duration()}}</td>
<td><button style="background-color:olivedrab"><a href="edit_course/{{$course->id}}">edit</a></button>
<button style="background-color:red"><a href="delete_course/{{$course->id}}">delete</a></button>
<button  style="background-color:green"><a href="show_course/{{$course->id}}">view</a></button></td>

     </tr>
@endforeach
</table>

</body>
</html>
