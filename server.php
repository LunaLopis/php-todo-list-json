<?php
header('Content-Type: application/json');

// Recupera il contenuto del file JSON
$jsonData = file_get_contents('data/todo_list.json');

// coverte il JSON in un array associativo
$todoList = json_decode($jsonData, true);

// ivia array
echo json_encode($todoList);

?>