<?php


namespace App\App\Database;


class Database
{
    private string $table;

    private string $query;

    private string $select;

    private \PDO $db;

    public function __construct(string $class)
    {
        $this->table = $class::$table;
        //$this->table = '';
    }

    public function select(string $select)
    {
        $this->select = $select;
    }

    public function query(string $query)
    {

    }

    public function get($param = null)
    {
        $this->db->query();
    }

    /*
     * $sb = new DataBase(User:class)
     * $data = $sb->select('*')
     * ->query('where id = :id')
     * ->get();
     */
}