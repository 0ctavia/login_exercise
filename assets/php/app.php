<?php

$emailErr = $firstnameErr = $lastnameErr = $passwordErr = "";

if (isset($_POST['submit'])) {
$username = filter($_POST['regusername']);
$email = filter($_POST['regemail']);
$firstname = filter($_POST['regfirstname']);
$lastname = filter($_POST['reglastname']);
$password = crypt($_POST['regpassword']);
$github = filter($_POST['reggithub']);
$linkedin = filter($_POST['reglinkedin']);
}

function filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
