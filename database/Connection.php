<?php

class Connection
{
    // Static is so that the method is accessible globally
    public static function make()
    {
        // Try to connect to database, if an error occurs die and show error message
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}