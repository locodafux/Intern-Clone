<?php
    require("./database.php");

    if(isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(empty($username) || empty($password)) {
            echo '<script>alert("Please input username or password")</script>';
            echo '<script>window.location.href = "../index.php" </script>';
            
        }

        $queryValidate = "SELECT * FROM accounts WHERE username ='$username' AND password = md5('$password')";

        $sqlValidate = mysqli_query($connection, $queryValidate);

        if(mysqli_num_rows($sqlValidate) > 0 ) {
            echo '<script>window.location.href = "../home.php" </script>';
        } else {
            echo '<script>alert("Invalid credentials")</script>';
            echo '<script>window.location.href = "../" </script>';

        }

        mysqli_close($connection);
    } 
?>
