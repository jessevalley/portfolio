<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jessevalley@me.com";
    $email_subject = "From the interwebs";
 
    function died($error) {
		  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
  echo '<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">';
  echo '<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">';
		echo '<style>';
		  echo '.btn {
      padding: 10px 20px;
      background-color: #2d2d30;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #2d2d30;
      background-color: #fff;
      color: #2d2d30;
  }';
		echo '</style>';
		echo '<div class="signin-form">';

echo '<div class="container">';
    echo "<div class='alert alert-danger'>";
		echo "<button class='close' data-dismiss='alert'>&times;</button>";
			echo '<strong>Sorry!</strong> There were errors with the form you submitted.<br />';
			echo $error."<br />";
			echo 'Please go back and fix these errors.<br />';
    echo '</div>';
    
    echo '<a href="index.php"><button class="btn btn-primary" id="back">';
     echo '<span class="glyphicon glyphicon-backward"></span> &nbsp; Back to Home';
    echo '</button></a></div></div>';
		die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<!doctype html>
<html lang="en">
<head>
  <title>Email Success</title>
  <meta charset="utf-8">
  <meta name="description" content="Creative Works of Jesse Valley">
  <meta name="keywords" content="Photography, Paintings, Poetry, Pottery, Art, Programming, Portfolio, Jesse Valley">
  <meta name="author" content="Jesse Valley">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 6000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%;
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 415px) {
	  #myCarousel {
		  display: none;
	  }	  
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  @media (max-width: 895px) {
	#navtext {
	  display: none;	  
	}
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #2d2d30;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #2d2d30;
      background-color: #fff;
      color: #2d2d30;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      border: 0;
      font-size: 12px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  #up {
	  position: fixed;
	  bottom: 10px;
	  left: 8%;
	  right: 0;
	  width: 100%;
	  font-size: 30px;
	  background-color: transparent;
	  box-sizing: border-box;
	  text-align: left;
	  padding: 20px;
	  opacity: 0.9;
  }
  .image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.cont:hover .image {
  opacity: 0.5;
}

.cont:hover .middle {
  opacity: 1;
}

.text {
  background-color: #2d2d30;
  color: white;
  font-size: 20px;
  padding: 20px 40px;
  border-radius: 7px;
}
li.social{
    display: inline;
	margin-left: auto;
}
#socialmedia a {
    color: #2d2d30;  
}
#socialmedia a:hover {
      color: #777;
      text-decoration: none;
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-left" href="#myPage"><img src="img/sig.png" class="img-responsive" style="height: 48px;" alt="Jesse Valley's Autograph" title="Home"></a>
      <p class="navbar-text" id="navtext">The Creative Works of Jesse Valley</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <?php if(($_SESSION['admin']) == 2){ ?>
        <li><a href="#homePage">Home</a></li>
        <li><a href="#tour">Portfolio</a></li>
        <li id="portal"><a href="adminPortal.php">Admin Portal</a></li>
        <li id="logout"><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php }elseif(($_SESSION['admin'] == 1)){ ?>
        <li><a href="#homePage">Home</a></li>
        <li><a href="#tour">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li id="logout"><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php }else{ ?>
        <li><a href="#homePage">Home</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li id="login" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a>
          <div class="dropdown-menu">
            <form id="formLogin" class="form container-fluid" action="authenticate.php" method="POST">
              <div class="form-group">
                <label for="usr">User Name:</label>
                <input type="text" class="form-control" id="usr" name="usr" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
              <button type="submit" name="submit" id="btnLogin" class="btn btn-block">Login</button><br />
              <p class="text-center">New User?
				  <a class="text-center" href="signup.php"> Sign Up</a></p>
            </form>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
    
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong> Thank you for the email. I will be in touch soon.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; Back to Home
    </button>
    
</div>

</div>

</body>
</html>
 
<?php
 
}
?>