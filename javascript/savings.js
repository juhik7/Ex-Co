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
function today(savings,perc){
  var setSav = parseInt(savings);
  display(perc,"TODAY'S SAVINGS",setSav);
}
function yearly(savings,perc){
  var setSav = parseInt(savings);
  display(perc,"YEARLY SAVINGS",setSav);
}
function weekly(savings,perc){
  var setSav = parseInt(savings);
  display(perc,"WEEKLY SAVINGS",setSav);
}
function monthly(savings,perc){
  var setSav = parseInt(savings);
  display(perc,"MONTHLY SAVINGS",setSav);
}