var data;
var request = new XMLHttpRequest();


function Search() {
  var contentID = document.getElementById("id").value;
  var username = document.getElementById("username").value;
  var passhash = createHash(document.getElementById("password").value);
  var isAdmin = document.getElementById("isAdmin").value;

  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/UpdateUser.php' + '?id=' + contentID + '&username=' + username + '&passHash='+ passhash + '&isAdmin'+isAdmin;

  console.log(search);
  request.open('PUT', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  Movies = data.Movies;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(Movies);
  
  }