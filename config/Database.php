<?php

namespace config;

use PDO;
use Exception;

class Database
{

    protected $host = "localhost";
    protected $dbName = "oop";
    protected $username = "root";
    protected $password = "";
    public $pdo;

    public function __construct()
    {
        $this->connect();
    }

    protected function connect()
    {
        try {
            $this->pdo = new PDO( "mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password );
        } catch ( Exception $e ) {
            print_r( $e->getMessage() );
        }
    }

    public function execute($query) {
        $data = [];

        $sql = $this->pdo->prepare( $query );
        $sql->execute();

        while ( $row = $sql->fetch() ) {
            $data[] = $row;
        }

        return $data;
    }

    public function get($tableName)
    {
        $data = [];

        $query = "SELECT * FROM " . $tableName;

        $sql = $this->pdo->prepare( $query );
        $sql->execute();

        while ( $row = $sql->fetch() ) {
            $data[] = $row;
        }

        return $data;

    }
}