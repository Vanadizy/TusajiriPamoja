<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="../icons/ball.png">
    <link rel="stylesheet" type="text/css" href="../styles/payment.css">
<title>Malipo | TusajiriPamoja</title>
</head>
<body>
    <div main="body">
<nav class="top_bar">
        <h2 class="h2_top">LIPA TUSAJIRIPAMOJA</h2>
        </nav>
        <div class="navigator">
            <a href="./home.php"><button class="top_btn">home</button></a>
            
        </div>
<div class="methods">
    <div class="halotel">
        <a href="?halopesa"><h4>HALOPESA</h4></a>
    </div>
    <div class="airtel">
        <a href="?airtelmoney"><h4>AIRTEL MONEY</h4></a>
    </div>
    <div class="crdb">
        <a href="?crdbbank"><h4>CRDB BANK</h4></a>
    </div>
    <div class="azam">
        <a href="?azampesa"><h4>AZAM PESA</h4></a>
    </div>
    <div class="tigo">
        <a href="?tigopesa"><h4>TIGO PESA</h4></a>
    </div>
    <div class="vodacom">
        <a href="?mpesa"><h4>M-PESA</h4></a>
    </div>
</div>
<?php 
if(isset($_GET["halopesa"])){
    include "../scripts/halopesa.php";
}
?>
</div>
</body>
<?php 
include "../scripts/footer.php";
?>
</html>