<?php
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:profile.php');
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
<body  style="background-color: #f7bd4f">


	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
      
			<div class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sign In</a>
					<ul class="dropdown-menu">
					<div style="width: 300px;">
						<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email">
								<label for="email">Password</label>
								<input type="password" class="form-control" id="password">
								<p><br></p>
								<a href="#" style="color: white;list-style-type: none;">Forgot Password?</a>
								<input type="submit" class="btn btn-success" style="float: right;bottom:12px;" id="login" value="Login" name="">
							</div>
							<div class="panel-footer" id="e_msg"></div>
						</div>
					</div>
				</div>

				<li><a href="customer_registration.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
		<br><br><br>
	<!-- Slider Begins -->

	 <div class="one-time">
	    <div><img src="assets/images/carousel1.png"></div>
	    
  	</div>

	<!-- Slider ends -->

	 <section id="features">
    <div class="wrapper">
       <h3 style="font-family: 'Major Mono Display', monospace">  ENJOY YOUR DAY<br>
        TONIGHT IS TAKEN CARE OF</h3>
      <div class="cards">
        <div class="feature-card car">
          <img src="assets2/img/fd4.png" alt="">
          <h3>Food you’ll love</h3>
          <p style="font-family: 'Cookie', cursive ; font-size: 25px">Cook from a globally inspired, chef-designed menu with 20 recipes (plus dessert!) each week.</p>
        </div>
        <div class="feature-card shoe">
          <img src="assets2/img/fod2.png" alt="">
          <h3>Flexibility you crave</h3>
          <p style="font-family: 'Cookie', cursive ; font-size: 25px"> Choose your number of servings and nights, then mix and match your dishes in any combination.</p>
        </div>
        <div style="font-family: 'Cookie', cursive" class="feature-card device">
          <img src="assets2/img/food1.png" alt="">
          <h3>Menus you help design</h3>
          <p style="font-family: 'Cookie', cursive; font-size: 25px">Rate and review your dishes on the app to let us know what you like and what you want more of.</p>
        </div>
      </div>
    </div>
  </section>
   <section id="discount">
    <div class="wrapper">
      <div class="discountLayout">
        <picture>
          <source media="(min-width: 681px)" srcset="assets2/img/pic4.jpg">
          <source media="(max-width: 680px)" srcset="assets2/img/pic4.jpg">
          <img src='assets2/img/pic4.jpg'>
        </picture>
        <div class="offer">
          <h4>Deciding what to do for dinner shouldn’t be a struggle.</h4>
        <P style="font-family: 'Old Standard TT', serif; font-size: 20px"> Skip the “What’s for dinner?” debate so you can focus on everything else you have going on. In less than 5 minutes you can choose recipes, set your meal kit delivery day, and find out how delightfully simple meal planning with The cusine can be.</P>
        <P><a href="how.php">HOW IT WORKS>>></a></P>
        </div>
      </div>2
    </div>
  </section>

  <section id="discount" ">
    <div class="wrapper">
      <h3></h3>
      <div class="discountLayout">
        <div class="offer">
          <h4>Any craving answered, any night you choose.</h4>
         <P style="font-family: 'Old Standard TT', serif; font-size: 20px"> There are lots of recipes out there. Luckily our culinary team is here to create a balanced range of new choices each week. Choose from 20 thoughtfully crafted recipes designed to save you time and fit your unique tastes.</p>
          <P><a href="menu.php">Our recipes>>></a></P>
        </div>
         <picture>
          <source media="(min-width: 681px)" srcset="assets2/img/picy.jpg">
          <source media="(max-width: 680px)" srcset="assets2/img/picy.jpg">
          <img src='assets/img/picy.jpg'>
        </picture>
      </div>
    </div>
  </section>

<section id="discount">
    <div class="wrapper">
      <h3></h3>
      <div class="discountLayout">
         <picture>
          <source media="(min-width: 681px)" srcset="assets2/img/pic7.jpg">
          <source media="(max-width: 680px)" srcset="assets2/img/pic7.jpg">
          <img src='assets/img/pic7.jpg'>
        </picture>
        <div class="offer">
          <h4>Skip the shopping. Make your groceries come to you.</h4>
           <P style="font-family: 'Old Standard TT', serif; font-size: 20px">Convenience has never been so delicious. We deliver the ingredients you need—when and where you want them—precisely measured for the recipes you’ve chosen. That means less prep time, less food waste, and more control over your schedule. You can even adjust your meal kit delivery days week to week!.</p>
            <P><a href="contact.php">Get in touch>>></a></P>
        </div>
        
      </div>
    </div>
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
