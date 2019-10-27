<?php
if(isset($_SESSION['username']) {
    header ('Location ./accountupdate.php');
}
$loginemail = $loginpassword = "";
$emailErr = $passwordErr = "";
$valid = 0;
if (isset($_POST['submit'])) {
    if (empty($_POST['loginemail']){
        $emailErr = "Please fill in an email"
    } else {
        $loginemail = filter($_POST['useremail']);
        $valid++;  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $valid--;
        }

    }

    
    if (empty($_POST['userpassword'])) {
        $passwordErr = "Please fill in your password";
    }
    else {
        $loginpassword = crypt ($_POST['userpassword']);
        $valid++;
    }


}

function filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
