<?php
    include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup / Login Form</title>
    <link rel="stylesheet" type="text/css" href="login_form.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<style>
    body{
        background: url("./pics/6.jpg") no-repeat center / cover;
    }
    .main{
        background: url("./pics/1.jpg") no-repeat center / cover;
    }
    .login{
        background: url("./pics/7.jpg") no-repeat center / cover;
    }
</style>


<div class="main">

        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form name="form" action="signup.php" method="POST">
                <label for="chk" aria-hidden="true">Sign Up</label>
                <div class="box col-md-6">

                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="user" name="user" placeholder="Username" required><br><br>
                </div>

                <!-- <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="number" id="number" name="number" placeholder="Ph Number" required><br><br>
                </div> -->

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Email" required><br><br>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="pass" name="pass" placeholder="Password" required><br><br>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required><br><br>
                </div>
                 <button name="submit">Sign Up</button>
            </form>
            </div>
        </div>
        <div class="login">
            <form name="form" action="signin.php" method="POST">
                <label for="chk" aria-hidden="true">Sign In</label>
                
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" id="user" name="user" placeholder="Username / Email" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="pass" name="pass" placeholder="Password" required>
                </div>
                <button name="submit2">Login</button>
            </form>
        </div>
    </div>

</body>
</html>