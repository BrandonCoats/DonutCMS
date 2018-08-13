<!DOCTYPE html>
<html lang="en">
  <head>
      <title id="title">about</title>
      <div id="style">
      
      </div>
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
          <a id="adminOnly" href="EAbout.php">Edit</a>
          <a id="adminOnly" href="AddPage.php">Add Page</a>
          <div id="addedPages">
          </div>
          <div id="displayUser">
            <p id='welcomeUser'></p>
          </div>
      </div>
      <div id="body">
          <div class="outer">
              <div class="middle">
                  <div class="inner">
                    <img id="image" src="./Images/GlazedDonut.png" alt="image">
                    <div id="content">
                    </div>  
                  </div>
              </div>
          </div>
      </div>
      <div class="footer">
        <footer>---Copyright Donut CMS 2018---
        <select id="select" onclick="ChangeTheme()">
          <option value="light" selected>Light</option>
          <option value="dark">Dark</option>
          <option value="color">Color</option>
          </select>
        </footer>
      </div>
    </div>
    <script src="./Scripts/LoadPage.js"></script>
    <script src="./Scripts/CheckIfUserIsAdmin.js"></script>
  </body>
</html>