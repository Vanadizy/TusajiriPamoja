<?php
session_start();
$firstname = $_SESSION["firstname"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/project_official/icons/iconplane.png">
    <link rel="stylesheet" href="/project_official/style/payments.css" type="text/css">
    <script src="scripts/scripts.js"></script>
    <title>Airline services</title>
</head>
<body>
<nav class="header">
<img class="heading" src="/project_official/images/head.png" title="heading">
</nav>
<div class="form">
    <?php echo "<p class='dear'>DEAR $firstname<p>"?>
<h2 class="payhead" >complete payments to get your ticket</h2>
<p class="cont_p">control number:  <strong class="control">995463871481</strong></p>
<img src="/project_official/icons/loading.gif" class="loading" id="loading">
<img src="/project_official/icons/tick.gif" class="loading" id="done">
<p class="wait" id="loading_p">waiting for payments...</p><br>
<p id="don" class="wait">DONE</p>
<?php


?>

</div>
<script>
    function done(){
        document.getElementById("done").style.display="inline";
        document.getElementById("loading").style.display="none";
        document.getElementById("loading_p").style.display="none";
        document.getElementById("don").style.display="inline";
    }
setTimeout(done, 8000);
function red(){
    window.location.href="/Project_official/page/ticket.php";
}
setTimeout(red, 10000); //time in millisecond
</script>
</body>
</html>