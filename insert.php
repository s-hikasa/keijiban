<?php
    mb_internal_encoding("utf8");

    if($_POST['handlename'] != ''){
        if($_POST['title'] != ''){
            if($_POST['comments'] != ''){
                $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","");
    
                $pdo->exec("insert into 4each_keijiban(handlename,title,comments) 
                values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

                  header("Location:http://localhost/4each_keijiban/index.php");

            } else{
                echo '空白の欄があります。';
            }
        } else{
            echo '空白の欄があります。';
        }
    } else{
        echo '空白の欄があります。';
    } 
?>




<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <script src="script.js"></script>

</body>   
</html> 