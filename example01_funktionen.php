<!DOCTYPE html>
<html>

<head>
</head>

<body>
  <?php
  function datum()
  {
    return date("d.m.Y");
  }
  function zeit()
  {
    return date("H:i:s") . ' Uhr';
  }
  ?>

  <h1>Funktionen</h1>
  <p>PHP Funktionen können irgendwo im Dokument, in welchem sie definiert wurden, aufgerufen werden.</p>
  <?php
  echo ('Ich wurde mit PHP am <b>' . datum() . '</b> um ' . zeit() . ' erzeugt.');
  ?>

  <h2>Funktionen mit einem Parameter</h2>
  <p>An Funktionen können auch Parameter übergeben werden:</p>

  <?php
  function fett($text)
  {
    return '<b>' . $text . '</b>';
  }
  echo ('Funktion um einen ' . fett('beliebigen TEXT') . ' fett zu formatieren.')
  ?>

  <h2>Funktionen mit mehreren Parametern</h2>

  <?php
  function enclose($text, $tag)
  {
    $opening_tag = '<' . $tag . '>';
    $closing_tag = '</' . $tag . '>';
    return $opening_tag . $text . $closing_tag;
  }
  echo ('Easy etwas ' . enclose('FETT', 'b') . ', '
    . enclose('KURSIV', 'i') . ' oder '
    . enclose('DURCHGESTRICHEN', 's')
    . ' zu schreiben.');
  ?>

</body>
</html>