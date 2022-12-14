<?php include("path.php");
      //include("app/database/db.php");
      include("app/controllers/users.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/regestration.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
<?php include("app/include/header.php"); ?>
<div class='error'>
  <p><?=$errMessage?></p>
</div>

    <form class="logIn" method="post" action="regestration.php">
        <input checked="" id="signin" name="action" type="radio" value="signin">
        <label for="signin">Войти</label>
        <input  id="signup" name="action" type="radio" value="signup">
        <label for="signup">Регистрация</label>
        <input id="reset" name="action" type="radio" value="reset">
        <label for="reset">Сброс пароля</label>
        <div id="wrapper">
          <div id="arrow"></div>
          <input id="email" placeholder="Email" type="email" name="email" value="<?=$email?>">
          <input id="username" placeholder="Имя пользователя" type="text" name="username" value="<?=$login?>">
          <input id="pass" placeholder="Пароль" type="password" name="pass">
          <input id="repass" placeholder="Повторите пароль" type="password" name=repass>
        </div>
        <button type="submit" class="btn_submit" name="btn_reg">
          <span>
            Сбросить пароль
            <br>
            Войти
            <br>
            Зарегистрироваться
          </span>
        </button>
      </form>
      <div id="hint">Click on the tabs</div>

      <?php include("app/include/footer.php")?>


</body>

</html>