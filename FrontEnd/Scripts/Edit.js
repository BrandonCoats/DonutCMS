javascript:document.body.contentEditable='true'; 
document.designMode='on'; void 0
//The above code creates the illusion of constant updates for the user
// function setValues()
// {//actually provides functionality for updating 
// var contentData = document.getElementById("content").innerHTML;
// var imageData = document.getElementById("image").innerHTML;
// console.log(contentData);
// console.log(imageData);
// }
window.onload = function(){
    LoadPage();
}
var data;
var request = new XMLHttpRequest();


function LoadPage() {
  var page = document.getElementById("title").innerHTML;
  page = "edit";
  console.log(page);
  
  //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
  var search = 'http://localhost/class/DonutCms/BackEnd/LoadPage.php' + '?page=' + page;

  console.log(search);
  request.open('POST', search);
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  data = JSON.parse(request);
  //data = request.responseText;
  console.log(data);
  
  }
function Save()
{//Actually makes the callls to save data from fields to database.
    var data;
    var request = new XMLHttpRequest();
    var contentTerms = document.getElementById("content").value;
    var page = "edit";
    console.log(contentTerms);
    console.log(page);
    
    //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
    var search = 'http://10.10.16.191/back-end/AddData.php' + '?query=' + contentTerms + '&page=' + page;
  
    console.log(search);
    request.open('POST', search);
    request.onload = loadComplete;
    request.send();
    
}
// window.setInterval(
// function()
// {
//    setValues();
// }
// , 5000);