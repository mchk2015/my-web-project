<?php
$TRIP_FILE = "trips.json";
header('Content-type: application/json');
$file = fopen($TRIP_FILE, "r");
$jsonStr = fread($file, filesize($TRIP_FILE));
fclose($file);
$arr = json_decode($jsonStr);
foreach ($arr as $trip){
  if ($trip->location == $_POST["location"]){
    $trip->rating = $_POST["rating"];
    $file = fopen($TRIP_FILE, "w");
    fwrite($file, json_encode($arr));
    fclose($file);
    echo json_encode( $trip );
    break;
  }
}
?>
