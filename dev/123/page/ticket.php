<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/project_official/icons/iconplane.png">
    <link rel="stylesheet" href="/project_official/style/ticket.css" type="text/css">
    <script src="scripts/scripts.js"></script>
    <title>Airline services</title>
</head>
<body>
<nav class="header">
<img class="heading" src="/project_official/images/head.png" title="heading">
</nav>
<div class="form">
<?php
session_start();
$lastname = $_SESSION["lastname"];
$plane = $_SESSION["plane"];
$firstname=$_SESSION["firstname"];
$from=$_SESSION["from"];
$to=$_SESSION["to"];
$travelling_date=$_SESSION["travelling_date"];
echo " <h2 class='hdtckt'>Flight with $plane, EXPLORE THE WORLD!</h2><br><br> Dear $firstname, thanks for choosing $plane<br>";

echo "<fieldset>Ticket for:
<p>$firstname, $lastname who travelling from $from to $to on<br> $travelling_date with $plane is <br><br> <a class='home' href='/Project_official/page/home.php'><strong class='ready'>ready</strong></a></P>
</fieldset>";
session_abort();
?>
</div>

</body>
</html>