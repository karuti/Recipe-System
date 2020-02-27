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
	<title>TheCusine</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fav.png">
</head>
<body style="background-color: #f7bd4f">
	<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">TheCusine</a>
			</div>
			<ul class="nav navbar-nav">
             <li>
              <a href="profile.php" style="padding: 25px">Menu</a>
            </li>
            <li>
              <a href="chef.php" style="padding: 25px">Book A Chef</a>
            </li>
             <li>
              <a  href="contact.php"  style="padding: 25px">Contact</a>
            </li>
            <li>
              <a  href="how.php" style="padding: 25px">How It Works</a>
            </li>
			</ul>
           
			<ul class="nav navbar-nav navbar-right">
				<li id='shoppingcart'><a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">2</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-4"><strong>S. No.</strong></div>
									<div class="col-md-4"><strong>Product Name</strong></div>
									<div class="col-md-4"><strong>Price in Ksh</strong></div>


								</div>
								<hr>
								<div id="caTheCusine
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer">
							<a href='cart.php' class='btn btn-success mt-5'>View Cart</a></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Hello, <?php echo $_SESSION['uname']; ?></a>
				<ul class="dropdown-menu">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Cart</a></li>
					<li><a href="#">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				</li>

				</ul>

		</div>
	</div>
	<br><br><br><br><br><br>

	<br>



	<div class="container-fluid">
		<div class="row">

			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12" id="cartmsg">

					</div>
				</div>
				<div class="panel panel-danger">
					<div class="panel-heading text-center">--Top Kenyan dishes--
							<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#" id='pop_sort'>Popularity</a>
							</div>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>

					</ul>
				</center>
			</div>


			<!-- Modal -->

				<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				      </div>
				    </div>
				  </div>
				</div>

			 <!-- Modal ends-->
		</div>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
