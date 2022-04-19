<?php

namespace App\App\Database;

use PDO;

class Database
{
    public string $table;

    private string $query;

    private string $select;

    private \PDOStatement|bool $smtp = false;

    private string $class;

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
        $this->class = $class;
        $this->table = $class::$table;        
        // $this->table = '';
    }


    public function select(string $select): Database
    {
        $this->select = $select;

        return $this;
    }

    public function query(string $query, $params = null)
    {           
        $query = 'select '.$this->select . ' from ' . $this->table .' '. $query;
        $this->smtp = $this->pdo->prepare($query);
        $this->smtp->execute($params);

        return $this;
    }

    public function get(): array
    {
        if ($this->smtp !== false) {
            $data = $this->smtp->fetchAll();
            $arrayEntity = [];
            foreach ($data as $item) {
                $entity = new $this->class();
                foreach ($item as $key => $value) {
                    $tmpKey = explode('_', $key);
                    if (count($tmpKey) > 1) {
                        $key = explode('_', $key);
                        $key[1] = ucfirst($key[1]);
                        $key = implode('', $key);
                    }
                    $method = 'set'.ucfirst($key);
                    $entity->$method($value);
                }
                $arrayEntity[] = $entity;
            }

            return $arrayEntity;
        }

        throw new \Exception('smtp is false');
    }
}
