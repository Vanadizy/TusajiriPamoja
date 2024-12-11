<?php
session_start();
$lastname = $_SESSION["lastname"];
$plane = $_SESSION["plane"];
$firstname=$_SESSION["firstname"];
$from=$_SESSION["from"];
$to=$_SESSION["to"];
$travelling_date=$_SESSION["travelling_date"];
$username = "root";
$hostname = "localhost";
$dbname = "project";
$password = "";


$conn = new mysqli($hostname, $username, $password, $dbname);



$sql = "INSERT INTO bookings(firstname,lastname,from_,to_,email,phone,plane,class,datee,timee,travelling_date) values(?,?,?,?,?,?,?,?,current_date(),current_time(),?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssssss",$firstname,$lastname,$from,$to,$email,$phone,$plane,$class,$travelling_date);

if($stmt->execute()){
    $_SESSION["lastname"]="$lastname";
    $_SESSION["plane"]="$plane";
    $_SESSION["firstname"]="$firstname";
    $_SESSION["from"]="$from";
    $_SESSION["to"]="$to";
    $_SESSION["travelling_date"]="$travelling_date";
    header("location: /project_official/page/payments.php");

}

?>