<?php
$username = "root";
$hostname = "localhost";
$dbname = "project";
$password = "";

$search = $_POST["search"];

$conn = new mysqli($hostname, $username, $password, $dbname);

$sql ="SELECT * FROM routes WHERE To_ like '%$search%'";
$res = $conn->query($sql);
while(
$row=$res->fetch_assoc()){

$to="$row[To_]";
$From ="$row[FROM_]";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/project_official/icons/iconplane.png">
    <link rel="stylesheet" href="/project_official/style/hm.css" type="text/css">
    <script src="/project_official/scripts/scripts.js"></script>
    <title>Airline services</title>
</head>
<body>   
<!-- <img class="heading" src="/project_official/images/head.png" title="heading"> -->
<div class="header">
    <h1 class="heading">AIRLINE RESERVATION SYSTEM </h1>
    <nav class="navigator">
    <button class="admin">Book Now</button>
    <button class="admin">View</button>      
    <button class="admin">home</button>
</nav>
<div class="welcome">
    <form action="/project_official/scripts/search.php" method="post">
        <input type="search" placeholder="search" class="search">
    </form>
    
    </div> 
</div>
<form action="/Project_official/scripts/bookin.php" method="post" class="form" id="user_book">
<label for="travelling_date">TRAVELLING DATE</label><br>
<input type="date" name="travelling_date" required><br>
<label for="from">FROM:</label><br>
<select name="from" required>
<option></option>
<option>DAR ES SALAAM</option>
<option>DUBAI</option>
<option>MWANZA</option>
<option>MALAMPAKA</option>
<option>USA</option>
</select><br>
<label for="to">TO:</label><br>
<select name="to" required>
<option></option>
<option>DAR ES SALAAM</option>
<option>DUBAI</option>
<option>MWANZA</option>
<option>MALAMPAKA</option>
<option>USA</option>
</select><br>
<label for="plane">PLANE:</label><br>
<select name="plane" required>
    <option></option>
    <option>VANADIZY AIRLINE</option>
    <option>AIR TANZANIA</option>
    <option>MAGUFULI</option>
    <option>EMIRATE TZ</option>
    <option>BOMBADIA</option>
    
    </select><br>
<label for="class">CLASS:</label><br>
<select name="class" required>
    <option></option>
    <option>MEDIUM</option>
    <option>HIGH</option>
    <option>HIGHER</option>
    <option>VIP</option>
    <option>VVIP</option>
    </select><br><br>
<label for="firstname">FIRSTNAME:</label><br>
<input type="text" name="firstname" required><br>
<label for="lastname">LASTNAME:</label><br>
<input type="text" name="lastname" required><br>
<label for="phone_number">CONTACT:</label><br>
<input type="text" name="phone_number" required><br>
<label for="email">EMAIL(optional):</label><br>
<input type="email" name="email"><br>
<center><input type="submit" value="continue"></center>






</form>
<?php echo $to ," -T0 -", $From;?>

</body>
</html>