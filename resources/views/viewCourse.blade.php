<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #div{
        border : 1px solid green;
        height: 200px;
        width: 400px;
        background-color: aliceblue;
        text-align: center;
        margin-left: 32%;
    }
    h1{
        text-align: center;
    }
</style>
<body>
    <h1>Course Application</h1>
    @foreach ($courseEdit as $course)
    <div id="div">

    <form action="{{route('viewCourse')}}">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Course Name: {{$course->name}}</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course Syllabus: {{$course->syllabus}}</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course Duration: {{$course->duration}}</p>
    </form>
    </div>

    @endforeach
</body>
</html>
