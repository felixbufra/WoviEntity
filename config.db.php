<?php
///*
//class DB
//{
//
//    /**
//    *The variable $link stores the database connection
//    *The other variables stores the needed information to connect to the database
//    *Just change the values to connect to an other database
//    *
//    *@param string $dbhost
//    *@param string $dbuser
//    *@param string $dbpw
//    *@param string $database
//    *
//    */
//
//    protected $link;
//    private $dbhost = "localhost";
//    private $dbuser = "root";
//    private $dbpw = "root";
//    private $database = "Test3";
//    protected $table = "Klassenliste";
//
//    public $log_db_errors;
//    /**
//    *The construct method is used to connect to the database, the connection informations
//    *automatic set in the constructor
//    *
//    */
//     function __construct()
//    {
//        try {
//        $this->link = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->database, $this->dbuser, $this->dbpw);
//        $this->link->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//        return $this->link;
//
//        }
//        catch(PDOException $e) {
//          echo "ERROR: " . $e->getMessage();
//        }
//  }
//
//
//     /**
//    *The get method can be passed a query,
//    *then the values stored through a while loop
//    *in an associative array $row
//    *
//    *@param string $sqlQuery
//    *@param array $row
//    *@param string $r
//    *
//    */
//    public function get($sql)
//    {
//      $stmt = $this->link->prepare($sql);
//      $stmt->execute();
//      // $stmt->setFetchMode(PDO::FETCH_ASSOC);
//      return $stmt;
//    }
//
//    // Insert method
//
//    /**
//    *The $insertQuery and $selectQuery consists of some parts, the first part is everytime the same,
//    *with a foreach loop, the keys and values get written in the Query.
//    *To insert a record, change the values and keys in index.php
//    *
//    *@param string $insertQuery
//    *@param string $selectQuery
//    *@param array $insertKeys
//    *@param array $insertValues
//    *@param array $selectParts
//    */
//    public function insert($values)
//    {
//        $insertQuery = "INSERT INTO $this->table (";
//        $selectQuery = "SELECT * FROM $this->table WHERE ";
//
//        foreach ($values as $key => $value) {
//          $insertKeys[] = $key;
//          if (is_string($value)) {
//          $value = "'$value'";
//          }
//          $insertValues[] = $value;
//
//        }
//
//        $insertKeys = implode(", ",$insertKeys);
//        $insertValues = implode(", ",$insertValues);
//        $insertQuery .= "$insertKeys) values ";
//        $insertQuery .= "($insertValues)";
//
//        foreach ($values as $key => $value) {
//            $selectParts[] = "$key = '$value' ";
//        }
//            $selectParts = implode("AND ", $selectParts);
//            $selectQuery .= "$selectParts";
//
//            $stmt = $this->link->prepare($selectQuery);
//            $stmt->execute();
//            $check = $stmt->rowCount();
//
//            if ($check == 0) {
//              echo "Data inserted";
//              $stmt = $this->link->prepare($insertQuery);
//              $stmt->execute();
//              return $stmt;
//            }
//            else {
//              echo "Record exists";
//            }
//        }
//
//
//    /**
//    *The update function, updates records in the database, by changing $key, $value and $id in index.php
//    *
//    *@param string $key
//    *@param string $value
//    *@param int $id
//    *@param string $updateQuery
//    *
//    */
//
//    public function update($key, $value, $id)
//    {
//        $updateQuery ="UPDATE $this->table SET $key = '$value' WHERE ID = '$id'";
//        $stmt = $this->link->prepare($updateQuery);
//        $stmt->execute();
//        return $stmt;
//
//    }
//
//
//    /**
//    *The delete function, delete any record in database, by changing $id in index.php
//    *
//    *@param string $deleteQuery
//    *@param string $selectQuery
//    *@param int $id
//    *
//    */
//    public function delete($id)
//    {
//        $deleteQuery = "DELETE FROM $this->table WHERE ID = '$id'";
//        $selectQuery = "SELECT * FROM $this->table WHERE ID = '$id'";
//
//        $stmt = $this->link->prepare($selectQuery);
//        $stmt->execute();
//        $check = $stmt->rowCount();
//
//        if ($check == 1) {
//          $stmt = $this->link->prepare($deleteQuery);
//          $stmt->execute();
//          echo "record deleted";
//        }else
//        {
//          echo "record doesn't exists!";
//        }
//      }
//
//
//    /**
//    * method to close the database connection
//    *
//    */
//     public function disconnect()
//    {
//        echo "connection closed";
//        mysqli_close( $this->link );
//    }
//
//}*/
