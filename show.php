<?php

    $db = mysqli_connect('localhost', 'root','root', 'table_users');
    $pdo = 'SELECT * FROM tasks WHERE id=' . $_GET["id"];
    $result = mysqli_query($db, $pdo);
    $arr = mysqli_fetch_assoc($result);

//    function showOne($arr, $data) {
//        var_dump($arr, $data);
//    }
//
//    showOne($arr, $_GET["id"]);
?>

<h3><?=  $arr["id"]?></h3>
<h3><?=  $arr["firstName"]  ?></h3>
<h3><?=  $arr["lastName"]  ?></h3>
<h3><?=  $arr["username"]  ?></h3>
