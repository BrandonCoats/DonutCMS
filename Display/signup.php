<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Home</title>
      <link href='CSS/style.css', rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <div id="nav">
          <h1 id="logo"><a href="index.html">Donut CMS</a></h1>
          <img id="donut" src="Images/donut.png">
          <a href="signup.php">Sign-up</a>
          <a href="login.php">Log-in</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
      </div>
      <div id="body">
          <div class="outer">
              <div class="middle">
                  <div class="inner">
                      <h1>Sign-up</h1>
                      <form action="action_page.php">
                            <div class="form-container">
                                <p>Please fill in this form to create an account.</p>
                                <hr>
                            
                                <label for="Username"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" required>
                                <br/>
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required>
                                <br/>
                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                                <br/>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                </label>
                            
                                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                            
                                <div class="clearfix">
                                    <button type="submit" class="signupbtn">Sign Up</button>
                                </div>
                            </div>
                          </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer">
        <footer>---Copyright Donut CMS 2018---</footer>
      </div>
    </div>
  </body>
</html>