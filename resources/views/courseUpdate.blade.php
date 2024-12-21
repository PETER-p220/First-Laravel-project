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

<h2 style="text-align:center;">Course Page</h2>


<form action="" method="POST">
    @csrf
  <div class="container">
    <label for="name"><b>course name</b></label>
    <input type="text" placeholder="course name" value="{{$course->name}}" name="name" required>

    <label for="syllabus"><b>Syllabus</b></label>
    <input type="text" placeholder="Enter syllabus" value="{{$course->syllabus}}" name="syllabus" required>

    <label for="duration"><b>Duration</b></label>
    <input type="time" placeholder="Enter Duration" value="{{$course->duration}}" name="duration" required>

    <button type="submit">Update</button>

</form>

</body>

</html>
