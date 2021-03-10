function display(prog,heading,cost) {
  content = '<div id="page-wrap">';
  content = content + '<div class="meter animate teal"><span style="width:' 
  content= content + prog
  content = content + '%"><span></span></span></div>';
  content = content + '</div>';
  document.getElementById("bar").innerHTML = content;
  document.getElementById("head").innerHTML = heading;
  document.getElementById("amt").innerHTML = "Rs "+cost;
}
function today(){
    display(25,"TODAY'S SAVINGS",5000);
}
function yesterday(){
    display(12,"YESTERDAY'S SAVINGS",2500);
}
function weekly(){
    display(50,"WEEKLY SAVINGS",10000);
}
function monthly(){
    display(100,"MONTHLY SAVINGS",20000);
}
