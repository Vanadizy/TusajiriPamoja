<?php 
include "./database.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$birth_date = $_POST["birth_date"];
$region = $_POST["region"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$photo = $_FILES["photo"];

$hash_pwd = password_hash($pwd, PASSWORD_BCRYPT);

$img_folder = "C:/xampp/htdocs/TusajiriPamoja/users/";
$unique_name = $img_folder.$email.".jpg";
$stored_path = "../users/".$email.".jpg";

if(!file_exists($unique_name)){
    mkdir($img_folder,0077);
}

move_uploaded_file($photo["tmp_name"],$unique_name);

$inseert = "INSERT INTO users VALUES('$fname','$lname','$gender','$birth_date','$region','$email','$hash_pwd','$stored_path')";
$stmt=$conn->prepare($inseert);
if($stmt->execute()){
header("location: ../pages/login.php?registered=$email");
}

?>