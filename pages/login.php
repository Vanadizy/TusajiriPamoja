<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TusajiriPamoja</title>
    <link rel="icon" href="../icons/ball.png">
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
</head>
<header>
    <div class="top_bar">
        <img src="../images/yanga.jpeg" class="logo">
        <h2 class="top_h2">Ingia #TusajiriPamoja</h2>
    </div>
    
</header>
<body>
    <div class="div_form">
        <form action="../scripts/login.php" method="post">
        <?php include "../scripts/login_validator.php";?>
        <label>Anuani yako:<label><br>
        <input type="text" placeholder="weka anuani" required name="email"><br>
        <label>Nywira(password):</label><br>
        <input type="password" placeholder="neno siri" required name="password"><br><br>
        <input type="submit" value="Tuma">
        <br>
        <a class="lin" href="./register.php">sina akaunti</a><br>
        <a class="lin" href="">nimesahau nywira</a>
        </form>
</div>
</body>
<?php 
include "../scripts/footer.php";
?>
</html>