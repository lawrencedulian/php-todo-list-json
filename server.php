<?php
$string = file_get_contents("todo.json");
$todoList = json_decode($string, true);

if (isset($_POST["newTodo"])) {
    $new_todo = $_POST["newTodo"];
    $todoList[] = [
        "text" => $new_todo,
        "done" => false
    ];
    file_put_contents("todo.json", json_encode($todoList));
}

header("Content-Type: application/json");
echo json_encode($todoList);
