function Save()
{//Actually makes the callls to save data from fields to database.
    var request = new XMLHttpRequest();
    var contentTerms = document.getElementById("contents").value;
    var page = document.getElementById("title");
    console.log(contentTerms);
    console.log(page);
    
    //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
    var search = 'http://localhost/class/DonutCMS/CRUD/UpdateData.php' + '?query=' + contentTerms + '&page=' + page;
    
    console.log(search);
    request.open('PUT', search);
    request.onload = loadComplete;
    request.send();
    
}
function StoreImg(pathToFile)
{
    var slipt = pathToFile.slipt("/");
    var imgName = split[split.length()-1];
    var file = IO.newFile(imgName, pathToFile);
    var dest = IO.newFile("*/Images", "");
    file.copyTo(dest, imgName);
}