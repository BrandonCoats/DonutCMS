var data;
var request = new XMLHttpRequest();


function Search() {
  var contentTerms = document.getElementById("content").value;
  var page = document.getElementById("page").value;
  console.log(contentTerms);
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/search_results.php' + '?query=' + contentTerms + '&page=' + page;

  console.log(search);
  request.open('GET', search);
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