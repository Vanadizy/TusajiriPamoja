<?php 

function redirect($path){
    header("location: $path");
}
function users(){
    include "database.php";
    $select = "SELECT * FROM users WHERE email = '$email'";
    $stmt = $conn->query($select);
    $row = $stmt->fetch_assoc();
    $fname = $row["firstname"];
    $lname = $row["lastname"];
    $gender = $row["gender"];
    $img_path = $row["image_path"];
    global $fname, $lname, $gender, $img_path, $select, $stmt, $row;
}
?>