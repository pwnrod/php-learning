<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {

        // First, prepare your statement
        $statement = $this->pdo->prepare("select * from {$table}");

        // Next, execute your statement
        $statement->execute();

        // Lastly, fetch rows from the results
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table, 'two', 'three'
        );

        die(var_dump($sql));

        $statement->execute(['name' => 'Joe']);
    }
}