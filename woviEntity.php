<?php

abstract class WoviEntity
{

    protected $link;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpw = "root";
    protected $database = "wovi2";
    public $log_db_errors;
    protected $table;
    /**
     *The construct method is used to connect to the database, the connection informations
     *automatic set in the constructor
     *
     */
    public function __construct()
    {
        try {
            $this->link = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->database, $this->dbuser, $this->dbpw);
            $this->link->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $this->link->query('SET NAMES utf8');
            return $this->link;

        }
        catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }


    abstract protected function get($sql);

    abstract protected function insert($values);

    abstract protected function update($key, $value, $id);

    abstract protected function delete($id);



}

