<?php

class Connection
{
    // Static is so that the method is accessible globally
    public static function make($config)
    {
        // Try to connect to database, if an error occurs die and show error message
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}