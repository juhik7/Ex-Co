function display(prog,heading,cost,color) {
  content = '<div id="page-wrap">';
  content = content + '<div class="meter animate '; 
  content = content + color;
  content = content + '"><span style="width:';
  content= content + prog
  content = content + '%"><span></span></span></div>';
  content = content + '</div>';
  document.getElementById("bar").innerHTML = content;
  document.getElementById("head").innerHTML = heading;
  document.getElementById("amt").innerHTML = "Rs "+cost;
}
function budget(){
  var budget = 5000;
  var color;
  if(budget>=0){
    document.getElementsByTagName("head")[0].insertAdjacentHTML(
    "beforeend",
    "<link rel=\"stylesheet\" href=\"css/income.css\" />");
    color="";
  }else{
    document.getElementsByTagName("head")[0].insertAdjacentHTML(
    "beforeend",
    "<link rel=\"stylesheet\" href=\"css/expense.css\" />");
    color="red";
  }
  display(75,"BUDGET",budget,color);
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