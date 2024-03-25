<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Register</title>
</head>
<body>
   <div class="container">
    <div class="login-form">
        <h1>Register Form</h1>
            <form action="./Handler/userRegister.php" method="post">
                <input type="text" name="firstname" placeholder="First Name">
                <input type="text" name="lastname" placeholder="Last Name">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder = "Password">
                <input type="submit" name="register" value="Register">
            </form>
    </div>
   </div>
</body>
</html>