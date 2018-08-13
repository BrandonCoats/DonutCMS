var data;
var request = new XMLHttpRequest();


function AddData() {
  var contentTerms = document.getElementById("content").value;
  var page = document.getElementById("page").value;
  console.log(contentTerms);
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://localhost/class/DonutCMS/CRUD/GetAllPageNames.php';

  console.log(search);
  request.open('GET', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  data = data.AllData;
  var nav = document.getElementById("nav");
  for(var j = 0; j < data.length; j++)
  {
    var aTag = document.createElement("a");
    aTag.setAttribute('href', AllData[j].page);
    aTag.innerHTML = AllData[j].page.split('/')[AllData[j].page.split('/').length -1];
    nav.appendChild(aTag);
}
  resultBox.innerHTML = "";
  console.log(Movies);
  
  }