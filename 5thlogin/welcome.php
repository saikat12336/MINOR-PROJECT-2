<?php
  session_start();
  if(!isset($_SESSION['name']) || $_SESSION['name'] != true){
    header("location: login_form.php");
    exit;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WELCOME - <?php echo $_SESSION['name'] ?></title>
  </head>
  <body>
    <div class="container">
    <h1> WELCOME - <?php echo $_SESSION['name'] ?></h1>
    <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
    
  </body>
</html>