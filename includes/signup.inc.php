<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $contactnum = $_POST["contactnum"];
    $email = $_POST["email"];
    $pasword = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];

    require('connect.inc.php');

    if (incompleteInputSignup($fname, $lname, $address, $contactnum, $email, $pasword, $repeatpassword) !== false) {
        header("location: ../signup.php?error=incompleteinput");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (emailExist($conn, $email) !== false) {
        header("location: ../signup.php?error=emailexist");
        exit();
    }
    if (pwdMatch($pasword, $repeatpassword) !== false) {
        header("location: ../signup.php?error=passwordnotmatched");
        exit();
    }
   
    createUser($conn, $fname, $lname, $address, $contactnum, $email, $pasword);

} else {
    header("location: ../signup.php");
}
