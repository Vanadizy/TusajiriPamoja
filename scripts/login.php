<?php 
include "./database.php";
$email = $_POST["email"];
$pwd = $_POST["password"];

$select = "SELECT email,password FROM users WHERE email = '$email'";
$stmt = $conn->query($select);
$row=$stmt->fetch_assoc();
if($stmt->num_rows <= 0){
    header("location: ../pages/login.php?wrong_credentials");
}
else{
    $db_pwd = $row["password"];
    if(password_verify($pwd, $db_pwd)==true){
        session_start();
        $_SESSION["email"]= $email;
        header("location: ../pages/home.php");
    }
    else{
        session_start();
        $_SESSION["email"]=$email;
        header("location: ../pages/login.php?wrong_password");
    }
}

?>