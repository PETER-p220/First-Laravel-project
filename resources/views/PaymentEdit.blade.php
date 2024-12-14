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

<h2>Payment Application</h2>
<button id="btn"><a href="{{route('payment')}}">Add new</a></button>
<table>
  <tr>
    <th>#</th>
    <th>Enroll no</th>
    <th>Join Date</th>
    <th>Amount</th>
    <th>Actions </th>
  </tr>
  @foreach ($paymentEdit as $payment)
      <tr>
        <td>{{$payment->id}}</td>
        <td>{{$payment->enrollment_no}}</td>
        <td>{{$payment->paid_date}}</td>
        <td>{{$payment->amount}}</td>
        <td>
        <button  style="background-color:olivedrab"><a href="edit_payment/{{$payment->id}}">edit</a></button>
        <button  style="background-color:red"><a href="delete_payment/{{$payment->id}}">delete</a></button>
        <button  style="background-color:green"><a href="show_payment/{{$payment->id}}">view</a></button>
        <button style="background-color:aqua"><a href="{{$payment->id}}">Print</a></button>
    </td>
      </tr>
  @endforeach
</table>
</body>
</html>
