<!DOCTYPE html>
<html lang="en">
  <head>
      <title id="title">contact</title>
      <link href='CSS/style.css', rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <div id="nav">
          <h1 id="logo"><a href="index.php">Donut CMS</a></h1>
          <img id="donut" src="Images/donut.png" alt="THE DONUT">
          <a href="signup.html">Sign-up</a>
          <a href="login.html">Log-in</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
          <script>
          var userJson = sessionStorage.getItem("user");
            var user = JSON.parse(userJson);
            if(user.isAdmin)
            { 
              var adminOnly = document.getElementById("adminOnly");
              adminOnly.visibility = "visible";
            }  
          </script>
          <div id="addedPages">
          </div>
          <div id="adminOnly">
            <a href="EContact.php">Edit</a>
            <a href="AddPage.php">Add Page</a>
          </div>
      </div>
      <div id="body">
          <div class="outer">
              <div class="middle">
                  <div class="inner">
                  <img id="image" src="./Images/GlazedDonut.png" alt="image">
                  <div id="contents">
                  </div>     
                  </div>
              </div>
          </div>
      </div>
      <div class="footer">
        <footer>---Copyright Donut CMS 2018---</footer>
      </div>
    </div>
    <script src="./Scripts/LoadPage.js"></script>

  </body>
</html>