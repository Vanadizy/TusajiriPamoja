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
    <button class="admin" onclick="open_book()">Book Now</button>
    <button class="admin">View</button>      
    <button class="admin">home</button>
</nav>
<div class="welcome">
    <form action="/project_official/scripts/search.php" method="post" style="background-color: lightblue;">
        <input type="search" placeholder="search" class="search" name="search"required><br><br>
    </form>
        </div> 
</div>


<div class="view" id="view">
<img src="/project_official/images/vanadizy.JPG" class="view_img">
<p class="view_par">VANADIZY AIRLINEjghfgdgfhghkjj gfhdgfh jkhljfhgxgfgiufhghfgxdcgguyftdfgdx gfjguyfdfgxchkjhuityrydgfxcvjkuityutydfcbvjkiturtydfc</p>

<img src="/project_official/images/vanadizy.JPG" class="view_img">
<p class="view_par">VANADIZY AIRLINEjghfgdgfhghkjj gfhdgfh jkhljfhgxgfgiufhghfgxdcgguyftdfgdx gfjguyfdfgxchkjhuityrydgfxcvjkuityutydfcbvjkiturtydfc</p>

<img src="/project_official/images/vanadizy.JPG" class="view_img">
<p class="view_par">VANADIZY AIRLINEjghfgdgfhghkjj gfhdgfh jkhljfhgxgfgiufhghfgxdcgguyftdfgdx gfjguyfdfgxchkjhuityrydgfxcvjkuityutydfcbvjkiturtydfc</p>

<img src="/project_official/images/vanadizy.JPG" class="view_img">
<p class="view_par">VANADIZY AIRLINEjghfgdgfhghkjj gfhdgfh jkhljfhgxgfgiufhghfgxdcgguyftdfgdx gfjguyfdfgxchkjhuityrydgfxcvjkuityutydfcbvjkiturtydfc</p>

<img src="/project_official/images/vanadizy.JPG" class="view_img">
<p class="view_par">VANADIZY AIRLINEjghfgdgfhghkjj gfhdgfh jkhljfhgxgfgiufhghfgxdcgguyftdfgdx gfjguyfdfgxchkjhuityrydgfxcvjkuityutydfcbvjkiturtydfc</p>

<img src="/project_official/images/vanadizy.JPG" class="view_img">
<p class="view_par">VANADIZY AIRLINEjghfgdgfhghkjj gfhdgfh jkhljfhgxgfgiufhghfgxdcgguyftdfgdx gfjguyfdfgxchkjhuityrydgfxcvjkuityutydfcbvjkiturtydfc</p>

</div>


</div>
<form action="/Project_official/scripts/bookin.php" method="post" class="form" id="user_book">
    <span class="cls" onclick="close_book()">&cross;</span>
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
<!-- <center>
<audio src="/project_official/audio.mp3" controls></audio><br><br><br>
<a href="/project_official/audio.mp3" download style="width: fit-content; padding: 20px; background-color: green; border-radius: 7px;">DOWNLOAD</a>
</center> -->
</body>
</html>