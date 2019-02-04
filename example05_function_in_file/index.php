<!DOCTYPE html>
<html>
<header>
  <!-- alle Funktionen die im File 'helpers.php' definiert sind,
       werden geladen und können weiter unten gebraucht werden. -->
  <?php require_once('helpers.php') ?>
</header>

<body>
  <h1>Funktionen in separatem File definieren</h1>

  <?php echo (enclose('Header 2 mit funktion enclose() erzeugt', 'h2')); ?>


  <h2>Ausgabe in der Browser Konsole</h2>
  <?php
  $number = 12;
  $number = $number + 15;
  consoleLog('Berechnete Nummer: ' . $number);
  ?>
  <p>Öffne die Konsole im Browser (F12 drücken), um die Nachricht zu sehen...</p>

</body>

</html>