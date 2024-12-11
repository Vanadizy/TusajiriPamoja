<?php 
    $select = "SELECT * FROM posts";
    $stmt = $conn->query($select);
    while($row = $stmt->fetch_assoc()){
    $type = $row["type"];
    $image = $row["image"];
    $desc = $row["Descriptions"];
    $id = $row["id"];
        echo "
    <div class='cards'>
    <img src='$image'  class='img_card'>
    <p class='type'>$type</p>
    <p class='desc'>$desc</p>
<button class='ideas' onclick='openform()'>andika maoni</button><br>
    <form class='form' action='./maoni.php' method='post' id='$id'>
        <input type='text' name='maoni'><br>
        <input type='submit' value='tuma'>
    </form>
</div> <script>
function openform(){
document.getElementById('$id').style.display='block';
}</script>";
    }
    ?>