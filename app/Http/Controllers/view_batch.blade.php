<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route(name: 'view_batch')}}">

    @foreach ($batchEdit as $batch)
       <p>{{$batch->batch_name}}</p>
       <p>{{$batch->course_name}}</p>
       <p>{{$batch->start_date}}</p>
    </form>
    @endforeach

</body>
</html>
