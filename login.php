<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Snowboard Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style-download.css">
</head>
<body>
  <div class="header">
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
  	<p>
  		Snowboard Online
  	</p>
  </form>

  <form id="downloads" method="post">
    <div class="box">
      <input id="btnDownload1" class="download-btn" style="cursor: pointer" type="button" onclick="location.href='https://google.com';" value="                " />
      <br>
      <input id="btnDownload2" class="download-btn" style="cursor: pointer" type="button" onclick="location.href='https://google.com';" value="                " />

      <p id="text-download1">
      Mega
      </p>

      <p id="text-download2">
      Torrent
      </p>

    </div>
  </form>
</body>
</html>
