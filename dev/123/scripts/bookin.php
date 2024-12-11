<?php
session_start();
$username = "root";
$hostname = "localhost";
$dbname = "project";
$password = "";


$conn = new mysqli($hostname, $username, $password, $dbname);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$from = $_POST["from"];
$to = $_POST["to"];
$email = $_POST["email"];
$phone = $_POST["phone_number"];
$plane = $_POST["plane"];
$class = $_POST["class"];
$travelling_date = $_POST["travelling_date"];

    $_SESSION["lastname"]="$lastname";
    $_SESSION["plane"]="$plane";
    $_SESSION["firstname"]="$firstname";
    $_SESSION["from"]="$from";
    $_SESSION["to"]="$to";
    $_SESSION["travelling_date"]="$travelling_date";
    header("location: /project_official/page/payments.php");


