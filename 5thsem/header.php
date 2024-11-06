<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Zone</title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- custom css file -->
<link rel="stylesheet"href="style.css">

<?php
// require functions.php file
require('functions.php');
?>

</head>
<body>

<?php
  session_start();
  if(!isset($_SESSION['name']) || $_SESSION['name'] != true){
    header("location: http://localhost/tutorial/5thlogin/login_form.php");
    exit;
  }
?>

<?php

  if(isset($_SESSION['name']) || $_SESSION['name'] == true){
    $name=true;
  }else{
    $name=false;
  }
?>
    
    <!-- start header  -->

    <header id="header">

    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:-.5rem; margin-bottom: -1rem;">
        <strong><h6 style="text-align:justify; display: flex; align-item:center; margin-top:-2px;"> WELCOME - <?php echo $_SESSION['name'] ?> </h6></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: unset; margin-top: 7px; right: 10px;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <!-- <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <h1> WELCOME - <?php echo $_SESSION['name'] ?></h1> -->
            <!-- <p class="font-rale font-size-12 text-blank-50 m-0">Jordan Calderon 430-985 Eleifend St. Duluth Washington 92611 (427) 930-5255</p> -->
            <!-- <div class="font-rale font-size-14">
                <a href="..\5thlogin\login_form.php" class="px-3 border-right border-left text-dark">Login</a> -->
               <!-- <div>
        `       <h6 style="position: absolute; right: 12rem; top: 7px;"> WELCOME!! </h1>
                <a href="..\5thlogin\logout.php"><input type="submit" class="text-light color-second-bg" value="Logout"></a>
</div> -->
                <!-- <a href="#" class="px-3 border-right text-dark">Logout</a> -->
            <!-- </div>
        </div> -->

        <!-- primary navigation  -->

<?php
echo '

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="./assets/logo2.jpg" alt="LOGO" style="margin-bottom: -12.8px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>';
              echo '<li class="nav-item">
                  <a class="nav-link" target="_blank" href="..\phpChatBot">Repair <i class="fa-solid fa-screwdriver-wrench"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.gadgets360.com/mobiles">Blog</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="coming.php">Coming Soon</a>
                  </li>';
                  if(!$name){
                  echo '<li class="nav-item">
                    <a class="nav-link" target="_blank" href="..\5thlogin\login_form.php">Signup</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" target="_blank" href="..\5thlogin\login_form.php">Signin</a>
                  </li>';
                  }
                if($name){
                  echo  ' <li class="nav-item">
                    <a class="nav-link" href="..\5thlogin\logout.php">Logout</a>
                  </li>';
            echo'  </ul>';
                }
?>



              <form action="#" class="font-size-14 font-rale">
                  <a href="cart.php" class="py-2 rounded-pill color-lgtyellow-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart" style= "color: black;"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                  </a>
              </form>
            </div>
          </nav>



    </header>
    <!-- !start header  -->
     
    <!-- start main site -->

    <main id="main-site">