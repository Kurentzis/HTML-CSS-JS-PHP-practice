<?php include("path.php")?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    
   

</head>

<body>
    <?php include("app/include/header.php"); ?>
    <main>
        <div class="slider_content">
       <div class="slideshow_wrapper" background="assets/photos/background.jpg">
        <h2 class="slider_title">Топ записи</h2>

        <div class="slider_buttons">
            <button class="prev"><</button>
            <button class="next">></button>
        </div>
        
        <div class="slider_container">
            

            <div class="slider_track">

                <figure class="slider_item">
                    <img id="img" src="assets/photos/17071734.jpg" alt="">
                    <p class="slider_text"><a href="#">Text</a></p>
                </figure>
                <figure class="slider_item">
                    <img id="img"src="assets/photos/2919342002153131.jpg" alt="" >
                    <p class="slider_text"><a href="#">Text</a></p>
                </figure>
                <figure class="slider_item">
                    <img id="img"src="assets/photos/Become-a-Programmer-Step-83.jpg" alt="" >
                    <p class="slider_text"><a href="#">Text</a></p>
                </figure>
                <figure class="slider_item">
                    <img id="img" src="assets/photos/programming-man-23LB898-scaled.jpg" alt="" >
                    <p class="slider_text"><a href="#">Text</a></p>
                </figure>
                <figure class="slider_item">
                    <img id="img" src="assets/photos/programming-man-23LB898-scaled.jpg" alt="" >
                    <p class="slider_text"><a href="#">Text</a></p>
                </figure>

            </div>


        </div>
       </div>
    </div>
       <h2 class="main-content__header">Последние публикации</h2>


       <div class="main-content">
        
        <div class="topics">

        <div class="article">
            <div class="image_container">
            <img src="assets/photos/Become-a-Programmer-Step-83.jpg" alt="" class="article__pic">
            </div>
            <div class="article__content">
                <h3 class="article__title">Прикольная статья о вёрстке сайта...</h3>
                <p class="article_publication-date"> Автор: Петя Иванов  22.08.2022</p>
                <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nunc sed sodales ex, nec vehicula quam. Curabitur efficitur laoreet efficitur. Aenean in metus risus. 
                    Fusce id eros nisi. Fusce luctus risus in rhoncus auctor. Ut accumsan est mauris, id scelerisque lacus
                    placerat et. Aliquam aliquet libero eu est venenatis fringilla nec sed just. </p>
                
            </div>
        </div>

        <div class="article">
            <div class="image_container">
            <img src="assets/photos/2919342002153131.jpg" alt="" class="article__pic">
            </div>
            <div class="article__content">
                <h3 class="article__title">Прикольная статья о вёрстке сайта...</h3>
                <p class="article_publication-date"> Автор: Петя Иванов  22.08.2022</p>
                <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nunc sed sodales ex, nec vehicula quam. Curabitur efficitur laoreet efficitur. Aenean in metus risus. 
                    Fusce id eros nisi. Fusce luctus risus in rhoncus auctor. Ut accumsan est mauris, id scelerisque lacus
                    placerat et. Aliquam aliquet libero eu est venenatis fringilla nec sed just. </p>
                
            </div>
        </div>

        <div class="article">
            <div class="image_container">
            <img src="assets/photos/programming-man-23LB898-scaled.jpg" alt="" class="article__pic">
            </div>
            <div class="article__content">
                <h3 class="article__title">Прикольная статья о вёрстке сайта...</h3>
                <p class="article_publication-date"> Автор: Петя Иванов  22.08.2022</p>
                <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nunc sed sodales ex, nec vehicula quam. Curabitur efficitur laoreet efficitur. Aenean in metus risus. 
                    Fusce id eros nisi. Fusce luctus risus in rhoncus auctor. Ut accumsan est mauris, id scelerisque lacus
                    placerat et. Aliquam aliquet libero eu est venenatis fringilla nec sed just. Donec vitae dui dapibus, 
                    ultricies metus ac, ullamcorper magna. Duis non felis sit amet enim congue vestibulum nec facilisis 
                    libero. Curabitur vel tellus enim. Donec a odio at erat aliquet maximus a ut dolor. Aenean cursus odio
                     ac elit lobortis ultrices. Praesent ut lorem vel magna tincidunt molestie. Praesent in ante aliquet, 
                     condimentum turpis vel, sodales lorem. Nunc tempor vitae sem at mollis. In eu purus eu urna iaculis 
                     sollicitudin a sed tortor. Aliquam pharetra a sapien sagittis sodales. Fusce et cursus tellus, eu 
                     pulvinar enim. Mauris fringilla nunc et pulvinar hendrerit. Ut pellentesque lacus bibendum felis 
                     tempus, sed eleifend nunc imperdiet. Aliquam erat volutpat.

                    </p>
                
            </div>
        </div>
    </div>
        <div class="side_bar">
            <div class="search_form">
            <h3 class="search">Поиск</h3>
            <form action="/" method="post" class="form">
                <input type="text" class="search_input" placeholder="Введите ключевое слово...">
            </form>
        </div>

        <div class="categories">
            <h3 class="categories_title">Категории</h3>
            <ul>
                <li><a href="#">HTML5-вёрстка</a></li>
                <li><a href="#">CSS3</a></li>
                <li><a href="#">JS</a></li>
                <li><a href="#">SASS</a></li>
            </ul>
        </div>
        </div>
       </div>

    </main>

 <?php include("app/include/footer.php")?>

    <script src="js/index.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></scrip>-->
</body>

</html>