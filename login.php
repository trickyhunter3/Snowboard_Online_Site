<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Snowboard Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="downloads-left-corenr-in-register-and-login-and-home-pages.css">
  <link rel="stylesheet" type="text/css" href="home-botton-in-homepage.css">





























  </head>
  <body>



























      <div class="head">
      <h2>Login</h2>
      </div>
      <form id="regular" method="post" action="login.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    	<label>Username</label>
    	<input type="text" name="username" >
    	</div>
    	<div class="input-group">
    	<label>Password</label>
    	<input type="password" name="password">
    	</div>
    	<div class="input-group">
    	<button type="submit" class="btn" style="cursor: pointer" name="login_user">Login</button>
      <button type="button" class="btn" style="cursor: pointer" onclick="location.href='register.php';">Sign Up</button>
    	</div>
    	<p>Snowboard Online</p>
      </form>
     </form>







    <form id="home-botton-in-homepage" method="post">
    <input id="home-botton-right-corner" class="home-btn" onclick="location.href='home.php';" value="    "/>
    </form>



      <form id="downloads-left-corenr-in-register-and-login-and-home-pages" method="post">
      <div class="box">
      <input id="btnDownload1" class="download-btn" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />
      <br>
      <input id="btnDownload2" class="download-btn" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />
      </div>
      </form>


     </body>
     </html>
