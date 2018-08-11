var data;
var request = new XMLHttpRequest();


function CreateAccount() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var hash = createHash(password);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/AddUser.php' + '?username=' + username + '&passHash=' + hash;

  console.log(search);
  request.open('POST', search);
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
  console.log(user);
  
  }