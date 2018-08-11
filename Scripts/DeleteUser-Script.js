var data;
var request = new XMLHttpRequest();


function EraseUser() {
  var UserID = document.getElementById("id");
  console.log(UserID);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/DeleteUser.php' + '?id=' + UserID;

  console.log(search);
  request.open('DELETE', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  user = data.user;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(user);
  
  }