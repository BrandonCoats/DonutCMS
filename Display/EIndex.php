<!DOCTYPE html>
<html lang="en">
  <head>
      <title id="title">edit</title>
      <link href='CSS/color.css', rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <div id="nav">
          <h1 id="logo"><a href="index.html">Donut CMS</a></h1>
          <img id="donut" src="Images/donut.png" alt="THE DONUT">
          <a href="signup.html">Sign-up</a>
          <a href="login.html">Log-in</a>
          <a href="about.html">About</a>
          <a href="contact.html">Contact</a>
      </div>
      <div id="body">
          <form action="Save()">
          <div class="outer">
              <div class="middle">
                  <div class="inner">
                        <div id="explain">
                                <h1>Welcome To the DonutCMS edit page</h1>
                                <p>Everything here is editable,go to town!Unfortunatly only two things are actually saved, the Content(The paragraph below), and the media(The picture)
                                    When you're done click the republish button below to change your page.
                                </p>
                        </div>
                <form action="Save()">
                 <div id="contents">
                 </div>  
                 <div id="images">
                 </div>
                 <div id="config">
                <select>
                <option value="light">Light</option>
                <option value="dark">Dark</option>
                <option value="color">Color</option>
                </select>
                 </div>
                 <input type="submit" value="Submit">
                  </div>
                </form>
                  </div>
              </div>
          </div>
        </form>
      </div>
      <div class="footer">
        <footer>---Copyright Donut CMS 2018---</footer>
      </div>
    </div>
    <!--<script src="./Scripts/Edit.js"></script>-->
  </body>
</html>