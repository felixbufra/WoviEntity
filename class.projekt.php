<?php
require_once "woviEntity.php";

Class Projekt extends WoviEntity
{

    protected $table = "pp2_project_master";


//================GET METHODS================
/**
 *change the value of $sql in index.php to get data searched by an SQL Statement
 *
 *@param int $id
 *@param string $stmt
 */

public function get($sql)
{
    $stmt = $this->link->prepare($sql);
    $stmt->execute();
    return $stmt;

}
   /*
    * Change the value of $project_id in index.php to get the data searched
    * by project_id
    *
    * @param int $project_id
    */
    public function getProjectId($project_id)
    {
        return self::get("SELECT * FROM $this->table WHERE project_id = '$project_id'");
    }

    /**
    *change the value of $project in index.php to get data searched by project_name
    *
    *@param string $project
    */

    public function getProjectName($project)
    {
        return self::get("SELECT * FROM $this->table WHERE project_name = '$project'");
    }

    /**
    *change the value of $weatherAPI in index.php to get data searched by weatherAPI_name
    *
    *@param string $weatherAPI_name
    */

    public function getWeatherAPI_name($weatherAPI)
    {
        return self::get("SELECT * FROM $this->table WHERE weatherAPI_name = '$weatherAPI'");
    }

    public function getCountry($country)
    {
        return self::get("SELECT * FROM $this->table WHERE country = '$country'");
    }

//=================END GET METHODS================





//============UPDATE METHODS==============

    public function update($key, $value, $project_id)
    {
        $updateQuery ="UPDATE $this->table SET $key = '$value' WHERE project_id = '$project_id'";
        $stmt = $this->link->prepare($updateQuery);
        $stmt->execute();
    }

    public function updateProjectName($project_name, $project_id)
    {
      self::update($this->key = 'project_name', $project_name, $project_id);
    }

    public function updateWeatherAPIName($weatherAPI_ame, $project_id)
    {
      self::update($this->key = 'weatherAPI_name', $weatherAPI_ame, $project_id);
    }

    public function updateCountry($country, $project_id)
    {
        self::update($this->key = 'country', $country, $project_id);
    }

    public function updateProjectPDF($project_pdf_url, $project_id)
    {
        self::update($this->key = 'project_pdf_url', $project_pdf_url, $project_id);
    }

    public function updateStatsJson($stats_json, $project_id)
    {
        self::update($this->key = 'stats_json', $stats_json, $project_id);
    }

    public function updateProjektspendeTab($projektspende, $project_id)
    {
        self::update($this->key = 'projektspende_tab', $projektspende, $project_id);
    }

    public function updateSonderspendeTab($sonderspende, $project_id)
    {
        self::update($this->key = 'sonderspende_tab', $sonderspende, $project_id);
    }

    public function updateWbbTab($wbb_tab, $project_id)
    {
        self::update($this->key = 'wbb_tab', $wbb_tab, $project_id);
    }

    public function updateWbbSonderspende($wbb_sonderspende, $project_id)
    {
        self::update($this->key = 'wbb_sonderspende_tab', $wbb_sonderspende, $project_id);
    }

    public function updateProjectInfo($project_info, $project_id)
    {
      self::update($this->key= 'project_info', $project_info, $project_id);
    }
//===========END UPDATE METHODS=====================


//Insert Method

    /**
     *Just change the values in index.php to insert new data
     *
     *@param array $values
     */

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


//Delete Method

/**
*Change the project_id in index.php to delete any record from the database
*
*@param int $id
*/

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


    public function disconnect()
    {
        mysqli_close( $this->link );
    }

}
