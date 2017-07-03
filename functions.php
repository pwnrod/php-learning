<?php

function connectToDb() {
    // Try to connect to database, if an error occurs die and show error message
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    // First, prepare your statement
    $statement = $pdo->prepare('select * from todos');

    // Next, execute your statement
    $statement->execute();

    // Lastly, fetch rows from the results
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}