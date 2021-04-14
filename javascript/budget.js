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
function budget(bud){
  var budget = parseInt(bud);
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
  display(100,"BUDGET",budget,color);
}