<?php
$username = "root";
$hostname = "localhost";
$dbname = "project";
$password = "";


$conn = new mysqli($hostname, $username, $password, $dbname);
$plane = $_POST["plane"];
$depdate = $_POST["departure"];
$deptime = $_POST["dep_time"];
$from = $_POST["from"];
$to   = $_POST["to"];
$class = $_POST["class"];


$insert = "INSERT INTO schedules values(?,?,?,?,?,?)";
$stmt=$conn->prepare($insert);

$stmt->bind_param("ssssss",$plane,$depdate,$deptime,$from,$to,$class);

if($stmt->execute()){
    echo "SCHEDULE PREPARED FOR PLANE $plane";
}




?>