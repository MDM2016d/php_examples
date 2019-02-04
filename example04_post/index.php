<!DOCTYPE html>
<html>
<header>
</header>

<body>
  <h1>Formular mit Feldern zum Hinzufügen eines Datensatzes</h1>
  <form action="addEntry.php" method="POST">
    <label>Name</label>
    <input name="name" type="text">
    <br>
    <label>Vorname</label>
    <!-- "name" gibt an, wo der eingegebene Text gespeichert wird.
     Hier bspw. steht im File 'addEntry.php' unter
     $_POST['vorname'] dann der eingegeben text. -->
    <input id="vorname" name="vorname" type="text">
    <br>
    <label>Lieblingszahl</label>
    <input id="favorite_number" name="favorite_number" type="number">
    <br>
    <input type="submit" name="Speichern">
  </form>
</body>

</html>