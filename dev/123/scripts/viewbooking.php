<?php
$username = "root";
$hostname = "localhost";
$dbname = "project";
$password = "";


$conn = new mysqli($hostname, $username, $password, $dbname);


$sql = "SELECT * FROM bookings";
$stmt = $conn->query($sql);
$row = $stmt->fetch_assoc();

echo"

<table class='booking_table'>
<tr>
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
<tr>
<td>$row[ID]</td>
<td>$row[firstname]</td>
<td>$row[lastname]</td>
<td>$row[from_]</td>
<td>$row[to_]</td>
<td>$row[email]</td>
<td>$row[phone]</td>
<td>$row[date]</td>
<td>$row[time]</td>
<td>$row[travelling_date]</td>
</tr>
</table>
"


?>