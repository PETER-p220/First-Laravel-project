<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#div{
    height:200px;
    width:500px;
    margin-left:30%;
    background-color:aliceblue;
    text-align: center;
}
</style>
<body>
<form action="{{route(name: 'view_student')}}">

    @foreach ($studentEdit as $student)
    <div id="div">
       <p><b>Name:  </b>{{$student->name}}</p>
       <p><b>Email:  </b>{{$student->email}}</p>
       </div>
    </form>
    @endforeach

</body>
</html>
