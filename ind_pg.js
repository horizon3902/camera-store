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

function addRow(tableID) {  
  var table = document.getElementById(tableID);  
  var rowCount = table.rows.length;  
  var row = table.insertRow(rowCount);    
  var cell1 = row.insertCell(0);  
  var element1 = document.createElement("input");  
  element1.type = "button";  
  var btnName = "button" + (rowCount + 1);  
  element1.name = btnName;  
  element1.setAttribute('value', 'Forget');  
  element1.onclick = function () { removeRow(btnName); }  
  cell1.appendChild(element1);  
  var cell2 = row.insertCell(1);  
  cell2.innerHTML = rowCount + 1;   
  var cell3 = row.insertCell(2);  
  var element3 = document.createElement("textarea");  
  cell3.appendChild(element3);  
}

function removeRow(btnName) {  
  try {  
      var table = document.getElementById('wishList');  
      var rowCount = table.rows.length;  
      for (var i = 0; i < rowCount; i++) {  
          var row = table.rows[i];  
          var rowObj = row.cells[0].childNodes[0];  
          if (rowObj.name == btnName) {  
              table.deleteRow(i);  
              rowCount--;  
          }  
      }  
  }  
  catch (e) {  
      alert(e);  
  }  
}
