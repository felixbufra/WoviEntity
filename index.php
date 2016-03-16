<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once( 'class.projekt.php' );

//==========GET==========
/* $get = new DB();
 $sql = "SELECT * FROM Klassenliste";
 $results = $get->get($sql);

 foreach( $results as $row )
 {
     echo 'Vorname: '. $row['Vorname'] .'<br />';
     echo 'Nachname: '. $row['Nachname'] .'<br /> ';
     echo 'Geburtsjahr: '. $row['Geburtsjahr'] .'<br /><br />';

 }*/

// =======Insert=======
// //
// $insert = new Projekt();
//  $values = array(
//  "Vorname" => "Felix",
//  "Nachname" => "Bühring-Uhle",
//  "Geburtsjahr" => "1998"
//     );
// $result = $insert->insert($values);


//====Update========

// $update = new Projekt();
//
// $value = "Felix";
// $key = "Vorname";
// $id = 1;
// $result = $update->update($key, $value, $id);


//=======Delete========
//
// $deleteFromDb = new Projekt();
// $id = "38";
// $result = $deleteFromDb->delete($id);




//==============pp2_project_master===========

//===========GET==============
/*$get = new Projekt();
$sql = "SELECT * FROM pp2_project_master";
$results = $get->get($sql);

foreach( $results as $row )
{
    echo 'project_id: '. $row['project_id'] .'<br /> ';
    echo 'project_name: '. $row['project_name'] .'<br />';
    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';

}*/

//GET by project_id
$getID = new Projekt();
$id = 179472;
$results = $getID->getID($id);

foreach( $results as $row )
{
    echo 'project_id: '. $row['project_id'] .'<br />';
    echo 'project_name: '. $row['project_name'] .'<br /> ';
    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';

}
//GET by project_name
$getProjectName = new Projekt();
$project = "Vardenis";
$results = $getProjectName->getProjectName($project);

foreach( $results as $row )
{
    echo 'project_id: '. $row['project_id'] .'<br />';
    echo 'project_name: '. $row['project_name'] .'<br /> ';
    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';

}


//GET by weatherAPI_name
$getWeatherAPI_name = new Projekt();
$weatherAPI = "Vardenis,Armenia";
$results = $getWeatherAPI_name->getWeatherAPI_name($weatherAPI);

foreach( $results as $row )
{
    echo 'project_id: '. $row['project_id'] .'<br />';
    echo 'project_name: '. $row['project_name'] .'<br /> ';
    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';

}



//INSERT

// $insertData = new Projekt();
//  $values = array(
//  "project_id" => "123456",
//  "project_name" => "Bühring-Uhle",
//  "weatherAPI_name" => "arma-Uhle",
//  "country" => "1",
//  "project_pdf_url" => "https://Bühring-Uhle.pdf",
//  "stats_json" => "{Bühring-Uhle}",
//  "projektspende_tab" => "0",
//  "sonderspende_tab" => "1",
//  "wbb_tab" => "1",
//  "wbb_sonderspende_tab" => "0",
//  "project_info" => "Bühring-Uhle"
//     );
// $result = $insertData->insertData($values);

//==============pp2_project_master END===========



// $disconnect = new Projekt();
// $disconnect->disconnect();
