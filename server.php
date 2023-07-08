<?php
header('Content-Type: application/json');

// Recupera il contenuto del file JSON
$jsonData = file_get_contents('data/todo_list.json');

// coverte il JSON in un array associativo
$toDoList = json_decode($jsonData, true);

if (isset($_POST['toDoItem']) && $_POST['toDoItem'] !== '') {
    $newItem = array('text' => $_POST['toDoItem'], 'done' => true);
    $toDoList[] = $newItem;
    file_put_contents('data/todo_list.json', json_encode($toDoList));
}
// invia array
echo json_encode($toDoList);

?>