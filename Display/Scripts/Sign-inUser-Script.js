var data;
var request = new XMLHttpRequest();


import {createHash} from 'Salt&HashFE';
function SignIn() {
  var username = document.getElementById("username").value;
  var passHash = createHash(document.getElementById("password").value);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/GetSpecficUser.php' + '?username=' + username + '&password='+passHash;

  console.log(search);
  request.open('GET', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  user = data.user;
  $_COOKIE['user'] = user;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(Movies);
  
  }