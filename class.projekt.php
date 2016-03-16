<?php
require_once "woviEntity.php";

Class Projekt extends WoviEntity
{

    protected $table = "pp2_project_master";


//================GET METHODS================
/**
*change the value of $id in index.php to get data searched by project_id
*
*@param int $id
*/

public function get($sql)
{
    $stmt = $this->link->prepare($sql);
    $stmt->execute();
    return $stmt;

}

    public function getID($id){
        return self::get("SELECT * FROM $this->table WHERE project_id = '$id'");

    }

/**
*change the value of $project in index.php to get data searched by project_name
*
*@param string $project
*/

public function getProjectName($project){
    return $this->get("SELECT * FROM $this->table WHERE project_name = '$project'");

}

/**
*change the value of $weatherAPI in index.php to get data searched by weatherAPI_name
*
*@param string $weatherAPI_name
*/

public function getWeatherAPI_name($weatherAPI){
    return self::get("SELECT * FROM $this->table WHERE weatherAPI_name = '$weatherAPI'");

}
//=================END GET METHODS================


//Insert Method

/**
*Just change the values in index.php to insert new data
*
*@param array $values
*/

public function insertData ($values)
{
  $this->insert ($values);
}


//============UPDATE METHODS==============
public function updateVorname($value, $id)
{
  $this->update($this->key = 'Vorname', $value, $id);
}

public function updateNachname($value, $id)
{
  $this->update($this->key = 'Nachname', $value, $id);
}

public function updateGeburtsjahr($value, $id)
{
  $this->update($this->key= 'Geburtsjahr', $value, $id);
}
//===========END UPDATE METHODS=====================


//Delete Method

/**
*Change the ID in index.php to delete any record from the database
*
*@param int $id
*/

public function deleteData($id)
{
  $this->delete($id);
}


    public function disconnect()
    {
        mysqli_close( $this->link );
    }

}
