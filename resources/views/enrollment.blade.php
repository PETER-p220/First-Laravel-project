
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<h2 style="text-align:center;">Enrollment Page</h2>

<form action="{{route('enrollment')}}" method="POST">
    @csrf
  <div class="container">
    <label for="enrollment_no"><b>Enrollment number</b></label>
    <input type="text" placeholder="enrollment number" name="enrollment_no"id="enroll"><br><br>

    <label for="batch"><b>Batch</b></label>
    <input type="text" placeholder="batch" name="batch" required><br><br>

    <label for="student"><b>Student</b></label>
    <input type="text" placeholder="student" name="student" required><br><br>

    <label for="join_date"><b>Join date</b></label><br><br>
    <input type="date" placeholder="join date" name="join_date" required><br><br>

    <label for="fee"><b>Fee</b></label>
    <input type="text" placeholder="fee" name="fee" required><br><br>

    <button type="submit">Save</button>
</form>
<script>
</script>
</body>
</html>
