<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Payment Transactions</h1>
    <div>
        <p>Enrollment Number: {{$payment->enrollment_no}}</p>
        <p>Start Date: {{$payment->start_date}}</p>
        <p>Amount: {{$payment->amount}}</p>
    </div>
</body>
</html>
