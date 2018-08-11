// javascript:document.body.contentEditable='true'; 
// document.designMode='on'; void 0
//The above code creates the illusion of constant updates for the user
// function setValues()
// {//actually provides functionality for updating 
// var contentData = document.getElementById("content").innerHTML;
// var imageData = document.getElementById("image").innerHTML;
// console.log(contentData);
// console.log(imageData);
// }

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