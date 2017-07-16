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
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {
            die('Whoops, something went wrong.');
        }
    }
}