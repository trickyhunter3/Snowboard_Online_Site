<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
  <link rel="stylesheet" type="text/css" href="index.css">












      <meta charset="UTF-8">
      <link rel="apple-touch-icon" type="image/png" href="https://i.ibb.co/0hQwGXt/Tricks-quest-guides-image.png">
      <meta name="apple-mobile-web-app-title" content="CodePen">
      <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/0hQwGXt/Tricks-quest-guides-image.png">
      <link rel="mask-icon" type="" href="https://i.ibb.co/0hQwGXt/Tricks-quest-guides-image.png" color="#111">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">









      <style>


            @import url('https://fonts.googleapis.com/css?family=Montserrat');

              * {

                margin: 0;
                padding: 0;
                box-sizing: border-box;
              }
              #inde {
                font-family: 'Montserrat', sans-serif;
                background-color: #eee;
                color: #111;
                height: 0vh;
                margin-top: 250px;
                display: flex;
                justify-content: center;
                align-items: center;
              }

              :root {
                --marquee-width: 100vw;
                --marquee-height: 5vh;
                /* --marquee-elements: 12; */ /* defined with JavaScript */
                --marquee-elements-displayed: 5;
                --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
                --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
              }

              .marquee {
                width: var(--marquee-width);
                height: var(--marquee-height);
                background-color: #111;
                color: #eee;
                overflow: hidden;
                position: relative;
              }
              .marquee:before, .marquee:after {
                position: absolute;
                top: 0;
                width: 10rem;
                height: 100%;
                content: "";
                z-index: 1;
              }
              .marquee:before {
                left: 0;
                background: linear-gradient(to right, #111 0%, transparent 100%);
              }
              .marquee:after {
                right: 0;
                background: linear-gradient(to left, #111 0%, transparent 100%);
              }
              .marquee-content {
                list-style: none;
                height: 100%;
                display: flex;
                animation: scrolling var(--marquee-animation-duration) linear infinite;
              }
              /* .marquee-content:hover {
                animation-play-state: paused;
              } */
              @keyframes scrolling {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
              }
              .marquee-content li {
                display: flex;
                justify-content: center;
                align-items: center;
                /* text-align: center; */
                flex-shrink: 0;
                width: var(--marquee-element-width);
                max-height: 100%;
                font-size: calc(var(--marquee-height)*3/4); /* 5rem; */
                white-space: nowrap;
              }

              .marquee-content li img {
                width: 100%;
                /* height: 100%; */
                border: 2px solid #eee;
              }

              @media (max-width: 600px) {
                html { font-size: 12px; }
                :root {
                  --marquee-width: 100vw;
                  --marquee-height: 16vh;
                  --marquee-elements-displayed: 3;
                }
                .marquee:before, .marquee:after { width: 5rem; }
              }

              </style>

                <script>
                window.console = window.console || function(t) {};
              </script>



                <script>
                if (document.location.search.match(/type=embed/gi)) {
                  window.parent.postMessage("resize", "*");
                }

      </script>





</head>





<body>
<div class="header">
	<h2>Logged in Successfully</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>







<form id="inde">
<div class="marquee">
  <ul class="marquee-content">
    <li><i class="fab fa-github"></i></li>
    <li><i class="fab fa-codepen"></i></li>
    <li><i class="fab fa-free-code-camp"></i></li>
    <li><i class="fab fa-dev"></i></li>
    <li><i class="fab fa-react"></i></li>
    <li><i class="fab fa-vuejs"></i></li>
    <li><i class="fab fa-angular"></i></li>
    <li><i class="fab fa-node"></i></li>
    <li><i class="fab fa-wordpress"></i></li>
    <li><i class="fab fa-aws"></i></li>
    <li><i class="fab fa-docker"></i></li>
    <li><i class="fab fa-android"></i></li>
  </ul>
</div>

<script id="rendered-js">
  const root = document.documentElement;
  const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
  const marqueeContent = document.querySelector("ul.marquee-content");

  root.style.setProperty("--marquee-elements", marqueeContent.children.length);

  for(let i=0; i<marqueeElementsDisplayed; i++) {
    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
  }
</script>
</form>





<form id="home-botton-in-index" method="post">
<input id="home-botton-right-corner" class="home-btn" onclick="location.href='home.php';" value="    "/>
</form>

<form id="downloads-left-corenr-in-indexx" method="post">
<div class="box">
<input id="btnDownload1" class="download-btn" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />
<br>
<input id="btnDownload2" class="download-btn" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />



<form id="downloads-left-corenr-in-indexx" method="post">
<div class="box">
<input id="lines-left-corner" class="download-btn" type="button"/>
<br>

<form id="downloads-left-corenr-in-indexx" method="post">
<div class="box">
<input id="lines-left-corner2" class="download-btn" type="button"/>
<br>















</body>
</html>
