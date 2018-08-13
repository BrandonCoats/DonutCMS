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
          <a id="adminOnly" href="EIndex.php">Edit</a>
          <a id="adminOnly" href='?addpage=true'>Add Page</a>
          
          <?php
             
            //prompt function
            function prompt($prompt_msg){
                echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script> <script type='text/javascript' src='.js'></script>");

                $answer = "<script type='text/javascript'> document.write(answer); </script>";
                return($answer);
            }

            function runMyFunction() {
              //program
              $prompt_msg = "Page Name:";
              $name = prompt($prompt_msg);

            }
            if (isset($_GET['addpage'])) {
              runMyFunction();
              AddPage($name);
            }
          ?>

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
                <img id="image" src="./Images/GlazedDonut.png" alt="image" />
                <div id="content">
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