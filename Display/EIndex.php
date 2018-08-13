<!DOCTYPE html>
<html lang="en">
  <head>
      <title id="title">index</title>
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
          <div id="displayUser">
            <p id='welcomeUser'></p>
          </div>
      </div>
      <div id="body">
          <div class="outer">
              <div class="middle">
                  <div class="inner">
                 <input type="text" id="content" value="Eat me" />
                 <button onclick="Save()">Publish Changes</button>
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
    <script type="text/javascript" src="./Scripts/LoadPage.js"></script>
    <script type="text/javascript" src="./Scripts/Edit.js"></script>
    <script type="text/javascript" src="./Scripts/CheckUser.js"></script>
  </body>
</html>