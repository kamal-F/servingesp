<?php
$valFertInterval = $_GET['valFertInterval'];
$valFertLong = $_GET['valFertLong'];
$valHumidity = $_GET['valHumidity'];
$valTemperature = $_GET['valTemperature'];
$trHumidity = $_GET['trHumidity'];
$trTemperature = $_GET['trTemperature'];
$pumpFertigation = $_GET['pumpFertigation'];

$isifile = "{\"valFertInterval\":". $valFertInterval .",\"valFertLong\":". $valFertLong .",\"valHumidity\":". $valHumidity .",\"valTemperature\":". $valTemperature .",\"trHumidity\":". $trHumidity .", \"trTemperature\":". $trTemperature .",\"pumpFertigation\":". $pumpFertigation ."}";


$filestatus = file_put_contents('hidrodono.log', $isifile, FILE_APPEND);
if ($filestatus){
	echo 'sukses';	
} else{
	echo 'gagal';
}

?>
