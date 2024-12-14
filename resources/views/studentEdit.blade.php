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

th {background-color:darkcyan;}
button{
    background-color: red;
}
</style>
</head>
<body>

<h2>Student Application</h2>
<button id="btn"><a href="{{route('create')}}"onclick="student()">Add new</a></button>
<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Actions </th>
  </tr>
  <tbody>

@foreach ($studentEdit as $student)

 <tr>
    <td>{{$student->id}} </td>
    <td>{{$student->name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->password}}
    </td>
    <td><button style="background-color:olivedrab"><a href="edit_std/{{$student->id}}">edit</a></button>
    <button  style="background-color:red"><a href="delete_std/{{$student->id}}">delete</a></button>
    <button  style="background-color:green"><a href="show/{{$student->id}}">view</a></button></td>
  </tr>
  @endforeach

  </tbody>
</table>
<script>
    const x=document.getElementById('demo');
    const y=document.getElementById('demo1');
    function student(){

        alert('Click Ok to add Student  ');
    }
</script>
</body>
</html>
