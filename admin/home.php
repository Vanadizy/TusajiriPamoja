<?php 
session_start();
$email = $_SESSION["email"];
if($email != "admin@tusajiripamoja.com"){
    header("location: ../pages/login.php?login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | TusajiriPamoja</title>
    <link rel="stylesheet" type="text/css" href="./home.css">
    <link rel="icon" href="../icons/ball.png">
</head>
<body>
    <?php 
    include "./scripts/update.php";
    include "./scripts/view.php";
    ?>
    <nav class="top_bar">
        <h2 class="h2_top">ADMIN PANEL</h2>
        </nav>
        <div class="navigator">
            <a href="./home.php"><button class="top_btn">home</button></a>
            <a href="?updateposts"><button class="top_btn">update</button></a>
            <a href="../pages/home.php?viewposts"><button class="top_btn">view</button></a>
            <a href="./scripts/logout.php"><button class="top_btn">logout</button></a>
            
        </div>
        <div class="left">
            <?php 
            if(isset($_GET["posted"])){
                echo "  <p class='err_msg'>post added successfully!</p>";
            }
            ?>
            <form class="post" action="./scripts/post.php" method="post" enctype="multipart/form-data">
                <h3 class="form_header">New Post</h3>
                <label>Type:</label><br>
                <select class="type" name="type" required>
                    <option>select type</option>
                    <option value="JERSEY">JERSEY</option>
                    <option value="PRAYER">PRAYER</option>
                    <option value="NEWS">NEWS</option>
                    <option value=""></option>
                    <option value=""></option>
                </select><br>
                <label>ID</label><br>
                <input type="number" name="id"><br>
                <label>Image:</label><br>
                <input type="file" accept="Image" class="image" name="image" required><br>
                <label>Descriptions:</label><br>
                <textarea class="Descriptions" name="Descriptions" cols="30" rows="5" required></textarea>
                <br><br>
                <input type="submit" value="Post" class="submit">
            </form>
        </div>
</body>
<?php include "../scripts/footer.php";?>
</html>