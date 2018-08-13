var data;
var request = new XMLHttpRequest();


function AddPage(pageName) {
  var contentTerms = document.getElementById("content").value;
  console.log(contentTerms);
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://localhost/class/DonutCMS/CRUD/AddPage.php' + '?page=' + pageName;

  console.log(search);
  request.open('POST', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  data = data.AllData[0].page;
  var file = fs.createReadStream("./Generic.php");
  var newFile = fs.createWriteStream('./'+AllData[0].page);
  file.pipe(newFile);
}