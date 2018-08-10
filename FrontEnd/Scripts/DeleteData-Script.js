var data;
var request = new XMLHttpRequest();


function DeleteData() {
  var DataID = document.getElementById("id");
  console.log(DataID);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://10.10.16.191/back-end/DeleteData.php' + '?id=' + DataID;

  console.log(search);
  request.open('DELETE', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  Data = data.data;
  document.getElementById("res").innerHTML = "Results:";
  var resultBox = document.getElementById("results");
  resultBox.innerHTML = "";
  console.log(Data);
  
  }