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
    padding-top: 2px;
}
#text{
    text-decoration: none;
    margin-left: 200px;
    height:200px;
}
</style>
<body>
    <form action="{{route('mail')}}"method="POST"enctype="multipart/form-data">
        @csrf
   <div id="div">
    <input type="text"Placeholder="Email"name="email"><br><br>
    <input type="text"placeholder="Subject"name="subject"><br><br>
    <textarea name="message" raw="5"col="30"id="text"placeholder="Messages goes here...."></textarea>
   </div>
   <button>Send Message</button>
   </form>
</body>
</html>
