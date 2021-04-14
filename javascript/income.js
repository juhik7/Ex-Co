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
function today(income,perc){
  var setInc = parseInt(income);
  display(perc,"TODAY'S INCOME",setInc);
}
function yearly(income,perc){
  var setInc = parseInt(income);
  display(perc,"YEARLY INCOME",setInc);
}
function weekly(income,perc){
  var setInc = parseInt(income);
  display(perc,"WEEKLY INCOME",setInc);
}
function monthly(income,perc){
  var setInc = parseInt(income);
  display(perc,"MONTHLY INCOME",setInc);
}