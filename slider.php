<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/slider_style.css"/>
    </head>
    <body>
        <div class="slide-shader"></div>
        <div class="slideshow-container">

            <div class="slides fade">
                <img src="img/Slide_1.jpg"/>
            </div>

            <div class="slides fade">
                <img src="img/Slide_2.jpg"/>
            </div>

            <div class="slides fade">
                <img src="img/Slide_3.jpg"/>
            </div>

        </div>
        <br>
        
        <div class="hedding-container">
            <p class="generalElection">General Election</p>
            <p class="sriLanka">Sri Lanka &nbsp;&nbsp;&nbsp; 2021</p>
            <p class="vote">Vote <span>&cross;</span></p>
            <button class="slider-login-button" onclick="togglevoterloginpopup()">Login</button>
            <a href="vote.php"><button class="slider-vote-button">Vote</button></a>
        </div>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </body>
</html>
