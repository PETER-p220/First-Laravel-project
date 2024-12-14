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
th {background-color:darkcyan;}

</style>
</head>
<body>

<h2>Batch Application</h2>
<button id="btn"><a href="{{route('batch')}}">Add new</a></button>
<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Course </th>
    <th>Start Date</th>
    <th>Actions </th>
  </tr>
  @foreach ($batchEdit as $batch)
     <tr>
     <td>{{$batch->id}}</td>
     <td>{{$batch->batch_name}}</td>
     <td>{{$batch->course_name}}</td>
     <td>{{$batch->start_date}}</td>
    <td> <button style="background-color:olivedrab"><a href="edit_batch/{{$batch->id}}">edit</a></button>
        <button  style="background-color:red"><a href="delete_batch/{{$batch->id}}">delete</a></button>
        <button  style="background-color:green"><a href="show_batch/{{$batch->id}}">view</a></button></td>
     </tr>
  @endforeach
</table>
</body>
</html>
