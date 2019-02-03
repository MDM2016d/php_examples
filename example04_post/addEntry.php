<?php
  $host = "mdm2016.bbz.cloud";
  $port = 21;
  $database = "d_php_intro";
  $username = "mdm2016d";
  $password = "e0ba21337840eecef285844f892946f7";

  // Verbindung erstellen:
  // mysqli_connect(Host-Namen, DB-Username, DB-Passwort, Datenbank, Port)
  $db = mysqli_connect($host, $username, $password, $database, $port);
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>

<h1>Parameter</h1>
<ul>
  <li>Name: <?php echo($_POST['name']); ?></li>
  <li>Vorname: <?php echo($_POST['vorname']); ?></li>
  <li>Lieblingszahl: <?php echo($_POST['favorite_number']); ?></li>
</ul>

<?php
  // wir können die Variable $_POST verwenden um die
  // Formular-Daten abzufragen
  // und um einen neuen Datensatz zur Datenbank hinzuzufügen:
  $insert_query = 'INSERT INTO persons (name, vorname, lieblingszahl) ' .
                  'VALUES ( ' .
                  $_POST['name'] . ', ' .
                  $_POST['vorname'] . ', ' .
                  $_POST['favorite_number'] .
                  ');';
  // !!! insert query muss angepasst werden, damit es für unsere Datenbank passt!
  // $result = mysqli_query($db, $insert_query);

  mysqli_close($db);
?>
<a href="index.php">Zurück</a>
