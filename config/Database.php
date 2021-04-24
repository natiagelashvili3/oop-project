<?php

namespace config;

use PDO;
use Exception;

class Database
{

    protected $host = DB_HOST;
    protected $dbName = DB_TABLE;
    protected $username = DB_USER;
    protected $password = DB_PASS;
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

    public function run($query)
    {
        $data = [];

        $sql = $this->pdo->prepare( $query );
        $sql->execute();

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

    public function getById($tableName, $id)
    {
        $data = [];

        $query = "SELECT * FROM " . $tableName . " WHERE id = ".$id;

        $sql = $this->pdo->prepare( $query );
        $sql->execute();

        while ( $row = $sql->fetch() ) {
            $data = $row;
        }

        return $data;

    }

    public function deleteById($tableName, $id) {
        $query = "DELETE FROM ".$tableName." WHERE id = ".$id;
        $this->run($query);
    }

    public function getSingle($tableName)
    {
        $data = [];

        $query = "SELECT * FROM " . $tableName;

        $sql = $this->pdo->prepare( $query );
        $sql->execute();

        while ( $row = $sql->fetch() ) {
            $data = $row;
        }

        return $data;

    }
}