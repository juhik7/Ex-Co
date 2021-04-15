function display(prog,heading,cost) {
  content = '<div id="page-wrap">';
  content = content + '<div class="meter animate"><span style="width:' 
  content= content + prog
  content = content + '%"><span></span></span></div>';
  content = content + '</div>';
  document.getElementById("bar").innerHTML = content;
  document.getElementById("head").innerHTML = heading;
  document.getElementById("amt").innerHTML = "Rs "+cost;
  document.getElementById("link").style.visibility = "visible";
}
function today(income,perc){
  var setInc = parseInt(income); 
  document.getElementById("myAnchor").href = "tables/income_today.php"; 
  display(perc,"TODAY'S INCOME",setInc);
}
function yearly(income,perc){
  var setInc = parseInt(income);
  document.getElementById("myAnchor").href = "tables/income_yearly.php"; 
  display(perc,"YEARLY INCOME",setInc);
}
function weekly(income,perc){
  var setInc = parseInt(income);
  document.getElementById("myAnchor").href = "tables/income_weekly.php"; 
  display(perc,"WEEKLY INCOME",setInc);
}
function monthly(income,perc){
  var setInc = parseInt(income);
  document.getElementById("myAnchor").href = "tables/income_monthly.php"; 
  display(perc,"MONTHLY INCOME",setInc);
}