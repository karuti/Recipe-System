<?php
  session_start();
  if(!isset($_SESSION['uid'])){
  header('Location:index.php');
  }
  $host='localhost';
  $username='root';
  $pass='';
  $db='cuisine';
  $imessage="";
$message="";
    $text="";
  $conn=mysqli_connect($host,$username,$pass,$db);

  if(!$conn) die("Connection refused").mysql_connect_error();

mysqli_select_db($conn,$db)or
die("could not select database");

if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($conn, $_POST['name']);
$email=  mysqli_real_escape_string($conn,$_POST['email']);
$message= mysqli_real_escape_string($conn,$_POST['message']);


if (empty($name) || empty($email) || empty($message)){
  die();
}
else{
$sql="INSERT INTO contact(name,email,message)
      VALUES('$name','$email','$message')";

  $query=mysqli_query($conn,$sql);
  $text="<p style=\'color:red'>message sent successfully.we will get back to you</p>";
 $message= "message successfully sent.well get back to you ";
}}

/*
if ($query) {
    
 $to = 'info@oktiqdevelopers.co.ke'; 
 //put email address on which mail
 $subject     =   "Message from $name";  //Put subject of mail here
 $from        =   $email;    
 //put email address from
                               
//email body start

$body = ": $message";
    // Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
   
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n"; 

                                // More headers
                                $headers .= "From: ".$from. "\r\n";

                                //if you need to send cc mail then uncomment below line and change email address
                                $headers .= "Cc:kelvomyself@gmail.com" . "\r\n";
                                $headers .= "Cc:mskaruti@gmail.com" . "\r\n";

                            if( mail($to,$subject,$body,$headers)){
                              $text="<p style='color:green'> &#10003 Thank you $name for contacting us.";
                            } else {
                               $text="<p style='color:red'>Oops! please send the message again</p>";
                            }
   
   
}


else {
  $text="<p style=\'color:red'>Please enter again</p>";
}
}
}*/

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
  
    <section id="header">
<div class="col-md-8">
        <div class="panel panel-danger">
          <div class="panel-heading">Get in touch</div>
          <div class="panel-body">
    <form action="contact.php" method="post">

      <div class="alert-message">
                <p id="success"> <?php echo $imessage; ?> </p>
                <p id="error"> <?php echo $message; ?> </p>
        </div>
        <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  name="name" required autocomplete='off'>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required autocomplete='off'>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea  class="form-control" id="message"name="message" required autocomplete='off'></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

  </div>
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
</body>
</style>
</html>
