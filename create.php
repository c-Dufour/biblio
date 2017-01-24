<?php
require 'controlleur.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)){

  $name = $_POST['nom'];
  livre_controlleur::create($name);
  livre_controlleur::redirect();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>creation livre</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <form class="form-inline" action="create.php" method="post">
      <input class="form-control" name="nom" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
      <input class="btn btn-default"type="submit" name="Valider" value="Valider">
    </form>
  </body>
</html>
