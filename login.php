<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Snowboard Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="downloads-left-corenr-in-register-and-login-and-home-pages.css">
  <link rel="stylesheet" type="text/css" href="home-botton-in-homepage.css">
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
          #bb {
            font-family: 'Montserrat', sans-serif;
            background-color: #eee;
            color: #111;
            height: 0vh;
            margin-top: 637px;
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
  <body id="bbody">

    <main id="bbody">
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
</main>



    <form id="bb">
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

     </body>
     </html>
