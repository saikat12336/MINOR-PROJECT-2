<!-- <?php
  //  session_start();
  //  if(isset($_SESSION['name'])){
   //     header("location:http://localhost/tutorial/5thsem/");
    //}
?> -->

<?php
    
    include("connection.php");
    if(isset($_POST['submit2'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        

        $sql = "select * from user where username = '$username' or email = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row){
            if(password_verify($password, $row["password"])){
                $sql = "select username from user where username ='$username' or email = '$username'";
                $r = mysqli_fetch_array(mysqli_query($conn, $sql));
                session_start();
                $_SESSION['name'] = $r['username'];
                echo '<script> alert("Login Successful.");
                window.location.href = "http://localhost/MINOR-PROJECT-2/5thsem/";
                </script>';
                // header("Location: http://localhost/tutorial/5thsem/");
            }else{
                echo '<script>
                    alert("Login failed. Invalid password!!!");
                    window.location.href = "login_form.php";
                </script>';
            }
        }
        else{
            echo '<script>
                alert("Login failed. Invalid username or email !!!");
                window.location.href = "login_form.php";
            </script>';
        }

    }

?>
