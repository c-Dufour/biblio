<?php
require 'controlleur.php';
$id=0;
if(!empty($_GET['id'])){ $id=$_REQUEST['id']; }
if(!empty($_POST)){
  $id= $_POST['id'];
  livre_controlleur::delete($id);
  livre_controlleur::redirect();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>delete form</title>
  </head>
  <body>
    <form class="form-horizontal" action="delete.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id;?>"/>
      Etes vous sur?<br />
      <div class="form-actions">
        <button type="submit" class="btn btn-danger">Yes</button>
        <a class="btn" href="index.php">No</a>
      </div>
    </form>
  </body>
</html>
