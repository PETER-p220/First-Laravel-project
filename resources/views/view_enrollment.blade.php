<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #div{
        background-color: aliceblue;
        height: 200px;
        width: 400px;
        text-align:center;
        margin-left: 32%;
    }
</style>
<body>
    <form action="{{route('view_enrollment')}}">
    @foreach ($enrollmentEdit as $enrollment)

    <div id="div">

        <p><b>Enrollment Number: </b>{{$enrollment->enrollment_no}}</p>
        <p><b> Batch:  </b>{{$enrollment->batch}}</p>
        <p><b>Student:   </b>{{$enrollment->student}}</p>
        <p><b>Join Date:  </b>{{$enrollment->join_date}}</p>
        <p><b>Fee:  </b>{{$enrollment->fee}}</p>

    </div>
    </form>
    @endforeach

</body>
</html>
