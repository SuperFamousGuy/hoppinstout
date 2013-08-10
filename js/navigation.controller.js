function makeHomeButton() {
   var nav_div = document.getElementsByClassName("navigation")[0];
   var nav_ul = nav_div.getElementsByTagName("ul")[0];
   var li = document.createElement("li");
   var a = document.createElement("a");
   a.href = home_url;
   a.appendChild(document.createTextNode("Home"));
   li.appendChild(a);
   nav_ul.insertBefore(li, nav_ul.getElementsByTagName("li")[0]);
}
