<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
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
    height: 30px;
    width:100px;
    border-radius: 5px;
    cursor:pointer;
}


tr:hover {background-color:#f5f5f5;}
button{
    background-color: red;
}
a{
    color: white;
}
#search{
    margin-left:78%;
    height: 23px;
}
</style>
</head>
<body>

<h2>Teacher Application</h2>
<div id="search">

<input type="text"placeholder="Search"name="search">
<button style="background-color:black;color:white;cursor:pointer"><a href="search">Search</a></button>
</div>

<button id="btn"><a href="{{route(name: 'teacher')}}">Add new</a></button>

<table>
  <tr style="background-color:darkcyan">
    <th>#</th>
    <th>Name</th>
    <th>Email </th>
    <th>Password</th>
    <th>Actions</th>
  </tr>
  @foreach ($teacherEdit as $teacher)

  <tr>
    <td>{{$teacher->id}}</td>
    <td>{{$teacher->name}}</td>
    <td>{{$teacher->email}}</td>
    <td>{{$teacher->password}}</td>
    <td><button style="background-color:olivedrab"><a href="edit_teacher/{{$teacher->id}}">edit</a></button>
    <button  style="background-color:red"><a href="destroy_teacher/{{$teacher->id}}">delete</a></button>
    <button  style="background-color:green"><a href="show_teacher/{{$teacher->id}}">view</button></td>
  </tr>
  @endforeach

</table>
</body>
</html>
