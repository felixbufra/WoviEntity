<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once( 'class.projekt.php' );
require_once( 'class.country.php' );
require_once( 'class.continent.php' );

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

//==============pp2_project_master===========

//===========GET==============
$get = new Projekt();
$sql = "SELECT * FROM pp2_project_master";
$results = $get->get($sql);

foreach( $results as $row )
{
    echo 'project_id: '. $row['project_id'] .'<br />';
    echo 'project_name: '. $row['project_name'] .'<br /> ';
    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br />';
    echo 'country: '. $row['country'] .'<br /> ';
    echo 'project_pdf_url: '. $row['project_pdf_url'] .'<br /> ';
    echo 'stats_json: '. $row['stats_json'] .'<br /> ';
    echo 'weather_code: '. $row['weather_code'] .'<br /> ';
    echo 'weather_temp	: '. $row['weather_temp'] .'<br /> ';
    echo 'weather_humidity: '. $row['weather_humidity'] .'<br /> ';
    echo 'weather_cloudcover: '. $row['weather_cloudcover'] .'<br /> ';
    echo 'weather_pressure: '. $row['weather_pressure'] .'<br /> ';
    echo 'weather_visibility: '. $row['weather_visibility'] .'<br /> ';
    echo 'weather_precip: '. $row['weather_precip'] .'<br /> ';
    echo 'weather_update: '. $row['weather_update'] .'<br /> ';
    echo 'projektspende_tab: '. $row['projektspende_tab'] .'<br />';
    echo 'sonderspende_tab: '. $row['sonderspende_tab'] .'<br />';
    echo 'wbb_tab: '. $row['wbb_tab'] .'<br />';
    echo 'wbb_sonderspende_tab: '. $row['wbb_sonderspende_tab'] .'<br />';
    echo 'project_info: '. $row['project_info'] .'<br />';
}

//GET by project_id
//$getID = new Projekt();
//$project_id = 179472;
//$results = $getID->getProjectId($project_id);
//
//foreach( $results as $row ){
//
//    echo 'project_id: '. $row['project_id'] .'<br />';
//    echo 'project_name: '. $row['project_name'] .'<br /> ';
//    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br />';
//    echo 'country: '. $row['country'] .'<br /> ';
//    echo 'project_pdf_url: '. $row['project_pdf_url'] .'<br /> ';
//    echo 'stats_json: '. $row['stats_json'] .'<br /> ';
//    echo 'weather_code: '. $row['weather_code'] .'<br /> ';
//    echo 'weather_temp	: '. $row['weather_temp'] .'<br /> ';
//    echo 'weather_humidity: '. $row['weather_humidity'] .'<br /> ';
//    echo 'weather_cloudcover: '. $row['weather_cloudcover'] .'<br /> ';
//    echo 'weather_pressure: '. $row['weather_pressure'] .'<br /> ';
//    echo 'weather_visibility: '. $row['weather_visibility'] .'<br /> ';
//    echo 'weather_precip: '. $row['weather_precip'] .'<br /> ';
//    echo 'weather_update: '. $row['weather_update'] .'<br /> ';
//    echo 'projektspende_tab: '. $row['projektspende_tab'] .'<br />';
//    echo 'sonderspende_tab: '. $row['sonderspende_tab'] .'<br />';
//    echo 'wbb_tab: '. $row['wbb_tab'] .'<br />';
//    echo 'wbb_sonderspende_tab: '. $row['wbb_sonderspende_tab'] .'<br />';
//    echo 'project_info: '. $row['project_info'] .'<br />';
//}
//GET by project_name
//$getProjectName = new Projekt();
//$project = "Vardenis";
//$results = $getProjectName->getProjectName($project);
//
//foreach( $results as $row )
//{
//    echo 'project_id: '. $row['project_id'] .'<br />';
//    echo 'project_name: '. $row['project_name'] .'<br /> ';
//    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';
//
//}


