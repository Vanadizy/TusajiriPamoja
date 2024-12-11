<?php 

if(isset($_GET["wrong_credentials"])){
    echo "<p class='err_msg'>wrong credetials</p>";
}
elseif(isset($_GET["wrong_password"])){
    echo "<p class='err_msg'>wrong password</p>";
}
elseif(isset($_GET["login"])){
    echo "<p class='err_msg'>login to continue!</p>";
}
elseif(isset($_GET["registered"])){
    echo "<p class='err_msg'>login to continue!</p>";
}

?>