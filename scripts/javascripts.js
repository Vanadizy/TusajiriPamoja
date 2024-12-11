function closeside(){
    x = document.getElementById("close");
    x.style.width="1px";
    x.style.transition="0.3s"
    y = document.getElementById("list");
    y.style.display="none";
}
function openside(){
    x = document.getElementById("close");
    x.style.width="280px";
    x.transition="0.3s";
    y = document.getElementById("list");
    y.style.display="block";
}
function redirect(){
    window.location.href = "../pages/home.php";
}
