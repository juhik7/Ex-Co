function display(prog,heading,cost) {
  content = '<div id="page-wrap">';
  content = content + '<div class="meter animate red"><span style="width:' 
  content= content + prog
  content = content + '%"><span></span></span></div>';
  content = content + '</div>';
  document.getElementById("bar").innerHTML = content;
  document.getElementById("head").innerHTML = heading;
  document.getElementById("amt").innerHTML = "Rs "+cost;
}
function today(){
    display(25,"TODAY'S EXPENSE",5000);
}
function yesterday(){
    display(12,"YESTERDAY'S EXPENSE",2500);
}
function weekly(){
    display(50,"WEEKLY EXPENSE",10000);
}
function monthly(){
    display(100,"MONTHLY EXPENSE",20000);
}
$(".meter > span").each(function () {
  $(this)
    .data("origWidth", $(this).width())
    .width(0)
    .animate(
      {
        width: $(this).data("origWidth")
      },
      1200
    );
});