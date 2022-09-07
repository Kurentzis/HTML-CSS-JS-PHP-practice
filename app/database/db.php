<?php
require('connect.php');

function test($value){
    echo'<pre>';
    print_r( $value);
    echo'</pre>';
}

//Проверка выполнения запроса к БД
function dbCheckError($query){
    $errorInfo = $query->errorInfo();

    if($errorInfo[0]!==PDO::ERR_NONE){
        echo $errorInfo[2];
        exit();
    }
}

function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";


    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }

            if ($i===0) {
                $sql = $sql . " WHERE $key = $value";
            }
            else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
        
    }
    //test($sql);
    //exit();
    
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    return $query->fetchAll();
}



function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";


    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }

            if ($i===0) {
                $sql = $sql . " WHERE $key = $value";
            }
            else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
//    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    return $query->fetch();
}

$params = [
  'username' => 'Oleg'  
];
//test(selectOne('blog.users', $params));




function insert($table, $params){
    global $pdo;
    //"INSERT INTO $table (admin, username, email, password) VALUES (:adm,:user,:mail,:pass)";
    $i =0;
    $cols = '';
    $masks = '';
    
    foreach($params as $key => $value){
        if($i===0){
            $cols = $cols. "$key";
            $masks = $masks ."'" . "$value". "'";
        }
        else{
            $cols = $cols. ", $key";
            $masks = $masks .", '" . "$value". "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($cols) VALUES ($masks)";
    //test($sql);
    $query = $pdo->prepare($sql);
    $query->execute($params);

    dbCheckError($query);
    return $pdo->lastInsertId();
}

function update($table, $id, $params){
    global $pdo;
    $i =0;
    $str = '';
 
    foreach($params as $key => $value){
        if($i===0){
            $str = $str . $key . " ='" . $value. "'";
        }
        else{
            $str = $str . ", " . $key . " = '" . $value. "'";
        }
        $i++;
    }
    // UPDATE $table SET `username` = 'test' WHERE `id` = 2;

    $sql = "UPDATE $table SET $str WHERE id = $id";
    //test($sql);
    //exit();
    $query = $pdo->prepare($sql);
    $query->execute($params);

    dbCheckError($query);
}


$params = [
    'username'=> 'Somebody',
    'password'=> "VicBlaBla22222"
];
//update('blog.users', 2,  $params);


function delete($table, $id){
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";
    //test($sql);
    //exit();
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
}

?>