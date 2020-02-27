<!DOCTYPE html>
<html>
<?php

$servername="localhost";
$user="root";
$pass= "";
$database= "cuisine";
$imessage="";
$message="";
$con=mysqli_connect($servername,$user,$pass) or
 die("not connected");

mysqli_select_db($con,$database)or
die("could not select database");

if (isset($_POST['send'])) {
$fullname=mysqli_real_escape_string($con, $_POST['f_name']);
$nameofchef=mysqli_real_escape_string($con, $_POST['c_name']);
$email=  mysqli_real_escape_string($con,$_POST['email']);
$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
$description= mysqli_real_escape_string($con,$_POST['description']);


    $sql="INSERT INTO chef(fullname,nameofchef,email,mobile,description)
          VALUES('$fullname','$nameofchef','$email',$mobile','$description')";


          $insert= mysqli_query($con,$sql);



          if ($insert) {

           $imessage=" &#10003message sent  successfully.we will get back to you";



          }
          else {
            $message="<p>Something went wrong: " . mysqli_error($con); + "</p>";
          }
}
 ?>
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
  

<section>
   <div class="panel panel-danger">
          <div class="panel-heading">Book A chef</div>
          <div class="panel-body">
      <form action="" method="post">
        <div class="alert-message">
                <p id="success"> <?php echo $imessage; ?> </p>
                <p id="error"> <?php echo $message; ?> </p>
        </div>
       <div class="row">
        <div class="col-md-6 ">
           
       
            <div class="col-md-8">
              <label for="f_name"> Full Name</label>
              <input type="text" id="f_name1" name="f_name" class="form-control">
            </div>
            <div class="col-md-8">
              <label for="f_name">Name of chef</label>
              <input type="text" id="c_name1" name="c_name" class="form-control">
            </div>
          

            <div class="col-md-8">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control">
            </div>
          
      
            <div class="col-md-8">
              <label for="mobile">Mobile</label>
              <input type="text" id="mobile1" name="mobile" class="form-control">
            </div>
            <div class="col-md-12"></div>
          
<div class="col-md-8">
              <label for="description1">Description1</label>
              <input type="text" id="description1" name="description1" class="form-control">
            </div>
          
        
      
          

          <br><br>
          <div class="col-md-8 mt-4 mb-5">
            <input type="submit" class="btn btn-primary" value="send" name="send" id="sendbtn">
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
<section id="footer">
    <div class="wrapper" class="row" >
       <p style="color: white;height: 80px"> &copy copyrights 2018.The Cuisine|All rights reserved</p>
    </div>
  </section>

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
  </body></html>