<?php 
include "./database.php";

    $type = $_POST["type"];
    $id = $_POST["id"];
    $img = $_FILES["image"];
    $desc = $_POST["Descriptions"];
    $img_path = "C:/xampp/htdocs/TusajiriPamoja/posts/";
    $unique_name = $img_path.$id.".png";
    $path = "../posts/".$id.".png";

    if(!file_exists($img_path)){
        mkdir($img_path, 0777);
    }

    move_uploaded_file($img["tmp_name"],$unique_name);

    $insert = "INSERT INTO posts(type,image,Descriptions,id) values('$type','$path','$desc','$id')";
    $stmt = $conn->prepare($insert);
    if($stmt->execute()){
        header("location: ../?posted");
    }

?>