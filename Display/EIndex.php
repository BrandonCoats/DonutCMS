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
          <a href="signup.php">Sign-up</a>
          <a href="login.php">Log-in</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
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
                      <h2>The Story of John</h2>
                      <img id="image" src="./Images/amishButter.jpg" alt="image" /><input type="file" name="chooser" accept="image/*"/>
                      <p id='content'>We are a website all about advertising amish butter. I know what you're thinking
                         "How can the Amish have a website?" Well The entire site is run by those of us on rumspringa, so get wrecked!(Also Some of us are lawyers for some reason.)
                      </p>>
                      <input type="submit" value="Publish">
                  </div>
              </div>
          </div>
        </form>
      </div>
      <div class="footer">
        <footer>---Copyright Donut CMS 2018---</footer>
      </div>
    </div>
    <script src="./Scripts/Edit.js"></script>
  </body>
</html>