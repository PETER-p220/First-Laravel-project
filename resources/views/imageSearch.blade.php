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
    <form action="{{route('imageSearch')}}"method="GET">
    <input type="text"placeholder="Search here"id="search-input">
    <button id="search-btn"onclick="searchImages()">Search</button>
    </form>
    <div class="search-results">
        <div class="search-result">
            <img src="images" alt="">
            <a href=""target="_blank">Petram</a>
        </div>
        <div class="search-result">
            <img src="images/istockphoto-1386341272-1024x1024.jpg'">
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
            <img src="{{images/source-4280758_1280.jpg}}">
            <a href=""target="_blank">Else</a>
        </div>
        <div class="search-result">
            <img src="images/code-1839406_1280.jpg">
            <a href=""target="_blank">Gang</a>
        </div>
    </div>
    <button onclick="searchImages">Search</button>
    <button id="show-more">Show more</button>
    <script>
        const accessKey="2hJ13AFuH826578ngyCWhQbqHS5iJ6PyZdtxCQtNuoY"
const formEl=document.querySelector('form')
const inputEl=document.getElementById('search-input')
const searchResults=document.querySelector('.search-results')
const showMore=document.getElementById('show-more')

let inputData=""
let page=1;

async function searchImages(){
    inputData=inputEl.value;
    const url = `https://api.unsplash.com/search/photos?page=${page}&query=${inputData}&client_id=${accessKey}`;
    const response=await fetch(url)
    const data=await response.json()

    const results=data.results

    if(page===1){
        searchResults.innerHTML=""

    }
    results.map((result)=>{
        const imageWrapper=document.createElement("div")
        imageWrapper.classList.add('search-result')
        const image=document.createElement("img")
        image.src = result.urls.small
        image.alt=result.alt_description
        const imageLink=document.createElement("a")
        imageLink.href = result.links.html
        imageLink.target='_blank'
        imageLink.innerHTML = result.alt_description

        imageWrapper.appendChild(image)
        imageWrapper.appendChild(imageLink)
        searchResults.appendChild(imageWrapper);
    });
    page++;
    if(page > 1){
        showMore.style.display='block'
    }
}
formEl.addEventListener('submit',(event)=>{
    event.preventDefault();
    page=1;
    searchImages()
})
showMore.addEventListener('click',()=>{
    searchImages()
})


    </script>
</body>
</html>
