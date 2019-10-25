<?php

$emailErr = $usernameErr= $firstnameErr = $lastnameErr = $passwordErr = "";
$valid = 0;

if (isset($_POST['submit'])) {
    //username
    if (empty($_POST['regusername'])) {
        $usernameErr = "Please add a username";
    }
    else{
        $username = filter($_POST['regusername']);
        $valid++;    
    }

    //email
    if (empty($_POST['regemail'])) {
        $emailErr = "Please add an email";
    } else {
        $email = filter($_POST['regemail']);
        $valid++;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $valid--;
        }
    };

    //first name
    if (empty($_POST['regfirstname'])) {
        $firstnameErr = "Please add a first name";
    } else {
        $firstname = filter($_POST['regfirstname']);
        $valid++;
    }

    //lastname
    if (empty($_POST['reglastname'])) {
        $lastnameErr = "Please add a last name";
    } else {
       $lastname = filter($_POST['reglastname']); 
       $valid++;
    }

    //password
    if (empty($_POST['regpassword'])) {
        $passwordErr = "Please add a password";
    } else {
        $password = crypt($_POST['regpassword']);
        $valid++;
    }

    //github
        $github = filter($_POST['reggithub']);

    //linkedin
        $linkedin = filter($_POST['reglinkedin']);

}

function filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
/* Probably not neccessary due to the fact connection.php is required
if ($dbconnect->connect_error) {
    die("Connection failed:" . $dbconnect->connect_error);
}
 */


//Inject into databasa
//after sanitization and validation
if ($valid==5) {

    $sql = "INSERT INTO student (username, email, password, first_name, last_name, linkedin, github) VALUES ('$username', '$email', '$password','$firstname', '$lastname', '$linkedin', '$github')";

    if($dbconnect->query($sql) === TRUE){
        $_SESSION["username"] = $username;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["isloggedin"] = TRUE;
        header ('Location: ./account.php');
    }
    else {
        echo "Error" . $sql . "<br>" . $dbconnect->error;
    }
}


?>
