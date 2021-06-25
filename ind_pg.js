function setCookie(cname,cvalue,exdays){
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
  
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user +"\nRemember,Use Fullscreen for the best user experience!");
  } else {
     user = prompt("Welcome! Please Enter your Name:","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
     alert("Please Use Fullscreen for the best user experience!");
  }
}

function card1in(){
  document.getElementById("card1info").innerHTML = "166 point Smart AutoFocus <br /> 4K Recording <br /> Mirrorless <br /> Fusion Burst <br />";
}

function card1out(){
  document.getElementById("card1info").innerHTML = "Roll over here!";
}

function card2in(){
  document.getElementById("card2info").innerHTML = "76 point Smart AutoFocus <br /> 50x Zoom Support <br /> Mirrorless <br /> AI Face Detection <br />";
}

function card2out(){
  document.getElementById("card2info").innerHTML = "Roll over here!";
}

function card3in(){
  document.getElementById("card3info").innerHTML = "50 point Smart AutoFocus <br /> FullHD Recording<br /> QuickAF <br /> Fusion Burst <br />";
}

function card3out(){
  document.getElementById("card3info").innerHTML = "Roll over here!";
}