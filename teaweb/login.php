<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css\style login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="index.php">
            <div class="user-box">
                <input type="text" name="txtEmail" required="">
                <label>Email</label>
            </div>

            <div class="user-box">
                <input type="password" name="txtPassword" required="">
                <label>Password</label>
            </div>
            <div>
                <a href="#" class="forgot__pass">Forgot password?</a>
            </div>
            <input type="submit" name="btnSubmit" value="Login" class="btn__submit">
            <?php 
                include 'LoginHandler.php';
            ?>
            <a class="btn__submit" name="btnregister" href="Register.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Register
            </a>
            <p style="color:white"> If you don't have an account  Please Register </p>
            <a class="btn__submit" href="index.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Return
            </a>
        </form>
    </div>
