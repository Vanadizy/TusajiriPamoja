<?php 
include "../scripts/database.php";
session_start();
$email = $_SESSION["email"];
// include "../scripts/functions.php";
if(!isset($_SESSION["email"])){
    // redirect("../login.php");
    header("location: ./login.php?login");
}
elseif($email == "admin@tusajiripamoja.com" && !isset($_GET["viewposts"])){
   header("location: ../admin/home.php");
    
}
elseif($email == "admin@tusajiripamoja.com" && isset($_GET["viewposts"])){
    header("location: ./home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | TusajiriPamoja</title>
    <link rel="stylesheet" type="text/css" href="../styles/home.css">
    <link rel="icon" href="../icons/ball.png">
    <script src="../scripts/javascripts.js"></script>
</head>
<header>
    <div class="top_bar">
        <img src="../images/yanga.jpeg" class="logo">
        <h2 class="top_h2">Karibu #TusajiriPamoja</h2>
        <img src="../icons/naviator.jpg" id="navigator" onclick="openside()">
    </div>
    
</header>
<!-- <body onscroll="closeside()"> -->
<body>
<div class="general">
    <div class="side" id="close">
        <img class="img_closs" src="../icons/closs.jpg" onclick="closeside()">
    <ul class="lists" id="list">
        <li class="link">home</li>
        <li class="link">usajiri</li>
        <li class="link">maoni</li>
        <a class="a_link" href="?akaunti"><li class="link">akaunti</li></a>
        <a href="../scripts/logout.php" class="logout"><button class="logout">LOGOUT</button></a>
    </ul>
   
    </div>
  
<div class="main">

  
    <?php
    include "../scripts/database.php";
    include "../scripts/maoni.php";
    include "../scripts/usajiri.php";
    include "../scripts/akaunti.php";
    include "../scripts/home.php";
?>
</div>
</div>
</body>
<?php include "../scripts/footer.php"; ?>
</html>