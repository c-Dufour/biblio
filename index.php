<?php
$bdd = new PDO('mysql:host=localhost;dbname=tpcombat;charset=utf8', 'root', '');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tp n2 biblio</title>
    <link rel="stylesheet" href="bootstrap.min.css">

  </head>
  <body>
    <div class="alert alert-info" role="alert">
      <a href="create.php">Ajouter un livre</a>
    </div>

    <table class="table">
      <thead>
        <th>Nom</th>
        <th>Date</th>
      </thead>
      <tbody>
    <?php
    require('db.php');
    $pp = new db_connect();
            $test = $pp->getAll();
            while ($donnees = $test->fetch())
            {
              ?>
                  <tr>
                    <td><?php echo $donnees['id']; ?></td>
                    <td><?php echo $donnees['nom']; ?></td>
                    <td><?php echo $donnees['date']; ?></td>
                    <td><a href="delete.php?id=<?php echo $donnees['id']?>" class="btn btn-danger">Delete</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
