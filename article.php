<?php include("path.php")?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/article.css">



    
   

</head>

<body>
<?php include("app/include/header.php"); ?>
    <main>
       <div class="main-content">
        
        <div class="topics">

        <div class="article">
            <h3 class="article__title">Прикольная статья о вёрстке сайта...</h3>
            <div class="image_container">
            <img src="assets/photos/Become-a-Programmer-Step-83.jpg" alt="" class="article__pic">
            </div>
            <div class="article__content">
                
                <p class="article_publication-date"> Автор: Петя Иванов  22.08.2022</p>
                <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nunc sed sodales ex, nec vehicula quam. Curabitur efficitur laoreet efficitur. Aenean in metus risus. 
                    Fusce id eros nisi. Fusce luctus risus in rhoncus auctor. Ut accumsan est mauris, id scelerisque lacus
                    placerat et. Aliquam aliquet libero eu est venenatis fringilla nec sed just.
                    Etiam fringilla mauris ut lacus auctor ornare vitae vel ex. Suspendisse sit amet justo metus. 
                    Praesent facilisis elit nec condimentum dictum. Phasellus at est ut lorem rutrum lobortis et et 
                    libero. Aliquam erat volutpat. Morbi felis dui, dapibus sit amet augue sit amet, ultrices tempor diam.
                     Quisque vel nibh a enim pharetra viverra nec eget eros. Ut id neque dui.
                    
                    Sed consequat pharetra magna, id interdum mi faucibus at. Aenean vehicula metus in erat eleifend ornare.
                     Mauris lobortis, lacus et sagittis porta, lectus urna suscipit lectus, non consectetur nisl dui vitae 
                     massa. Fusce elementum massa et metus euismod bibendum. Nunc id pulvinar ipsum, eu ultricies dolor. 
                     Vestibulum non ante eget elit egestas consequat a nec nibh. Nunc elementum massa et magna efficitur 
                     lobortis. Ut porttitor orci nec sollicitudin fringilla. Nunc lacinia metus congue, ultrices nunc et,
                      sodales ex. Fusce blandit venenatis ex, ac eleifend dolor placerat id.
                    
                    Cras vulputate lacus bibendum sem fermentum semper. Suspendisse maximus, risus eget venenatis fringilla,
                     odio mauris rhoncus diam, eu viverra libero lacus venenatis metus. Duis aliquam ipsum elit, id feugiat
                      ex luctus nec. Etiam diam odio, lobortis quis mattis eget, lobortis vel enim. Phasellus nec metus
                       hendrerit, vehicula lectus id, placerat justo. Aliquam ultricies nulla sit amet tortor ullamcorper
                        molestie. Curabitur volutpat ante a sem fringilla suscipit. In a diam quis libero ultrices cursus 
                        ac at nunc. Vestibulum tincidunt est et felis egestas, eu rutrum arcu imperdiet. </p>
                
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


    <!--<script src="js/index.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></scrip>-->
</body>

</html>