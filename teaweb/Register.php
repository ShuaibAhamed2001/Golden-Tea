<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css\style login.css">
    <title>Register Page</title>
</head>

<body>
    <div class="login-box">
        <h2>Register</h2>
        <form action="RegisterHandler.php" method="post" >
            <div class="user-box">
                <input type="text" name="txtUsername" required="">
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="text" name="txtEmail" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="txtContact" required="">
                <label>Contact</label>
            </div>

            <div class="user-box">
                <input type="password" name="txtPassword" required="">
                <label>Create a Password</label>
            </div>

            <div>
                <a href="#" class="forgot__pass">Forgot password?</a>
            </div>
            <input type="submit" name="btnSubmit" value="Submit" class="btn__submit">

            <a class="btn__submit" href="index.php">
                <span></span><span></span><span></span><span></span>
                Return
            </a>
        </form>
    </div>
    </body>
    </html>
