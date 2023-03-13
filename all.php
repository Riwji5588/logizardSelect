<?php

include('firebaseRDB.php');
include('config.php');
$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/user");
$data = json_decode($retrieve, 1);
// echo "<pre>" ; 
 print_r($data);
// echo "</pre>" ; 
echo $data;

// $arra[] = array(
//     "ModeStatus" => $data['ModeStatus'],
//     "AutoRelayStatus" => $data['Auto Relay Status'],
//     "LightValue" => $data['LightValue'],
//     "ManualRelayStatus" => $data['Manual Relay Status'],
//     "WaterValue1" => $data['WaterValue1'],
//     "WaterValue2" => $data['WaterValue2'],

// );

// echo json_encode($arra);