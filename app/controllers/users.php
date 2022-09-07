<?php 
require("app/database/db.php");
session_start();

$errMessage = '';
$regSuccessMessage = '';

$isSubmitted = false;
$login ='';
$email ='';
$result = '';



//$regForm = $_POST['username']




if($_SERVER['REQUEST_METHOD']=='POST' AND $_POST['action']=='signup'){
    $login =trim($_POST['username']);
    $email =trim($_POST['email']);
    $pass = trim($_POST['repass']);
    $passFirst = trim($_POST['pass']);
    $admin = 0;
    
    $existance =  selectOne('blog.users', ['email'=> $email]);

    
    //test($result);

    if($login === '' || $email==='' || $pass ===''){
        $errMessage = "Не все поля заполнены!";
    }
    elseif(mb_strlen($login, 'UTF-8')<3){
        $errMessage = "Слишком коротое имя пользователя!";
    }
    else if($passFirst!==$pass){
        $errMessage = "Пароли не совпадают!";
    }
    else if($email === $existance['email']){
        $errMessage = "Почта уже есть!!";
    }
    else{
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $post = [
            'admin' =>$admin,
            'username' =>$login,
            'email' =>$email,
            'password' =>$pass,
        ];

        $isSubmitted = true;

        //test($post);
        $id = insert('blog.users', $post);
        $user = selectOne('blog.users', ['id' => $id]);

        $_SESSION;
        //test($user);
        //$errMessage = "Пользователь ". "<strong>" . $login ." </strong>" . " успешно зарегестрирован!";
    }
}
else{
    //$id = insert('blog.users', $post);
    
    //$isSubmitted = true;
}

    //echo $id;


?>