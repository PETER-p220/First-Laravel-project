<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button {
        background-color:green;
        color:white;
        font-size: 19px;
        margin-left:34%;
        text-align:center;
    }
    #div{
        margin-left:20%;
        height:430px;
        width:520px;
        background-color: black;
        color:white;

    }
input{
    margin-left:200px;
    margin-top: 10%;
    height:20px;
}
#text{
    text-decoration: none;
    margin-left: 200px;
    height:200px;
}
</style>
<body>
    <form action="{{route('sendMail')}}"method="post">
   <div id="div">
    <input type="text"Placeholder="Email"name="email"><br><br>
    <input type="password"placeholder="password"name="password"><br><br>

   </div>
   <button>SignUp</button>
   </form>
</body>
</html>
