<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #search-btn{
            background-color: green;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            margin-left: 10px;
        }
        #show-more{
            background-color: aqua;
            cursor: pointer;
            padding: 10px 20px;
            text-align: center;
            border-radius: 5px;
            color: black;
            margin: 30px auto;
            display: none;
            font-size: 18px;
        }
        #search-input{
            width: 500px;
            padding: 10px 20px;
            font-size: 18px;
        }
        h1{
            text-align: center;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 60px;
        }
        .search-results{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            justify-content: space-between;
        }
        .search-result{
            margin-bottom: 60px;
            width: 30%;
            height: 100%;
            overflow: hidden;
            transition: 5s;
        }
        .search-result img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .search-result:hover img{
             opacity: 0.9;
        }
        .search-result a{
            text-transform: capitalize;
            text-decoration: none;
            color: red;
        }

        @media screen and (max-width: 768px) {
            .search-results{
                padding: 20px;
            }
            .search-result{
                width: 45%;

            }
        }
            
        

    </style>
</head>
<body>
    <h1>Image Search App</h1>
    <form action=""method="POST">
    <input type="text"placeholder="Search here"id="search-input">
    <button id="search-btn"onclick="searchImages()">Search</button>
    </form>
    <div class="search-results">
        <div class="search-result">
            <img src="images/pexels-pixabay-270366.jpg">
            <a href=""target="_blank">Petram</a>
        </div>
        <div class="search-result">
            <img src="images/istockphoto-1386341272-1024x1024.jpg">
            <a href=""target="_blank">Future</a>
        </div>
        <div class="search-result">
            <img src="images/istockphoto-1303485962-1024x1024.jpg">
            <a href=""target="_blank">Peter</a>
        </div>
        <div class="search-result">
            <img src="images/pexels-pixabay-270366.jpg">
            <a href=""target="_blank">Patrick</a>
        </div>
        <div class="search-result">
            <img src="images/istockphoto-1199502556-1024x1024.jpg">
            <a href=""target="_blank">What</a>
        </div>
        <div class="search-result">
            <img src="images/source-4280758_1280.jpg">
            <a href=""target="_blank">Else</a>
        </div>
        <div class="search-result">
            <img src="images/code-1839406_1280.jpg">
            <a href=""target="_blank">Gang</a>
        </div>
    </div>
    <button id="show-more">Show more</button>
    <script src="imageSearch.js"></script>
</body>
</html>