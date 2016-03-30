<?php
require_once "woviEntity.php";
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 29.03.16
 * Time: 13:57
 */
class Country extends WoviEntity
{

    protected $table = "pp2_project_country";


    public function get($sql)
    {
        $stmt = $this->link->prepare($sql);
        $stmt->execute();
        return $stmt;
    }


    public function update($key, $value, $project_id)
    {
        $updateQuery ="UPDATE $this->table SET $key = '$value' WHERE project_id = '$project_id'";
        $stmt = $this->link->prepare($updateQuery);
        $stmt->execute();
    }


    public function insert ($values)
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



    public function delete($project_id)
    {
        $deleteQuery = "DELETE FROM $this->table WHERE project_id = '$project_id'";
        $selectQuery = "SELECT * FROM $this->table WHERE project_id = '$project_id'";

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