<?php
//this php file must be after the database connection

$firstname = $lastname = $email = $linkedin = $github = $password = $username = "";
//if session is empty, redirect to login page immediately
if (!isset($_SESSION["username"])){
    header ('Location: ./register.php');
//else we get out information
} else {
    $username = $_SESSION["username"];
$getinfo= <<<SQL
        SELECT * FROM student
        WHERE `username` LIKE '$username'
        LIMIT 1
SQL;

    $result = mysqli_query($dbconnect, $getinfo);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);   
    
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $email = $row['email'];
    $linkedin = $row['linkedin'];
    $github = $row['github'];
    $password = $row['pasword'];
};
//this is just to change the password, doesn't verify anything
//I will come back to this after I found out how to retrieve a password and check it against an entry, as needs to be done here.
if(isset['passwordchange']){
    $password = crypt($_POST['newpassword']);

}

?>
