function openshc(){
  x = document.getElementById("backform");
  y = document.getElementById("backtable");
  y.style.display="none";
    x.style.display="inline";
}
function openbooks(){
    y = document.getElementById("backtable");
    x = document.getElementById("backform");
    y.style.display="inline";
    x.style.display="none";

}
function closetable(){
    x = document.getElementById("backtable");
    x.style.display="none";
}
function closeback(){
    x = document.getElementById("backform");
    x.style.display="none"
}
function open_book(){
    x=document.getElementById("user_book");
    y=document.getElementById("view");
    y.style.display="none";
    x.style.display="block";
}
function close_book(){
    y=document.getElementById("user_book");
    y.style.display="none";
    x=document.getElementById("view");
    x.style.display="grid";
}