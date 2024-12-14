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
    <form action="{{route('view_batch')}}">
    @foreach ($batchEdit as $batch)

    <div id="div">

        <p><b>Batch Name: </b>{{$batch->batch_name}}</p>
        <p><b>Course Name:  </b>{{$batch->course_name}}</p>
        <p><b>Start Date:   </b>{{$batch->start_date}}</p>

    </div>
    </form>
    @endforeach

</body>
</html>
