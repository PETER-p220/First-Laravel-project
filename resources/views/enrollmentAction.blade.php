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
th {background-color:darkcyan;}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>

<h2>Enrollment Application</h2>
<button id="btn"><a href="{{route('enrollment')}}">Add new</a></button>
<table>
  <tr>
    <th>#</th>
    <th>Enroll no</th>
    <th>Batch</th>
    <th>Student</th>
    <th>Join Date</th>
    <th>Fee</th>
    <th>Actions</th>
  </tr>
@foreach ($enrollmentEdit as $enrollment)
   <tr>
    <td>{{$enrollment->id}}</td>
    <td>{{$enrollment->enrollment_no}}</td>
    <td>{{$enrollment->batch}}</td>
    <td>{{$enrollment->student}}</td>
    <td>{{$enrollment->join_date}}</td>
    <td>{{$enrollment->fee}}</td>
     <td> <button style="background-color:olivedrab"><a href="edit_enrollment/{{$enrollment->id}}">edit</a></button>
     <button  style="background-color:red"><a href="delete_enrollment/{{$enrollment->id}}">delete</a></button>
     <button  style="background-color:green"><a href="show_enroll/{{$enrollment->id}}">view</a></button></td>
   </tr>
@endforeach
</table>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_table_hover by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:26:55 GMT -->
</html>
