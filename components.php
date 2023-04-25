<?php

function navhead(){

  if (isset($_SESSION['username'])) {
    if(isset($_SESSION['cart'])){
      $totalqty = 0;
    foreach ($_SESSION['cart'] as $key => $value){
          $cprice = (int)$value['qty'];
          $totalqty += $cprice;
      }
    }
    else{
      $totalqty = "";
    }



    $navh = '


    <style>
    
    @import url("https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
body {
	font-family: "Open Sans", sans-serif;
	background: #2c3e50;
}
nav{
	position: relative;
	/* margin: 270px auto 0; */
	width: 470px;
	/* height: 50px; */
	background: #34495e;
	border-radius: 8px;
	font-size: 0;
	box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
}
nav a,nav .dropdown{
	font-size: 15px;
	text-transform: uppercase;
	color: white;
	text-decoration: none;
	line-height: 50px;
	position: relative;
	z-index: 1;
	display: inline-block;
	text-align: center;
}
nav .animation,.nav .dropdown{
	position: absolute;
	height: 100%;
	/* height: 5px; */
	top: 0;
	/* bottom: 0; */
	z-index: 0;
	background: #1abc9c;
	border-radius: 8px;
	transition: all .5s ease 0s;
}
nav a:nth-child(1),nav .dropdown:nth-child(1){
	width: 100px;
}
nav .start-home, a:nth-child(1):hover~.animation,.dropdown:nth-child(1):hover~.animation{
	width: 100px;
	left: 0;
}
nav a:nth-child(2),nav .dropdown:nth-child(2){
	width: 110px;
}
nav a:nth-child(2):hover~.animation,nav .dropdown:nth-child(2):hover~.animation{
	width: 110px;
	left: 100px;
}
nav a:nth-child(3){
	width: 100px;
}
nav a:nth-child(3):hover~.animation{
	width: 100px;
	left: 210px;
}
nav a:nth-child(4){
	width: 160px;
}
nav a:nth-child(4):hover~.animation{
	width: 160px;
	left: 310px;
}
nav a:nth-child(5){
	width: 120px;
}
nav a:nth-child(5):hover~.animation{
	width: 120px;
	left: 470px;
}

/*  */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: 50px;
  left: 0;
  background-color: #34495e;
  min-width: 160px;
  z-index: 1;
  border-radius: 0px 0px 20px 20px;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}

nav a:nth-child(2){
  width: auto;
  cursor: pointer;
}

nav .animation {
  width: 0;
}

/*    Login index   */


.indexlog
{   
    font-family: consolas;
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: #2196f3;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.2s;
}
.indexlog:hover
{
    color: #255784;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-delay: 1s;
}
.indexlog span
{
    position: absolute;
    display: block;
}
.indexlog span:nth-child(1)
{
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #2196f3);
}
a:hover span:nth-child(1)
{
    left:  100%;
    transition: 1s;
}
.indexlog span:nth-child(3)
{
    bottom:  0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #2196f3);
}
.indexlog:hover span:nth-child(3)
{
    right:  100%;
    transition: 1s;
    transition-delay: 0.5s;
}

.indexlog span:nth-child(2)
{
    top: -100%;
    right: 0%;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #2196f3);
}
.indexlog:hover span:nth-child(2)
{
    top:  100%;
    transition: 1s;
    transition-delay: 0.25s;
}

.indexlog span:nth-child(4)
{
    bottom:  -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #2196f3);
}
.indexlog:hover span:nth-child(4)
{
    bottom:  100%;
    transition: 1s;
    transition-delay: 0.75s;
}


/*     Logout button       */


@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

.button {
  position: relative;
  padding: 10px 22px;
  border-radius: 6px;
  border: none;
  color: #fff;
  cursor: pointer;
  background-color: #7d2ae8;
  transition: all 0.2s ease;
}
.button:active {
  transform: scale(0.96);
}
.button:before,
.button:after {
  position: absolute;
  content: "";
  width: 150%;
  left: 50%;
  height: 100%;
  transform: translateX(-50%);
  z-index: -1000;
  background-repeat: no-repeat;
}
.button.animate::before {
  top: -70%;
  background-image: radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, transparent 20%, #7d2ae8 20%, transparent 30%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, transparent 10%, #7d2ae8 15%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,
    10% 10%, 18% 18%;
  animation: greentopBubbles ease-in-out 0.6s forwards infinite;
}
@keyframes greentopBubbles {
  0% {
    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,
      40% 90%, 55% 90%, 70% 90%;
  }
  50% {
    background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,
      50% 50%, 65% 20%, 90% 30%;
  }
  100% {
    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,
      50% 40%, 65% 10%, 90% 20%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}
.button.animate::after {
  bottom: -70%;
  background-image: radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, transparent 10%, #7d2ae8 15%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;
  animation: greenbottomBubbles ease-in-out 0.6s forwards infinite;
}
@keyframes greenbottomBubbles {
  0% {
    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,
      70% -10%, 70% 0%;
  }
  50% {
    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,
      105% 0%;
  }
  100% {
    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,
      110% 10%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}
.textlg{
  font-family: consolas;
  text-transform: uppercase;
  font-size: 18px;
}

/*                         */


    </style>

    <header class="header-top-strip py-4">
    <div class="container-xxl">
    <div class="row">
    
    <div class="col-9">
    <nav>
        <a href="index.php"><img src="logo.png" alt="Logo"></a>
        <div class="dropdown col-4">
          <a href="#" class="dropdown">About &#9660;</a>
          <div class="dropdown-content">
            <a href="category.php?cat=all">All</a>
            <a href="category.php?cat=Nintendo">Nintendo</a>
            <a href="category.php?cat=PC">PC</a>
            <a href="category.php?cat=PlayStation">Playstation</a>
            <a href="category.php?cat=Xbox">Xbox</a>
          </div>
        </div>
        <a href="cart.php" class="text-white col-4">Cart <i class="bi bi-cart-fill"></i></a>
        <a href="order.php" class="text-white col-1">Order</a>

        <div class="animation "></div>

    </nav>
    </div>

    <div class="col-3">
    <p class="textlg text-white text-end mb-1"><a href="account.php" ><i class="bi bi-person-circle"></i></a> '.$_SESSION['username'].'   <button class="button" onclick="logout()"">Logout</button></p>
    </div>
    
    </div>
 

        <script>
      const button = document.querySelector(".button");

      button.addEventListener("click", (e) => {
        e.preventDefault;
        button.classList.add("animate");
        setTimeout(() => {
          button.classList.remove("animate");
        }, 600);
      });

      function logout() {
        location.href = "index.php?logout=1";
      }
    </script>


    </header>







  <header class="header-upper py-3">
    <div class="container-xxl">
      <div class="row align-items-center">
        <div class="col-7"></div>
        <div class="col-5">
        <form action="category.php" method="GET">
        <div class="input-group">
            <input type="text" name="search"
              class="form-control py-2"
              placeholder="Search....."
              aria-label="Search....."
              aria-describedby="basic-addon2" />
            <span class="input-group-text p-3" id="basic-addon2">
            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
            </span>

          </div>
        </form>
        </div>

      </div>
    </div>
  </header>';
  }else{    $navh = '

    <style>
    
    @import url("https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
body {
	font-family: "Open Sans", sans-serif;
	background: #2c3e50;
}
nav{
	position: relative;
	/* margin: 270px auto 0; */
	width: 470px;
	/* height: 50px; */
	background: #34495e;
	border-radius: 8px;
	font-size: 0;
	box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
}
nav a,nav .dropdown{
	font-size: 15px;
	text-transform: uppercase;
	color: white;
	text-decoration: none;
	line-height: 50px;
	position: relative;
	z-index: 1;
	display: inline-block;
	text-align: center;
}
nav .animation,.nav .dropdown{
	position: absolute;
	height: 100%;
	/* height: 5px; */
	top: 0;
	/* bottom: 0; */
	z-index: 0;
	background: #1abc9c;
	border-radius: 8px;
	transition: all .5s ease 0s;
}
nav a:nth-child(1),nav .dropdown:nth-child(1){
	width: 100px;
}
nav .start-home, a:nth-child(1):hover~.animation,.dropdown:nth-child(1):hover~.animation{
	width: 100px;
	left: 0;
}
nav a:nth-child(2),nav .dropdown:nth-child(2){
	width: 110px;
}
nav a:nth-child(2):hover~.animation,nav .dropdown:nth-child(2):hover~.animation{
	width: 110px;
	left: 100px;
}
nav a:nth-child(3){
	width: 100px;
}
nav a:nth-child(3):hover~.animation{
	width: 100px;
	left: 210px;
}
nav a:nth-child(4){
	width: 160px;
}
nav a:nth-child(4):hover~.animation{
	width: 160px;
	left: 310px;
}
nav a:nth-child(5){
	width: 120px;
}
nav a:nth-child(5):hover~.animation{
	width: 120px;
	left: 470px;
}

/*  */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: 50px;
  left: 0;
  background-color: #34495e;
  min-width: 160px;
  z-index: 1;
  border-radius: 0px 0px 20px 20px;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}

nav a:nth-child(2){
  width: auto;
  cursor: pointer;
}

nav .animation {
  width: 0;
}

/*    Login index   */


.indexlog
{   
    font-family: consolas;
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: #2196f3;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.2s;
}
.indexlog:hover
{
    color: #255784;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-delay: 1s;
}
.indexlog span
{
    position: absolute;
    display: block;
}
.indexlog span:nth-child(1)
{
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #2196f3);
}
a:hover span:nth-child(1)
{
    left:  100%;
    transition: 1s;
}
.indexlog span:nth-child(3)
{
    bottom:  0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #2196f3);
}
.indexlog:hover span:nth-child(3)
{
    right:  100%;
    transition: 1s;
    transition-delay: 0.5s;
}

.indexlog span:nth-child(2)
{
    top: -100%;
    right: 0%;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #2196f3);
}
.indexlog:hover span:nth-child(2)
{
    top:  100%;
    transition: 1s;
    transition-delay: 0.25s;
}

.indexlog span:nth-child(4)
{
    bottom:  -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #2196f3);
}
.indexlog:hover span:nth-child(4)
{
    bottom:  100%;
    transition: 1s;
    transition-delay: 0.75s;
}


/*                  */


    </style>
    <header class="header-top-strip py-4">
    <div class="container-xxl">
    <div class="">
    <nav>
        <a href="index.php"><img src="logo.png" alt="Logo"></a>
        <div class="dropdown col-4">
          <a href="#" class="dropdown">About &#9660;</a>
          <div class="dropdown-content">
            <a href="category.php?cat=all">All</a>
            <a href="category.php?cat=Nintendo">Nintendo</a>
            <a href="category.php?cat=PC">PC</a>
            <a href="category.php?cat=PlayStation">Playstation</a>
            <a href="category.php?cat=Xbox">Xbox</a>
          </div>
        </div>
        <a href="cart.php" class="text-white col-4">Cart <i class="bi bi-cart-fill"></i></a>
        <a href="order.php" class="text-white col-1">Order</a>

        <div class="animation "></div>
      </div>
      </div>
    </nav>
    <div style="position: relative;">
  <div style="position: absolute; top: 50%; transform: translateY(-50%); right: 250; bottom: -125px;">
    <p class="text-white text-end mb-0 indexlog">
      <a href="login.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Login
      </a>
    </p>
  </div>
</div>
    </header>






  <header class="header-upper py-3">
    <div class="container-xxl">
      <div class="row align-items-center">
        <div class="col-6"></div>
        <div class="col-5">
        <form action="category.php" method="GET">
        <div class="input-group test">
            <input type="text" name="search"
              class="form-control py-1"
              placeholder="Search....."
              aria-label="Search....."
              aria-describedby="basic-addon2" />
            <span class="input-group-text p-3" id="basic-addon2">
            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
            </span>

          </div>
        </form>
          
        </div>

      </div>
    </div>
  </header>';
}
echo $navh;
}
function footer(){
    $footer = "<footer class='py-4'></footer>
<footer class='py-4'>
  <div class='container-xxl'>
    <div class='row'>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Contact us</h4>
        <p class='text-white'>dheepapol@hotmail.com</p>
        <p class='text-white'>Tel +66 926957100</p>
        <div></div>
      </div>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Inform</h4>
        <div></div>
      </div>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Account</h4>
        <div></div>
      </div>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Links</h4>
        <div></div>
      </div>
    </div>
  </div>
</footer>
<footer class='py-4'>
  <div class='container-xxl'>
    <div class='row'>
      <div class='col-12'>
        <p class='text-center mb-0 text-white'>&copy ; 2023; Powered by Pure</p>
      </div>
    </div>
  </div>
</footer>";
    echo $footer;
}
function prodcard($cardname,$carddesc,$cardprice,$cardid,$cardpic,$cardqty){
      floatval(preg_replace('/[^\d.],/', '', '"'.$cardprice.'"'));
    $cardprice = number_format($cardprice,2);


$prod = '
<style>
a:hover {
  text-decoration: none;
}

.card{
  border-radius: 10px;
  background: linear-gradient(180deg, #6dc4ff 0%, #0b40ff 52.08%, #3300ff 100%);
}
.card{
  width: 350px;
  height: 450px;
  background-position: center top;
  background-size: cover;
  overflow: hidden;
  position: relative;
}
.card-details{
  position: absolute;
  bottom: -450px;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px 10px;
  background: linear-gradient(90deg, rgba(143, 0, 255, 0.7)0%, rgba(91,0,255,0.7)48.44%, rgba(36,0,255,0.7)100%);
  box-shadow: inset -4px -4px 20px rgba(255, 255, 255, 0.35), inset 4px 4px 20px rgba(255, 255, 255, 0.35);
  transition: 0.3s ease-in-out;
}
.card-title{
  position: absolute;
  left: 0;
  text-align: center;
  bottom: 0;
  width: 100%;
  height: 18%;
  text-transform: uppercase;
  transition: 0.3 ease-in-out;
  background: transparent;
}
.card-title h3{
  font-size: 24px;
  font-weight: bold;
  color: #fff;
}
.card:hover .card-title{
  bottom: -75px;
}
.card:hover .card-details{
  bottom: 0;
}

.card button{
  position: absolute;
  top: 75%;
  cursor: pointer;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
}
.card button:nth-child(1){
  margin: 0px 65px 0px;
  position: sticky;
  width: 85px;
  height: 35px;
  float: left;
  background: #ff00b8;
  border-radius: 20px;
  border: none;
  transition: transform .5s;
}
.card button:nth-child(2){
  margin: 0px 65px 0px;
  position: sticky;
  width: 85px;
  height: 35px;
  float: right;
  background: #00c2ff;
  border-radius: 20px;
  border: none;
  transition: transform .5s;
}
.card button:nth-child(1):hover{
  color: #ff00b8;
  background: #fff;
  transition: .4s;
  transform: scale(1.1);
}
.card button:nth-child(2):hover{
  color: #00c2ff;
  background: #fff;
  transition: .4s;
  transform: scale(1.1);
}
.card:hover .card-details{
  bottom: 0;
}

.details h1{
  position: absolute;
  width: 100%;
  top: 5%;
  text-transform: uppercase;
  text-align: center;
  font-size: 30px;
  color: #fff;
}
.details p{
  position: absolute;
  width: 70%;
  margin-left: 15%;
  margin-right: 15%;
  top: 25%;
  text-align: center;
  color: #e7e7e7;
  font-weight: bold;
  font-family: Roboto;
  font-size: 18px;
}
.details h2{
  position: absolute;
  top: 50%;
  text-align: center;
  width: 100%;
  color: #fff;
}
.details h2 span{
  font-size: 30px;
}
</style>

<div class="center col-4 my-4">
<div class="card">
    <img src="'.$cardpic.'" alt="">
    <div class="card-title">
        <h3>'.$cardname.'</h3>
    </div>
    <div class="card-details">
  
        <button>cart</button>

        <div class="details">
            <h1>'.$cardname.'</h1>
            
            <h2>'.$cardprice.'<span>⠀Baht</span></h2>
            <br>
            <input type="number" name="qty" value="1" max="'.$cardqty.'">
        </div>
    </div>
</div>
</div>';
  


echo $prod;
}
?>