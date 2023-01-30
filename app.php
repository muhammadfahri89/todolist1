<?php

require "./model/todolist.php";
require "./businesslogic/showTodolist.php";
require "./businesslogic/addTodolist.php";
require "./businesslogic/removeTodolist.php";

echo "aplikasi todo list" . PHP_EOL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
</head>
<body>
    <ul>
        <?php
        foreach($todolist as $number => $value){
        ?>
        <li><?php $number. $value?></li>
        <?php }?>
    </ul>
</body>
</html>