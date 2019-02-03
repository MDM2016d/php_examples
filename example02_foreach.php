<!DOCTYPE html>
<html>

<head>
</head>

<body>
  <h1>foreach</code></h1>
  <p>Mit foreach</code> kann durch ein Array iteriert werden. </p>
  <h2>Klassenliste</h2>
  <ul>
    <?php
      $namen = ["Aaron", "David", "Elia", "Eliane", "Fabienne", "Fabio", "Felix", "Florian", "Florin", "Jan", "Janis", "Jona", "Julian", "Kerstin", "Marco", "Nick", "Nicolas"];
      foreach($namen as $name) {
        // in $name ist das aktuelle ELement des Arrays $namen gespeichert.
        // Also zuerst 'Aaron', dann 'David',...
        ?>
        <li> <?php echo($name); ?></li>
        <?php
      }
    ?>
  </ul>

  <h2>PHP Arrays: Schlüssel => Wert</code></h2>

  <?php
    // personen als Array von Arrays angeben:
    // einzelne Werte im Array können als Assoziationen angegeben werden:
    // im Feld 'name' ist  
    $persons = [
      ['name' => 'Muster', 'vorname' => 'Mark'],
      ['name' => 'Smith', 'vorname' => 'Eleonore'],
      ['name' => 'Einstein', 'vorname' => 'Albert']
    ];
  ?>
  <table border="1">
    <tr>
      <th>Name</th>
      <th>Vorname</th>
    </tr>
    <?php
      foreach($persons as $person) {
        // 1. Durchlauf: $person = ['name' => 'Muster', 'vorname' => 'Mark']
        // 2. Durchlauf: $person = ['name' => 'Smith', 'vorname' => 'Eleonore']
        // 3. Durchlauf: $person = ['name' => 'Einstein', 'vorname' => 'Albert']
        ?>
        <tr>
          <td><?php echo($personen['name']); ?></td>
          <td><?php echo($personen['name']); ?></td>
        </tr>
        <?php
      }
    ?>
  </table>

</body>

</html>