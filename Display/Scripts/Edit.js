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
    //start image process
    var imagespot = document.getElementById("image");
    var valEntered = document.getElementById("imageElm").value;
    imagespot.src = valEntered;
    var imgRequest = new XMLHttpRequest();
    var imgSearch = 'http://localhost/class/DonutCms/CRUD/LoadImage.php' + '?page=' + page;

    console.log(imgSearch);
    imgRequest.open('PUT', imgSearch);
    //imgRequest.onload = imgLoadComplete;
    imgRequest.send();

}

window.addEventListener('load', function() {
    document.querySelector('input[name="imageImp"]').addEventListener('change', function() {
        
        if (this.files && this.files[0]) {
            filename = this.files[0];
            var img = document.querySelector('img');  // $('img')[0]
            img.src = URL.createObjectURL(this.files[0]); // set src to file url
            img.onload = imageIsLoaded; // optional onload event listener
        }
    });
});
