<!DOCTYPE html>
<html lang="en">
  <head>
      <title id="title">index</title>
      <link href='CSS/light.css', rel='stylesheet'>
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
            if(userJson !== null)
            {
              var welcome = document.getElementById("welcomeUser");
              welcome.innerHTML ="Welcome "+ user.username +"!";
              if(userJson.isAdmin)
              { 
                var adminOnly = document.getElementById("adminOnly");
                adminOnly.style.visibility = "visible";
              }
            } 
          </script>
          <div id="addedPages">
          </div>
          <div id="adminOnly">
            <a href="EIndex.php">Edit</a>
            <a href="AddPage.php">Add Page</a>
          </div>
          <div id="displayUser">
            <p id='welcomeUser'></p>
          </div>
      </div>
      <div id="body">
          <div class="outer">
              <div class="middle">
                <div class="inner">
                <img id="image" src="./Images/GlazedDonut.png" alt="image" />
                <div id="contents">
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