<!-- <?php
   // session_start();
  //  if(isset($_SESSION['name'])){
  //      header("location:http://localhost/tutorial/5thsem/");
  //  }
?> -->

<?php

    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        $sql="select * from user where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);


        $sql="select * from user where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email == 0){

            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user(username, email, password, date) VALUES('$username', '$email', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if($result){
                session_start();
                $_SESSION['name'] = $result['username'];
                echo '<script> alert("Signup Successful. Now you can go for Login.");
                window.location.href = "login_form.php";
                </script>';
                }
            }else{
                echo '<script>
                    alert("Password do not match");
                    window.location.href = "login_form.php";
                </script>';
            }

        }else{
            if($count_user>0){
                echo '<script>
                    window.location.href="login_form.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="login_form.php";
                    alert("Email already exists!!");
                </script>';
            }
        }

    }

?>
