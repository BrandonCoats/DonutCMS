var data;
var request = new XMLHttpRequest();
var imgData;
var imgRequest = new XMLHttpRequest();
window.onload = function(){
    LoadPage();
}
function LoadPage() {
  var page = document.getElementById("title").innerHTML;
  console.log(page);
 
  var search = 'http://localhost/class/DonutCms/CRUD/LoadData.php' + '?page=' + page;

  console.log(search);
  request.open('POST', search);
  request.onload = loadComplete;
  request.send();

 //start loading img file
  var imgSearch = 'http://localhost/class/DonutCms/CRUD/LoadImage.php' + '?page=' + page;

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
  var con = document.getElementById("contents");
  con.innerHTML = loadedCon;
  }