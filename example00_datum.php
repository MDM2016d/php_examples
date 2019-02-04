<!DOCTYPE html>
<html>

<head>
</head>

<body>
  <h1>Datum</h1>
  <?php   // php skript tag
  $datum = date("d.m.Y"); // aktuelles Datum
  $time = date("H:i:s");
  echo ('Ich wurde mit PHP am <b>' . $datum . '</b> um ' . $time . ' Uhr erzeugt.');
  ?>
</body>

</html>