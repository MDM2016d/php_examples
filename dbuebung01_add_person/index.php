<!DOCTYPE html>
<html>

<head>
  <?php require_once('dbconnect.php'); ?>
</head>

<body>
  <h1>Datenbank Anbindung mit MySQLi</code></h1>
  <a href='new_person_form.html'>Neue Person erfassen</a>
  <h2>Klassenliste</h2>
  <table border="1">
    <tr>
      <th>id</th>
      <th>Vorname</th>
      <th>Name</th>
      <th>Strasse</th>
      <th>Nummer</th>
      <th>PLZ</th>
    </tr>
    <?php
    $db = dbconnect();
    $result = mysqli_query($db, "SELECT * FROM persons;");
    if ($result) {
      while ($person = mysqli_fetch_array($result)) {
          // Bspw.:
          // $person = ['id' => 1, 'Name' => 'Muster', 'Vorname' => 'Mark', 'Strasse' => 'Random', 'Nummer' => 13, 'PLZ' => 3000]
        ?>
          <tr>
            <td> <?php echo ($person['id']); ?> </td>
            <td> <?php echo ($person['vorname']); ?> </td>
            <td> <?php echo ($person['name']); ?> </td>
            <td> <?php echo ($person['strasse']); ?> </td>
            <td> <?php echo ($person['nummer']); ?> </td>
            <td> <?php echo ($person['PLZ']); ?> </td>
          </tr>
        <?php

      }
    } else {
      echo ("NO DATA!");
    }
    mysqli_close($db);
    ?>
  </table>
</body>

</html>