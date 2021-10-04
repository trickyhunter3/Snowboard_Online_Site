<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Snowboard Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="home-botton-in-homepage.css">
</head>
<body>



  <div class="head">
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
      <button type="submit" class="btn" style="cursor: pointer" name="reg_user">Sign Up</button>
  	  <button type="button" class="btn" style="cursor: pointer" onclick="location.href='login.php';">Login</button>
  	</div>
  	<p>
  		Snowboard Online
  	</p>
    </form>




    <form id="home-botton-in-homepage" method="post">
    <input id="home-botton-right-corner" class="home-btn" onclick="location.href='home.php';" value="    "/>
    </form>




    </body>
    </html>
