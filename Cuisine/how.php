<?php
  session_start();
  if(!isset($_SESSION['uid'])){
  header('Location:index.php');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>The cuisine</title>
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cookie|Dancing+Script|Major+Mono+Display|Old+Standard+TT|Sacramento|Satisfy|Tangerine" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets2/css/main.min.css" />

</head>
<body style="background-color: #f7bd4f">


  <div class="navbar navbar-default navbar-fixed-top" id="topnav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">TheCusine</a>
      </div>
      <div class="nav navbar-nav">
             <li>
              <a href="profile.php" style="padding: 25px">Menu</a>
            </li>
          </div>
          <div class="nav navbar-nav">
            <li>
              <a href="chef.php" style="padding: 25px">Book A Chef</a>
            </li></div>
            <div class="nav navbar-nav">
             <li>
              <a  href="contact.php"  style="padding: 25px">Contact</a>
            </li></div>
            <div class="nav navbar-nav">
            <li>
              <a  href="how.php" style="padding: 25px">How It Works</a>
            </li></div>
      </ul>
      </div>
    </div>
    <br><br><br>
     <div class="one-time">
      <div><img src="assets/images/carousel1.png"></div>
      
    </div>
   
     <section style="padding: 30px">
        <div class="banner-bottom-main bg-white">
        <center>  <h2 class="heading-agileinfo">What <span> We Offer</span></h2></center>
          <span class="w3-line black"></span> 
          <div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
        <div class="col-lg-4 w3layouts_news_left_grid1 text-center">
          <div class="new_top">
             <h1>1</h1>
      <h3>Sign up for The cuisine</h3>
      <p>Let us know how often you’d like to cook and what you like to eat.</p>
          </div>
        </div>
        <div class="col-lg-4 w3layouts_news_left_grid2 text-center">
          <div class="new_top">
            <h1>2</h1>
      <h3>Pick your recipes</h3>
      <p>Choose from 20 exciting new recipes each week—desserts optional.Cook amazing meals
      Follow simple recipe steps to create impressive dinners worth sharing. </p>
          </div>
        </div>
        <div class="col-lg-4 w3layouts_news_left_grid3 text-center">
          <div class="new_top">
           <h1>3</h1>
      <h3>Ontime Delivery</h3>
      <p>Receive everything you need in an insulated box packed with care.</p>
        </div>
      </div>  
      </div>
    </section>
 <section style="background-color: #f7bd4f" id="discount">
    <div class="wrapper">
      <h3></h3>
      <div class="discountLayout">
         <picture>
          <source media="(min-width: 681px)" srcset="assets2/img/box.jpg">
          <source media="(max-width: 680px)" srcset="assets2/img/box.jpg">
          <img src='assets2/img/box.jpg'>
        </picture>
        <div class="offer">
          <h4>Reliable delivery</h4>

            <h3>Reliable Delivery</h3>
       <h4>PRE-PORTIONED</h4>
        <P>Get the ingredients you need in just the right amounts to cook the recipes you choose.</P>

            <h4>CAREFULLY CURATED</h4>
            <P>Explore a full range of seasonal produce and specialty items you may not find in stores.</P>

              <h4>HANDLED WITH CARE</h4>
         <P> Your box is hand-packed and shipped via local couriers or FedEx, arriving between 8am and 8pm.<P>

                <h4>NO NEED TO BE HOME</h4>
      <P>Our insulated box keeps food fresh up to midnight on your delivery day. No signature required.</P>

       <h6>WE DELIVER TO OVER 75% OF KENYA.</h6>
            
        </div>
        
      </div>
    </div>
  </section>
     <div></div>
    <div></div>
  </section>

  <section id="footer">
    <div class="wrapper" class="row">
       <p style="color: white;height: 80px"> &copy copyrights 2018.The Cuisine|All rights reserved</p>
    </div>
  </section>2

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animatescroll.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/retina.min.js"></script>
  <script src="./assets2/js/vendors.js"></script>
  <script src="./assets2/js/app.js"></script>
  <script src="./assets2/js/vendors.js"></script>2
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</body>
</style>
</html>
