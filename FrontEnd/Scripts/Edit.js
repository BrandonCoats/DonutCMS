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
var data;
var request = new XMLHttpRequest();
var imgData;
var imgRequest = new XMLHttpRequest();
window.onload = function(){
    LoadPage();
}
function LoadPage() {
  var page = document.getElementById("title").innerHTML;
  page = "edit";
  console.log(page);
 
  var search = 'http://localhost/class/DonutCms/BackEnd/LoadData.php' + '?page=' + page;

  console.log(search);
  request.open('POST', search);
  request.onload = loadComplete;
  request.send();

 //start loading img file
  var imgSearch = 'http://localhost/class/DonutCms/BackEnd/LoadImage.php' + '?page=' + page;

  console.log(imgSearch);
  imgRequest.open('POST', imgSearch);
  imgRequest.onload = imgLoadComplete;
  imgRequest.send();

}
function imgLoadComplete(evt) {
    imgData = JSON.parse(imgRequest.responseText);
    //data = request.responseText;
    console.log(imgData);
    console.log(imgData.AllData[0].path);
    var loadedimage = imgData.AllData[0].path;
    var img = document.getElementById("image");
    img.src = loadedimage;
}
function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  console.log(data);
  console.log(data.AllData[0].content);
  var loadedCon = data.AllData[0].content;
  var con = document.getElementById("content");
  con.innerHTML = loadedCon;
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
    var search = 'http://10.10.16.191/back-end/UpdateData.php' + '?query=' + contentTerms + '&page=' + page;
  
    console.log(search);
    request.open('PUT', search);
    request.onload = loadComplete;
    request.send();
    
}
// window.setInterval(
// function()
// {
//    setValues();
// }
// , 5000);
function StoreImg(pathToFile)
{
    var slipt = pathToFile.slipt("/");
    var imgName = split[split.length()-1];
    var file = IO.newFile(imgName, pathToFile);
    var dest = IO.newFile("*/Images", "");
    file.copyTo(dest, imgName);
}