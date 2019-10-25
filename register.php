<?php
session_start();
require 'assets/php/connection.php';
include 'assets/php/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register with us</title>
</head>
<body>
<H1>Register here</H1>
<p>Please provide the email you used to register with us and your password.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="username">Your username</label>
<input type="text" name="regusername" id="username" value="<?php echo $username ?>">
<span class="error"><?php echo $usernameErr ?></span>
<label for="useremail">Your email</label>
<input type="email" placeholder="" name="regemail" id="useremail" value="<?php echo $email ?>">
<span class="error"><?php echo $emailErr ?></span>
<label for="userpassword">Your password</label>
<input type="password" name="regpassword" id="userpassword">
<span class="error"><?php echo $passwordErr ?></span>
<label for="firstname">Your first name</label>
<input type="text" name="regfirstname" id="firstname" value="<?php echo $firstname ?>">
<span class="error"><?php echo $firstnameErr ?></span>
<label for="lastname">Your last name</label>
<input type="text" name="reglastname" id="lastname" value="<?php echo $lastname ?>">
<span class="error"><?php echo $lastnameErr ?></span>
<label for="userlinkedin">Your Linkedin</label>
<input type="url" name="reglinkedin" id="userlinkedin" value="<?php echo $linkedin ?>">
<label for="usergithub">Your Github</label>
<input type="url" name="reggithub" id="usergithub" value="<?php echo $github ?>">
<input type="submit" name="submit" value="Register">
</form>   
<p>Already have an account? Login <a href="index.php">here</a></p>

</body>
</html>
