<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TusajiriPamoja</title>
    <link rel="icon" href="../icons/ball.png">
    <link rel="stylesheet" type="text/css" href="../styles/register.css">
</head>
<header>
    <div class="top_bar">
        <img src="../images/yanga.jpeg" class="logo">
        <h2 class="top_h2">Jisajiri #TusajiriPamoja</h2>
    </div>
    
</header>
<body>
    <div class="div_form">
        <form action="../scripts/register.php" method="post" enctype="multipart/form-data">
        <label>Jina la kwanza:<label><br>
        <input type="text" placeholder="weka jina la kwanza" name="fname" required><br>
        <label>Jina la mwisho:</label><br>
        <input type="text" placeholder="weka jina la mwisho" name="lname" required><br><br>
        <label>jinsia:</label><br>
        <input type="radio" value="Male" name="gender" required><span>Male</span><br>
        <input type="radio" value="Female" name="gender" required><span>Female</span><br><br>
        <label>Tarehe ya kuzaliwa:</label><br>
        <input type="date"required name="birth_date"><br><br>
        <label>Mkoa wako: </label><br>
        <select required name="region">
            <option >MWANZA</option>
            <option>DAR ES SALAAM</option>
            <option>MOROGORO</option>
            <option>ARUSHA</option>
            <option>DODOMA</option>
            <option>SINGIDA</option>
            <option>MANYARA</option>
            <option>TANGA</option>
            <option>LINDI</option>
            <option>KAGERA</option>
            <option>GEITA</option>
            <option>SIMIYU</option>
            <option>TABORA</option>
            <option>PWANI</option>
            <option>ZANZIBAR</option>
            <option>RUVUMA</option>
            <option>RUKWA</option>
            <option>MBEYA</option>
            <option>KIGOMA</option>
            <option>MARA</option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
</select><br><br>
<label>anuani(Email):<label><br>
    <input type="text" placeholder="weka anuani" name="email" required><br>
    <label>nywira(password):<label><br>
        <input type="password" placeholder="weka nywira" name="password" required><br>
<label>Weka picha yako:</label><br>
<input type="file" accept="image" name="photo"><br><br>
        <input type="submit" value="Tuma">
        <br>
        <a class="lin" href="./login.php">nina akaunti</a><br>
        </form>
</div>
</body>
<?php 
include "../scripts/footer.php";
?>
</html>