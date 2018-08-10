var data;
var request = new XMLHttpRequest();


function UpdateData() {
  var dataID = document.getElementById("id").value;
  var content = document.getElementById("content").value;
  var page = document.getElementById("page").value;
  console.log(contentTerms);
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/UpdateImage.php' + '?id=' + dataID + '&path' + content + '&page=' + page;

  console.log(search);
  request.open('PUT', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  dataitem = data.data;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(dataitem);
  
  }