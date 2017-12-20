<?php
session_start();
include("database_config.php");
$_SESSION['gpw1'];
$query = $dbh->prepare("SELECT * FROM file WHERE GALLERY_GID = 1 ORDER BY TITLE;");
$query->execute();
$query2 = $dbh->prepare("UPDATE GALLERY SET NUM_VIEWS = (NUM_VIEWS + 1) WHERE GID = 1;)");
$query2->execute();
$query2 = null;
$stmt = $dbh->prepare('SELECT * FROM gallery WHERE GID = 1');
$stmt->execute();
$views = $stmt->fetch(PDO::FETCH_ASSOC);
$logged = $views['LOGGED_IN'];
$views2 = $views['NUM_VIEWS'];
$gpw = $views['GPW'];
$pwmatch = $_SESSION['gpw1'];
$gid = $views['GID'];
$_SESSION['gpw']=$gpw;
$role = $_SESSION['admin'];
$uid = $_SESSION['uid'];
if($role!=1){
	if($logged == 1){
		$stmt2 = $dbh->prepare('SELECT * FROM gallery_list WHERE GLIST_UID = :uid AND GLIST_GID = :gid');
		$stmt2->execute(['uid' => $uid, 'gid' => $gid]);
		if($stmt2->rowCount() == 0){
			header('Location: index.php?err=2');
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Photography of Jesse Valley</title>
  <meta charset="utf-8">
  <meta name="description" content="Photography of Jesse Valley">
  <meta name="keywords" content="Photography, Art, Portfolio, Jesse Valley">
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
	  /*z-index: 900; */
	  bottom: 10px;
	  left: 8%;
	  right: 0;
	  width: 70px;
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
#socialmedia {
	position:relative;
    /*z-index:1000;*/
	padding: 15px;
}
#socialmedia a {
    color: #fff;  
}
#socialmedia a:hover {
      color: #777;
      text-decoration: none;
}
.caption a:hover {
	  text-decoration: none;	  
}
.parallax {
    /* The image used */
    background-image: url("img/aspen.jpg");

    /* Set a specific height */
    min-height: 650px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	opacity: .85;
}
.caption {
  position: absolute;
  z-index: 950;
  left: 0;
  top: 600px;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #2d2d30;
  color: #fff;
  padding: 18px;
  font-size: 15px;
  letter-spacing: 8px;
  opacity: .9;
  border-radius: 100px;
}
@media only screen and (max-device-width: 1024px) {
    .parallax {
        background-attachment: scroll;
    }
	.caption {
		display: none;
	}
}
@media only screen and (max-device-width: 415px) {
    .parallax {
        background-attachment: scroll;
    }
	.caption {
		top: 80%;
		display: block;
	}
}
.rowd,
.rowd > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: block; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.rowd:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}
.content img {
	width: 100%;
	  }
/* The "show" class is added to the filtered elements */
.show {
  display: block;
}
@media (max-width: 800px) {
    .column {
        width: 50%;
    }
}
@media (max-width: 485px) {
    .column {
        width: 100%;
   }
		}
