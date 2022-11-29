<?php
$string = file_get_contents("todo.json");
$todoList = json_decode($string, true);


header("Content-Type: application/json");
echo json_encode($todoList);
