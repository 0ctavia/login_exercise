<?php
session_start();
require 'assets/php/connection.php';
include 'assets/php/app.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log yourself in exercise</title>
</head>

<body>
<H1>Log yourself in</H1>
<p>Please provide the email you used to register with us and your password.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="useremail">Your email</label>
<input type="text" name="useremail" id="useremail">
<span class="error"><?php echo $emailErr ?></span>
<label for="userpassword">Your password</label>
<input type="password" name="userpassword" id="userpassword">
<span><?php echo $passwordErr ?></span>
<input type="submit" name="submit" value="Log in">
</form>   
<p>Don't have an account? Register <a href="register.php">here</a>

</body>
</html>
