<?php
require_once('dbconnect.php');
$db = dbconnect();

$name = $_POST['name'];
$vorname = $_POST['vorname'];
$strasse = $_POST['strasse'];
$nummer = $_POST['nummer'];
$plz = $_POST['PLZ'];

$sql = "INSERT INTO persons (name, vorname, strasse, nummer, PLZ)
        VALUES (
          '$name',
          '$vorname',
          '$strasse',
          $nummer,
          $plz
        );";

mysqli_query($db, $sql);
  
header('Location: ' . 'index.php');
?>
