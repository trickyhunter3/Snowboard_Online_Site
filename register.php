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
  	<h2>Snowboard Online Register</h2>
  </div>

  <form id="regular" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
   	<div class="input-group">
  	  <label>Nickname</label>
  	  <input type="text" name="nickname" value="<?php echo $nickname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
      <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	  <button type="button" class="btn" onclick="location.href='login.php';">Login</button>
  	</div>
  	<p>
  		Snowboard Online
  	</p>
  </form>

<form id="downloads" method="post">
  <div class="box">
    <input id="btnDownload1" class="download-btn" type="button" onclick="location.href='https://google.com';" value="                " />
    <br>
    <input id="btnDownload2" class="download-btn" type="button" onclick="location.href='https://google.com';" value="                " />

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
