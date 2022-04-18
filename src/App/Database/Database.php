<?php

namespace App\App\Database;

use PDO;

class Database
{
    public string $table;

    private string $query;

    private string $select;

    public \PDO $pdo;

    public function __construct(string $class)
    {
        $host = Config::read('host');
        $port = Config::read('port');
        $db = Config::read('db');
        $user = Config::read('user');
        $pass = Config::read('pass');
        $charset = Config::read('charset');
        $dsn = "mysql:host=$host; port=$port; dbname=$db; charset=$charset";

        $this->pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        $this->table = $class::$table;        
        // $this->table = '';
    }


    public function select(string $select)
    {
        $this->select = $select;
        return 'select' . $select;
        
    }

    public function query(string $query)
    {           
        $query = $this->pdo->select . 'from' . $table . $query;
        $smtp = $this->pdo->prepare($query);
        $smtp->execute();

    }

    public function getData($param = null)
    {
        $this->pdo->query();
    }

    /*
     * $db = new Database(User::class);
     * $data = $db->select('*')
     * ->query('where id = :id', '1')
     * ->get();
     */
}
