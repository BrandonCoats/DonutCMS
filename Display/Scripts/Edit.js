function Save()
{//Actually makes the callls to save data from fields to database.
    var request = new XMLHttpRequest();
    var contentTerms = document.getElementById("content").value;
    var page = document.getElementById("title").innerHTML;
    console.log(contentTerms);
    console.log(page);
    
    //var search = 'http://localhost/class/movieAPI/search_results.php' + '?query=' + searchTerms;
    var search = 'http://localhost/class/DonutCMS/CRUD/UpdateData.php' + '?content=' + contentTerms + '&page=' + page;
    console.log(search);
    request.open('PUT', search);
    //request.onload = loadComplete;
    request.send();

}

