<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/project_official/icons/iconplane.png">
    <link rel="stylesheet" href="/project_official/style/admin.css" type="text/css">
    <script src="scripts/scripts.js"></script>
    <title>schedule</title>
</head>
<body>
    <div class="header">
        <h1 class="heading">AIRLINE RESERVATION SYSTEM </h1>
        <nav class="navigator">
        <button class="admin" onclick="openshc()" >new schedule</button>
        <button class="admin" onclick="openbooks()">view bookings</button>      
        <a class="home" href="page/home.php"><button class="admin">home</button></a>
    </nav>
</div>
<div class="backform" id="backform">
    <span id="so" onclick="closeback()">X</span>
<form action="scripts\new_schedule.php" method="post" class="schedule">
    <label for="plane_id">Plane name:</label><br>
    <input type="text" name="plane" required class="input" size="26"><br>
<label for="departure">
    departure date:<br>
    <input  type="date" name="departure" required><br>
</label>
<label for="departure_time">
    <input type="time" name = "dep_time" required><br>
</label>
<label for="from">From</label>
<input type="text" name="from" required class="input"size = "5">
<label for="to">To:</label>
<input type="text" name="to" required class="input" size="5"><br>
<label for="class">Class:</label class="input"><br>
<input type="text" name="class" required class="input" size="26"><br>
<input type="submit" value="ADD SCHEDULE" id="submitsch">

</form>
</div>
<div class="backtable" id="backtable">
    <span id="xo" onclick="closetable()">X</span><br>
    <table class='booking_table'>
<tr class='hdtb'>
<th>ID</th>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>FROM</th>
<th>TO</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>BOOKING DATE</th>
<th>BOOKING TIME</th>
<th>TRAVELLING TIME</th>
</tr>
<?php
$username = "root";
$hostname = "localhost";
$dbname = "project";
$password = "";


$conn = new mysqli($hostname, $username, $password, $dbname);


$sql = "SELECT * FROM bookings";
$stmt = $conn->query($sql);
while(
$row = $stmt->fetch_assoc())

echo"


<tr>
<td>$row[ID]</td>
<td>$row[firstname]</td>
<td>$row[lastname]</td>
<td class='frm'>$row[from_]</td>
<td class='to'>$row[to_]</td>
<td>$row[email]</td>
<td>$row[phone]</td>
<td>$row[datee]</td>
<td>$row[timee]</td>
<td class='trdat'>$row[travelling_date]</td>
</tr>
"



?>
</table>

</div>
</body>
</html>