//GET by weatherAPI_name
//$getWeatherAPI_name = new Projekt();
//$weatherAPI = "Vardenis,Armenia";
//$results = $getWeatherAPI_name->getWeatherAPI_name($weatherAPI);
//
//foreach( $results as $row )
//{
//    echo 'project_id: '. $row['project_id'] .'<br />';
//    echo 'project_name: '. $row['project_name'] .'<br /> ';
//    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';
//
//}


//==================UPDATE==============
//
// $update = new Projekt();
// $key = "project_name";
// $value = "Uhle";
// $id = 123456;
// $result = $update->update($key, $value, $id);

#=========Update project_name=======
//$updateProjectName = new Projekt();
//$project_name = "Felix";
//$project_id = 123456;
//$result = $updateProjectName->updateProjectName($project_name, $project_id);


#=========Update WeatherAPI_name=======
//$updateWeatherAPIName = new Projekt();
//$WeatherAPI_name = "Felix";
//$project_id = 123456;
//$result = $updateWeatherAPIName->updateWeatherAPIName($WeatherAPI_name, $project_id);


#=========Update Country=======
//$updateCountry = new Projekt();
//$country = "4";
//$project_id = 123456;
//$result = $updateCountry->updateCountry($country, $project_id);


#=========Update project_pdf_url=======
//$updateProjectPdf = new Projekt();
//$project_pdf_url = "felix.pdf";
//$project_id = 123456;
//$result = $updateProjectPdf->updateProjectPDF($project_pdf_url, $project_id);


#=========Update stats_json=======
//$updateStatsJson = new Projekt();
//$stats_json = "felix.json";
//$project_id = 123456;
//$result = $updateStatsJson->updateStatsJson($stats_json, $project_id);


#=========Update projektspende_tab=======
//$updateProjektspende = new Projekt();
//$projektspende = "0";
//$project_id = 123456;
//$result = $updateProjektspende->updateProjektspendeTab($projektspende, $project_id);


#=========Update sonderspende_tab=======
//$updateSonderspende = new Projekt();
//$sonderspende = "0";
//$project_id = 123456;
//$result = $updateSonderspende->updateSonderspendeTab($sonderspende, $project_id);


#=========Update wbb_tab=======
//$updateWbbTab = new Projekt();
//$wbb_tab = "0";
//$project_id = 123456;
//$result = $updateWbbTab->updateWbbTab($wbb_tab, $project_id);


#=========Update wbb_tab=======
//$updateWbbSonderspende = new Projekt();
//$wbb_sonderspende = "0";
//$project_id = 123456;
//$result = $updateWbbSonderspende->updateWbbSonderspende($wbb_sonderspende, $project_id);


#======Update Project Info==========
//$updateProjectInfo = new Projekt();
//$project_info = "Felix";
//$project_id = 123456;
//$result = $updateProjectInfo->updateProjectInfo($project_info, $project_id);

#=============ENDE UPDATE============

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
// $result = $insertData->insert($values);


//=======Delete========

// $deleteFromDb = new Projekt();
// $project_id = 123456;
// $result = $deleteFromDb->delete($project_id);

#==============pp2_project_master END===========


#==============pp2_project_country START=============

//$get = new Country();
//$sql = "SELECT * FROM pp2_project_country";
//$results = $get->get($sql);
//
//foreach( $results as $row )
//{
//    echo 'id: '. $row['id'] .'<br /> ';
//    echo 'country: '. $row['country'] .'<br />';
//    echo 'wovi_country_code: '. $row['wovi_country_code'] .'<br />';
//    echo 'IC3: '. $row['international_country_code3'] .'<br />';
//    echo 'IC2: '. $row['international_country_code2'] .'<br />';
//    echo 'address: '. $row['address'] .'<br />';
//    echo 'email: '. $row['email'] .'<br />';
//    echo 'continent: '. $row['continent'] .'<br /></br />';
//}

//GET by project_id
//$getID = new Projekt();
//$project_id = 179472;
//$results = $getID->getProjectId($project_id);
//
//foreach( $results as $row )
//{
//    echo 'project_id: '. $row['project_id'] .'<br />';
//    echo 'project_name: '. $row['project_name'] .'<br /> ';
//    echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /><br />';
//
//}


// $disconnect = new Projekt();
// $disconnect->disconnect();
