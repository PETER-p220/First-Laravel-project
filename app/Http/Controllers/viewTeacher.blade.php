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

tr:hover {background-color:#f5f5f5;}
button{
    background-color: red;
}
</style>
</head>
<body>

<h2>Teacher Application</h2>
<form action="viewTeacher">
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
  </tr>
  @endforeach
</table>
</form>
</body>
</html>
