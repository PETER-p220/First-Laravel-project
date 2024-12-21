
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include jQuery UI CSS and JS -->
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<!-- Include the compiled app.js -->

<!-- Optionally, include the compiled CSS if needed -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
a:link{
    text-decoration: none;
    color: beige;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }

}
a:link{
    text-decoration: none;
}
</style>
</head>
<body>

<h2 style="text-align:center;">Update Payment Page</h2>

<form action="" method="POST">
    @csrf
  <div class="container">
    <label for="name"><b>Enrollment number</b></label>
    <input type="text" placeholder="Enrollment number"value="{{$payment->enrollment_no}}" name="enrollment_no" required>

    <label for="paid_date"><b>Paid date</b></label>
    <input type="text" id="datepicker"placeholder="Paid date"value="{{$payment->paid_date}}" name="paid_date" required>

    <label for="amount"><b>Amount</b></label>
    <input type="text" placeholder="Amount"value="{{$payment->amount}}" name="amount" required>

    <button type="submit">Update</button>
</form>
<script>
    $(document).ready(function() {
        $('#datepicker').datepicker({
            format: 'yyyy-MM-dd',
        });
    });
</script>

</body>
</html>
