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

a:link {
  text-decoration: none;
  color: beige;
}
img {
  height: 98px;
  margin-left: 34%;
  width: 100px;
}
button {
  background-color:green;
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
</style>
</head>
<body>

<h2 style="text-align:center;">Admin Login Page</h2>
<form action="{{ route('admin') }}" method="POST">
  @csrf
        <!-- Display the user's profile or dashboard content here -->
        <!-- Google Login Button -->
     


  <label for="email"><b>Email</b></label>
  <input type="text" placeholder="Enter Email"  name="email" required>

  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password" required>

  <button type="submit">Login</button><br><br>
 
</form>
</body>
</html>
