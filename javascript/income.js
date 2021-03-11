function display(prog,heading,cost) {
  content = '<div id="page-wrap">';
  content = content + '<div class="meter animate"><span style="width:' 
  content= content + prog
  content = content + '%"><span></span></span></div>';
  content = content + '</div>';
  document.getElementById("bar").innerHTML = content;
  document.getElementById("head").innerHTML = heading;
  document.getElementById("amt").innerHTML = "Rs "+cost;
}
function today(){
    display(25,"TODAY'S INCOME",5000);
}
function yesterday(){
    display(12,"YESTERDAY'S INCOME",2500);
}
function weekly(){
    display(50,"WEEKLY INCOME",10000);
}
function monthly(){
    display(100,"MONTHLY INCOME",20000);
}