.modal-backdrop {
    opacity:1 !important;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onLoad="$('#onload').modal('show');">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-left" href="index.php"><img src="img/sig.png" class="img-responsive" style="height: 48px;" alt="Jesse Valley's Autograph" title="Home"></a>
      <p class="navbar-text" id="navtext">The Photography of Jesse Valley</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <?php if($_SESSION['admin'] == 1){ ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#top">Top</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li id="portal"><a href="adminPortal.php">Admin Portal</a></li>
        <li id="logout"><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php }elseif($_SESSION['admin'] == 2){ ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#top">Top</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a data-toggle="modal" href="#contactMe">Contact</a></li>
        <li id="logout"><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php }else{ ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#top">Top</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a data-toggle="modal" href="#contactMe" data-backdrop="static">Contact</a></li>
        <li id="login" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a>
          <div class="dropdown-menu">
            <form id="formLogin" class="form container-fluid" action="authenticate.php" method="POST">
              <div class="form-group">
                <label for="usr">User Name:</label>
                <input type="text" class="form-control" id="usr" name="usr" placeholder="User name" required>
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
              <button type="submit" name="submit" id="btnLogin" class="btn btn-block">Login</button><br />
              <p class="text-center">New User?
				  <a data-toggle="modal" class="text-center" href="#signup"> Sign Up</a></p>
            </form>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (The Home Section) -->
<div id="top" class="container-fluid text-justify">
<h2> </h2><br /><br />
<?php if(($gpw!=NULL) && ($gpw!=$pwmatch) && ($_SESSION['admin']!=1)){ ?>

	<div class="modal fade" id="onload" role="dialog" data-backdrop="static" data-keyboard="false">

		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">

			  <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span>Enter Gallery Password</h4>
			</div>
			<div class="modal-body">
			 <form name="gpword" method="POST" action="valgpass.php?gid=<?php echo $gid; ?>">
			 	<input class="form-control" id="gpasswd" name="gpasswd" placeholder="Enter gallery password" type="password" required>
			</div>
			<div class="modal-footer">
			  <button type="submit" name="pwsubmit" id="pwsubmit" class="btn btn-default">Submit</button>
			  <p class="text-center">Don't have the password? <a href="index.php" class="text-info">Go back home</a></p>
			  <?php
		echo '<br /><br />';
		$errors = array( 1 => "Invalid username or password. Please try again.",
						 2 => "Please login to access this area.",
						 3 => "Invalid gallery password. Please try again.",
						 4 => "You must be logged in as an Admin for this!");

		if ( isset( $_GET[ 'err' ] ) ) {
			$error_id = $_GET[ 'err' ];
			if ( $error_id >= 1 ) {
				echo '<div class="alert alert-danger text-center"><strong>Warning! </strong>' . $errors[ $error_id ] . '</div>';
			}
		}
	?>
			</div>
			</form>
		  </div>
		</div>
	</div><?php } ?>
<h3 class="text-center">Fine Art Photography</h3>
</div>
<div class="parallax">
	<div class="caption">
    	<a href="#portfolio" id="down"><span class="border"><span class="glyphicon glyphicon-chevron-down"></span> SCROLL DOWN</span></a>
  	</div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="bg-1">
  <div class="container-fluid">
    <div class="modal fade" id="contactMe" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-envelope"></span> Contact Me</h4>
        </div>
        <div class="modal-body">
<form name="contactform" method="post" action="send_form_email.php">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="first_name" placeholder="First Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="lname" name="last_name" placeholder="Last Name" type="text" required>
        </div>
      </div>
      <div class="form-group">
	  	<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
	  </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea>
              <button type="submit" name="submit" class="btn btn-block">Send 
                <span class="glyphicon glyphicon-send"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
			</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Create Account</h4>
        </div>
        <div class="modal-body">
        <h5 class="text-center text-warning">Your user name must be unique<br />and your passwords must match.</h5>
		<form name="contactform" method="post" action="signup.php">
      <div class="form-group">
                <label for="usrNew">User Name:</label>
                <input type="text" class="form-control" id="usrNew" name="usrNew" placeholder="User name" required>
              </div>
              <div class="form-group">
                <label for="pwdNew">Password:</label>
                <input type="password" class="form-control" id="pwdNew" name="pwdNew" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="pwdConf">Confirm Password:</label>
                <input type="password" class="form-control" id="pwdConf" name="pwdConf" placeholder="Retype Password" required>
              </div>
              <button type="submit" name="btnSignup" id="btnSignup" class="btn btn-block">Create</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
			</button>
        </div>
      </div>
    </div>
  </div>
   <h2> </h2>
  <br /><br />
    <h3 class="text-center">Portfolio of Photography</h3>
   		<p class="text-right">Gallery views: <?php echo $views2; ?></p>
    		<div class="rowd">
			<?php
			while($row1=$query->fetch(PDO::FETCH_ASSOC)){
				$name=$row1['TITLE']; ?>
				<div class="column">
					<div class="content">
						<a href="img/<?php echo $row1['FILE_NAME']; ?>" id="<?php echo $name; ?>"> 
						<img class="img" src="img/<?php echo $row1['FILE_NAME']; ?>" alt="<?php echo $name; ?>"></a>
						<h5 style="color:#2f2f2f; font-weight:bold">"<?php echo $name; ?>"</h5>
					</div>
				</div>
			<?php } ?>
		</div>
  </div>
</div>
<!-- Footer -->
<footer class="container-fluid text-center">
	<section id="socialmedia">
		<nav>
			<ul style="margin-left: -40px;">
				<li class="social"><a href="http://twitter.com/jessevalley" target="_blank"><i class="fa fa-twitter-square" style="font-size: 40px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="http://facebook.com/jessevalleyphotography" target="_blank"><i class="fa fa-facebook-square" style="font-size: 40px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="http://instagram.com/jessevalley" target="_blank"><i class="fa fa-instagram" style="font-size: 40px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="https://plus.google.com/u/0/+JesseValley" target="_blank"><i class="fa fa-google-plus-square" style="font-size: 40px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="http://www.linkedin.com/in/jessevalley" target="_blank"><i class="fa fa-linkedin-square" style="font-size: 40px;"></i></a></li>
			</ul>
		</nav>
	</section>
		<p>&copy;
			<?php
			$copyYear = 1991;
			$curYear = date( 'Y' );
			echo $copyYear . ( ( $copyYear != $curYear ) ? '&mdash;' . $curYear : '' );
			?> by Jesse Charles Valley. All Rights Reserved.<h2> </h2>
	</footer>
    <div id="up">
	  <a href="#myPage" data-toggle="tooltip" title="TO TOP">
		<span class="glyphicon glyphicon-chevron-up" style="color:black;"></span>
	  </a>
	</div>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, a#down, div#up a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
