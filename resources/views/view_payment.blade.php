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
    <form action="{{route('view_payment')}}">
    @foreach ($paymentEdit as $payment)

    <div id="div">

        <p><b>Enrollment Number: </b>{{$payment->enrollment_no}}</p>
        <p><b> Paid Date:  </b>{{$payment->paid_date}}</p>
        <p><b>Amount:   </b>{{$payment->amount}}</p>

    </div>
    </form>
    @endforeach

</body>
</html>
