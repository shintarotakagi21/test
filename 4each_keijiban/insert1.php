<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
$pdo->exec("insert into 4each_keijiban(user_id,handlename,title,comments)values('".id123."','".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index1.php")
    
?>