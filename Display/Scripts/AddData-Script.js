var data;
var request = new XMLHttpRequest();


function AddData() {
  var contentTerms = document.getElementById("content").value;
  var page = document.getElementById("page").value;
  console.log(contentTerms);
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://localhost/class/DonutCMS/CRUD/AddData.php' + '?content=' + contentTerms + '&page=' + page;

  console.log(search);
  request.open('POST', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  data = data.data;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(Movies);
  
  }