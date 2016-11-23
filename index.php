<?php  
$fpump = $_GET['fpump'];
if($fpump == "on") {  
  $file = fopen("pump.json", "w") or die("can't open file");
  fwrite($file, '{"fpump": "on"}');
  fclose($file);
} 
else if ($fpump == "off") {  
  $file = fopen("pump.json", "w") or die("can't open file");
  fwrite($file, '{"fpump": "off"}');
  fclose($file);
}
?>

<a href="?fpump=on">Pompa fertigasi hidup</a>  
<a href="?fpump=off">Pompa fertigasi mati</a>  
<div>  
  <?php
    if($fpump=="on") {
      echo("Pompa fertigasi hidup");
    }
    else if ($fpump=="off") {
      echo("Pompa fertigasi mati");
    }
    else {
      echo ("Do something.");
    }
  ?>
</div>
