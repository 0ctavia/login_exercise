<?php
session_start();
require 'assets/php/connection.php';
include 'assets/php/accountupdate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account page</title>
</head>
<body>
<h1>Welcome to your account page <i><?php echo $firstname?></i>!</h1>
<h2>Please find here below the information pertaining to your account</h2>

<table border="1" >
    <tr>
        <td>Username</td>
        <td><?php echo $username ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>First name</td>
        <td><?php echo $firstname ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $lastname ?></td>
    </tr>
    <tr>
        <td>Linkedin page</td>
        <td><?php echo $linkedin ?></td>
    </tr>
    <tr>
        <td>Github page</td>
        <td><?php echo $github ?></td>
    </tr>
</table>

<h2>Password change</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]" method="post">
        <label for="newpassword">Type your new password here:</label>
        <input type="password" name="newpassword" id="newpassword">
        <input type="submit" name="passwordchange" value="Change my password">

</form>

<h2>Delete my account</h2>
<label for="accountdeletion">Fill in your password to delete your account:</label>
<input type="password" name="passwordfordeletion" id="accountdeletion">
<input type="submit" name="accountdeletion" value="Delete your account">

</body>
</html>
