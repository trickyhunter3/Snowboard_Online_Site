
  <!DOCTYPE html>
  <html>
  <head>
	<title>Home Snoabord Online</title>
  <link rel="stylesheet" type="text/css" href="home.css">



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
          #a1 {


            font-family: 'Montserrat', sans-serif;
            background-color: #eee;
            color: #111;
            height: -50vh;
            margin-top: 870px;
            display: flex;
            margin-left: -2000px;
            margin-right: -80px;
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




<input id="a1">
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






















<form id="register-and-login-link-right-corner" method="post">
<input id="right-corner-Login" class="Register-btn" onclick="location.href='login.php';" value="    "/>
<input id="right-corner-Register" class="Register-btn" onclick="location.href='register.php';" value="    "/>
</form>





<input id="downpage-background" type="button"/>



<input id="picture1" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture2" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture3" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture4" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture5" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture6" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture7" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture8" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />

<input id="picture9" class="download-btn222" type="button" style="cursor: pointer" onclick="location.href='https://google.com';" value="                " />


<input id="movie-box" type="button"/>

<input id="movie" type="button"/>

<input id="movie-icon" type="button"/>


<input id="black-gallery-head" class="download-btn222" type="button"/>



<span style="font-size: 62px; margin: 70px 0; margin-left: 230px; position: relative; color: white; font-family: fantasy; white-space: pre; -webkit-text-stroke: 2px black; display: block;">SnowBoard Online</span>


<span style="font-size: 18px; margin: -555px 0; margin-left: 48px; position: relative; color: white; font-family: arial; white-space: pre; display: block;">Snowboard Online Emulator is a fast paced online arcade Snow Race game.<br>Create your own unique player and compete in the online races around the<br>world. Use variety of board moves and customize your player! Team up<br>with the best snow racers online and rise to the top!</span>

<span style="font-size: 14px; margin: 600px 0; margin-left: 48px; position: relative; color: #B9B9B9; font-family: arial; white-space: pre; display: block; position:absolute;">RELEASE DATE:</span>

<span style="font-size: 14px; margin: 640px 0; margin-left: 48px; position: relative; color: #B9B9B9; font-family: arial; white-space: pre; display: block; position:absolute;">GAME TYPE:</span>

<span style="font-size: 14px; margin: 680px 0; margin-left: 48px; position: relative; color: #B9B9B9; font-family: arial; white-space: pre; display: block; position:absolute;">GAME CONECTION:</span>

<span style="font-size: 14px; margin: 600px 0; margin-left: 370px; position: relative; color: #B9B9B9; font-family: arial; white-space: pre; display: block; position:absolute;">DEVELOPER:</span>

<span style="font-size: 14px; margin: 640px 0; margin-left: 370px; position: relative; color: #B9B9B9; font-family: arial; white-space: pre; display: block; position:absolute;">PUBLISHER:</span>

<span style="font-size: 14px; margin: 680px 0; margin-left: 368px; position: relative; color: #B9B9B9; font-family: arial; white-space: pre; display: block; position:absolute;">TECHNIQUE:</span>

<span style="font-size: 14px; margin: 600px 0; margin-left: 470px; position: relative; color: #FFBC00; -webkit-text-stroke: 0.1px white; font-family: arial; white-space: pre; display: block; position:absolute;">GAMESNOW</span>

<span style="font-size: 14px; margin: 640px 0; margin-left: 470px; position: relative; color: #FFBC00; -webkit-text-stroke: 0.1px white; font-family: arial; white-space: pre; display: block; position:absolute;">GAMESNOW</span>

<span style="font-size: 14px; margin: 600px 0; margin-left: 168px; position: relative; color: #E5E5E5; font-family: arial; white-space: pre; display: block; position:absolute;">1 Apr, 2022</span>

<span style="font-size: 14px; margin: 640px 0; margin-left: 158px; position: relative; color: #52DDFF; -webkit-text-stroke: 0.01px white; font-family: arial; white-space: pre; display: block; position:absolute;">PC Emulator,1024x768</span>

<span style="font-size: 14px; margin: 680px 0; margin-left: 198px; position: relative; color: #52DDFF; -webkit-text-stroke: 0.01px white; font-family: arial; white-space: pre; display: block; position:absolute;">Online Multiplayer</span>

<span style="font-size: 14px; margin: 680px 0; margin-left: 470px; position: relative; color: #79FF75; -webkit-text-stroke: 0.01px white; font-family: arial; white-space: pre; display: block; position:absolute;">LVLUP</span>

    </body>
    </html>
