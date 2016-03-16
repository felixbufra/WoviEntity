<?php

abstract class WoviEntity
{

    protected $link;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpw = "root";
    protected $database = "wovi2";
    public $log_db_errors;
    abstract $table;
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
            return $this->link;

        }
        catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }


    public function get($sql)
    {

    }

    // Insert method

    public function insert($values)
    {
        $insertQuery = "INSERT INTO $this->table (";
        $selectQuery = "SELECT * FROM $this->table WHERE ";

        foreach ($values as $key => $value) {
            $insertKeys[] = $key;
            if (is_string($value)) {
                $value = "'$value'";
            }
            $insertValues[] = $value;

        }

        $insertKeys = implode(", ",$insertKeys);
        $insertValues = implode(", ",$insertValues);
        $insertQuery .= "$insertKeys) values ";
        $insertQuery .= "($insertValues)";

        foreach ($values as $key => $value) {
            $selectParts[] = "$key = '$value' ";
        }
        $selectParts = implode("AND ", $selectParts);
        $selectQuery .= "$selectParts";

        $stmt = $this->link->prepare($selectQuery);
        $stmt->execute();
        $check = $stmt->rowCount();

        if ($check == 0) {
            echo "Data inserted";
            $stmt = $this->link->prepare($insertQuery);
            $stmt->execute();
            return $stmt;
        }
        else {
            echo "Record exists";
        }
    }


    public function update($key, $value, $id)
    {
        $updateQuery ="UPDATE $this->table SET $key = '$value' WHERE ID = '$id'";
        $stmt = $this->link->prepare($updateQuery);
        $stmt->execute();
        return $stmt;

    }


    public function delete($id)
    {
        $deleteQuery = "DELETE FROM $this->table WHERE ID = '$id'";
        $selectQuery = "SELECT * FROM $this->table WHERE ID = '$id'";

        $stmt = $this->link->prepare($selectQuery);
        $stmt->execute();
        $check = $stmt->rowCount();

        if ($check == 1) {
            $stmt = $this->link->prepare($deleteQuery);
            $stmt->execute();
            echo "record deleted";
        }else
        {
            echo "record doesn't exists!";
        }
    }


}

