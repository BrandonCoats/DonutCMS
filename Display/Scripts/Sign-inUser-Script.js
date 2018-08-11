var data;
var request = new XMLHttpRequest();
var bcrypt = require("bcrypt-nodejs");

function createHash(enteredString){
    bcrypt.hash(enteredString, null, null, function(err, hash){
        bcrypt.compare(enteredString, hash, function(err, res){
            return (hash);
        });
    });
    
}

function SignIn() {
  var username = document.getElementById("username").value;
  var passHash = createHash(document.getElementById("password").value);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://pijpriem/DonutCMS/CRUD/GetSpecficUser.php' + '?username=' + username + '&password='+passHash;

  console.log(search);
  request.open('GET', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  user = data.user;
  sessionStorage.setItem("user", request.responseText);
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(Movies);
  
  }