<?php
$driver = 'mysql';
$host = 'localhost';
$dbname = 'blog';
$db_user = 'root';
$db_password = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];


try{
    $pdo= new PDO("$driver:host=$host; db_name=$dbname; charset=$charset", $db_user, $db_password, $options);
    echo "Connected to $dbname at $host successfully.";
}
catch(PDOException $pe){
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}



?>