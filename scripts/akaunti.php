<?php if(isset($_GET["akaunti"])){
    include "database.php";
    $select = "SELECT * FROM users WHERE email = '$email'";
    $stmt = $conn->query($select);
    $row = $stmt->fetch_assoc();
    $fname = $row["firstname"];
    $lname = $row["lastname"];
    $gender = $row["gender"];
    $birth_date = $row["birth_date"];
    $img_path = $row["image_path"];
    echo "
    <div class='akaunti'>
       
        <div class='card'>
            <img src='../icons/closs.jpg' class='img_clos' onclick='redirect()'>
    <h2 class='akaunti_h2'>my account</h2>

    <div class='pic'><img src='$img_path' class='user_photo'> </div>
    <p class='info'>FIRSTNAME: $fname</p>
    <p class='info'>LASTNAME: $lname</p>
    <p class='info'>BIRTH: $birth_date</p>
    <p class='info'SEX: $gender></p>
    <p class='info'>PHONE:  </p>
    </div>
    </div>
    
    ";
}
?>