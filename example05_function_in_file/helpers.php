<!-- definition von hilfreichen Hilfs-Funktionen, die anschliessend in anderen Files verwendet werden können -->

<?php
function enclose($text, $tag)
{
  $opening_tag = '<' . $tag . '>';
  $closing_tag = '</' . $tag . '>';
  return $opening_tag . $text . $closing_tag;
}

  // mit dieser Funktion kann Text in der JavaScript-Konsole des Browsers (F12)
  // ausgegegeben werden.
function consoleLog($text)
{
  echo ("<script>" .
    "console.log('" . $text . "');" .
    "</script");
}
?>
