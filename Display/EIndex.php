<!DOCTYPE html>
<html lang="en">
  <head>
      <title id="title">index</title>
      <link href='CSS/light.css' rel='stylesheet'>
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
                        <div id="explain">
                                <h1>Welcome To the DonutCMS edit page</h1>
                                <p>Everything here is editable,go to town!Unfortunatly only two things are actually saved, the Content(The paragraph below), and the media(The picture)
                                    When you're done click the republish button below to change your page.
                                </p>
                        </div>
               
                 <input type="text" id="content" value="Eat me" />
                 <div id="images">
                 <img id="image" src="" alt="image" />
                 <input type="file" name="imageImp" id="imageElm"/>
                 </div>
                 <div id="config">
                <select>
                <option value="light">Light</option>
                <option value="dark">Dark</option>
                <option value="color">Color</option>
                </select>
                 </div>
                 <button onclick="Save()">Publish Changes</button>
                  </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer">
        <footer>---Copyright Donut CMS 2018---</footer>
      </div>
    </div>
    <script type="text/javascript" src="./Scripts/LoadPage.js"></script>
    <script type="text/javascript" src="./Scripts/Edit.js"></script>
    <script type="text/javascript" src="./Scripts/CheckUser.js"></script>
  </body>
</html>