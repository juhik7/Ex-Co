function display(prog,heading,cost) {
  content = '<div id="page-wrap">';
  content = content + '<div class="meter animate red"><span style="width:' 
  content= content + prog
  content = content + '%"><span></span></span></div>';
  content = content + '</div>';
  document.getElementById("bar").innerHTML = content;
  document.getElementById("head").innerHTML = heading;
  document.getElementById("amt").innerHTML = "Rs "+cost;
  document.getElementById("link").style.visibility = "visible";
}
function today(expense,perc){
  var setExp = parseInt(expense);
  document.getElementById("myAnchor").href = "tables/expense_today.php"; 
  display(perc,"TODAY'S EXPENSE",setExp);
}
function yearly(expense,perc){
  var setExp = parseInt(expense);
  document.getElementById("myAnchor").href = "tables/expense_yearly.php"; 
  display(perc,"YEARLY EXPENSE",setExp);
}
function weekly(expense,perc){
  var setExp = parseInt(expense);
  document.getElementById("myAnchor").href = "tables/expense_weekly.php"; 
  display(perc,"WEEKLY EXPENSE",setExp);
}
function monthly(expense,perc){
  var setExp = parseInt(expense);
  document.getElementById("myAnchor").href = "tables/expense_monthly.php"; 
  display(perc,"MONTHLY EXPENSE",setExp);
}
