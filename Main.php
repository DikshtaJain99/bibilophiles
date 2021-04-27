<?php 

ob_start();
  session_start();
  if(!isset($_SESSION['loggedInUser'])){
    //send the iser to login page
    header("location:Home.php");
}
    include_once("includes/functions.php");
    include_once("includes/connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>

<title> Bibliophile | Home </title>
 <meta charset = "utf-8">
 <meta name="viewport" content="width=device-width">
 <meta name="description" content="A social cataloguing site">
 <meta name="keywords" content="Books, user-to-user recommendations">
 <meta name="Author" content="Avinash Bharadwaj">
 <link rel="stylesheet" href="./css/style.css">
 <link rel="stylesheet" href="./css/style1.css">
 <link rel="stylesheet" href="./css/style2.css">
 <link rel="stylesheet" href="./css/style3.css">
  <link rel="stylesheet" href="./style2.css">


 
 </head>
 
 <body>
 <header>
        <img src="img/logo.png">
            <nav>
            <ul>
                <li class="current"><a href="Main.php">Home </a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="ViewCart.php">MyShelf</a></li>
            <li><a href="about.php">About Us </a></li> 
            <li class="current"><a href="logout.php">Sign Out</a></li>     
            </ul>
           </nav>
      
 </header>

 <section id="showcase1">
    <div class="container">
        <h1> Click below to hunt for your favorite books!</h1>
        <button class="searchButton" onclick="location.href='Search.php'">Search</button>
        <button class="button_rss" onclick="location.href='feed_rss.php'">Book News Feed</button>
    </div>

 </section>

 <br>
<br>
    <div class="container">
<text class="carTitle">Globally loved</text>
    </div>

 <div id="body1">
<div class="home-product-new-hldr">
    <div class="slider-btn-hldr slider-btn-hldr-left">
        <button id="left-btn" class="slider-btn" style="display: block;">
        <svg viewBox="0 0 256 256">
            <polyline fill="none" stroke="black" stroke-width="16" points="184,16 72,128 184,240"></polyline>
        </svg>
    </button>
    </div>
    <div class="home-product-new">
        <div class="home-grid products-grid products-grid--max-4" style="left: 0px;">
            <div class="item-container">
                <div class="item">
                    <a href="harrypotter.php"><img src="img/harry potter.jpg" height="300" width="274"/></a>
                </div>
            </div>
            <div class="item-container">
                <div class="item"> 
                    <img src="img/alchemist.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/subtleart.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/percy jackson.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/hitrefresh.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/lotr.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/artofwar.jpg" height="300" width="274"/>
                </div>
            </div>
        <div class="item-container">
                <div class="item">
                    <img src="img/kiterunner.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/chicken soup.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/callofthewild.jpg" height="300" width="274"/>
                </div>
            </div>



        </div>
    </div>

    <div class="slider-btn-hldr slider-btn-hldr-right">
        <button id="right-btn" onclick="" class="slider-btn" style="display: block;">
        <svg viewBox="0 0 256 256">
            <polyline fill="none" stroke="black" stroke-width="16" points="72,16 184,128 72,240"></polyline>
        </svg>
    </button>
    </div>
</div>
</div>

<br>
<br>
<br>
<br>



<script>
var listEl = document.querySelector('.home-grid.products-grid.products-grid--max-4');
var btnLeftEl = document.querySelector('#left-btn');
var btnRightEl = document.querySelector('#right-btn');
count = 0;
btnLeftEl.addEventListener("click", function(e) {
    count++;
    listEl.style.left = count * 286 + 'px';
    if (count > -6) {
        btnRightEl.style.display = 'block';
    }
    if (count >= 0) {
        btnLeftEl.style.display = 'none';
    }
});
btnRightEl.addEventListener("click", function(e) {
    count--;
    listEl.style.left = count * 286 + 'px';
    if (count < 0) {
        btnLeftEl.style.display = 'block';
    }
    if (count <= -6) {
        btnRightEl.style.display = 'none';
    }
});
</script>

<div class="container">
<text class="carTitle">Top picks for you</text>
 </div>



<div id="body2">
<div class="home-product-new-hldr1">
    <div class="slider-btn-hldr slider-btn-hldr-left1">
        <button id="left-btn1" class="slider-btn1" style="display: block;">
        <svg viewBox="0 0 256 256">
            <polyline fill="none" stroke="black" stroke-width="16" points="184,16 72,128 184,240"></polyline>
        </svg>
    </button>
    </div>
    <div class="home-product-new1">
        <div class="home-grid products-grid products-grid--max-41" style="left: 0px;">
            
            <div class="item-container1">
                <div class="item1"> 
                    <img src="img/got1.jpg" height="300" width="274"/>
                </div>
            </div>

            <div class="item-container1">
                <div class="item1">
                    <img src="img/harry potter.jpg" height="300" width="274"/>
                </div>
            </div>
            
            <div class="item-container1">
                <div class="item1">
                    <img src="img/subtleart.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container1">
                <div class="item1">
                    <img src="img/bornacrime.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container1">
                <div class="item1">
                    <img src="img/hitrefresh.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container1">
                <div class="item1">
                    <img src="img/lotr.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container1">
                <div class="item1">
                    <img src="img/musk.jpg" height="300" width="274"/>
                </div>
            </div>
        <div class="item-container1">
                <div class="item1">
                    <img src="img/artofwar.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container1">
                <div class="item1">
                    <img src="img/taleoftwo.jpg" height="300" width="274"/>
                </div>
            </div>
            <div class="item-container1">
                <div class="item1">
                    <img src="img/alchemist.jpg" height="300" width="274"/>
                </div>
            </div>



        </div>
    </div>

    <div class="slider-btn-hldr1 slider-btn-hldr-right1">
        <button id="right-btn1" onclick="" class="slider-btn1" style="display: block;">
        <svg viewBox="0 0 256 256">
            <polyline fill="none" stroke="black" stroke-width="16" points="72,16 184,128 72,240"></polyline>
        </svg>
    </button>
    </div>
</div>
</div>

<script>
var listEl1 = document.querySelector('.home-grid.products-grid.products-grid--max-41');
var btnLeftEl1 = document.querySelector('#left-btn1');
var btnRightEl1 = document.querySelector('#right-btn1');
count1 = 0;
btnLeftEl1.addEventListener("click", function(e) {
    count1++;
    listEl1.style.left = count1 * 286 + 'px';
    if (count1 > -6) {
        btnRightEl1.style.display = 'block';
    }
    if (count1 >= 0) {
        btnLeftEl1.style.display = 'none';
    }
});
btnRightEl1.addEventListener("click", function(e) {
    count1--;
    listEl1.style.left = count1 * 286 + 'px';
    if (count1 < 0) {
        btnLeftEl1.style.display = 'block';
    }
    if (count1 <= -6) {
        btnRightEl1.style.display = 'none';
    }
});
</script>

 </body>
 </html>