
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

<h2 style="text-align:center;">Batch Page</h2>

<form action="" method="POST">
    @csrf
  <div class="container">
    <label for="batch_name"><b>Batch name</b></label>
    <input type="text" placeholder="batch name" value="{{$batch->batch_name}}" name="batch_name" required>

    <label for="course_name"><b>Course name</b></label>
    <input type="text" placeholder="course name" value="{{$batch->course_name}}" name="course_name" required>

    <label for="start_date"><b>Start date</b></label>
    <input type="text" placeholder="start date" value="{{$batch->start_date}}" name="start_date" required>

    <button type="submit">Update</button>
</form>

</body>
</html>
