var data;
var request = new XMLHttpRequest();


function GetData() {
  var page = document.getElementById("page").value;
  var id = document.getElementById("id").value;
  console.log(contentTerms);
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/GetSpecficData.php' + '?page=' + page;
  if(id !== null)
  {
    search += '&id='+id;
  }

  console.log(search);
  request.open('GET', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  DataItem = data;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(DataItem);
  
  }