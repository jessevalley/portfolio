<?php
session_start();
if(!isset($_SESSION['done'])){
	$_SESSION['done']=0;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Creative Works of Jesse Valley</title>
  <meta charset="utf-8">
  <meta name="description" content="Creative Works of Jesse Valley">
  <meta name="keywords" content="Photography, Paintings, Poetry, Pottery, Art, Programming, Portraiture, Portfolio, Jesse Valley">
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
  @media (max-width: 905px) {
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
#socialmedia a {
    color: #2d2d30;  
}
#socialmedia a:hover {
      color: #777;
      text-decoration: none;
}
#socialmedia {
	position:relative;
    z-index:1000;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onLoad="$('#welcome').modal('show');">

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
       <?php if($_SESSION['admin'] == 1){ ?>
        <li><a href="#homePage">Home</a></li>
        <li><a href="#portfolio">Portfolios</a></li>
        <li id="portal"><a href="adminPortal.php">Admin Portal</a></li>
        <li id="logout"><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php }elseif($_SESSION['admin'] == 2){ ?>
        <li><a href="#homePage">Home</a></li>
        <li><a href="#portfolio">Portfolios</a></li>
        <li><a href="#contact">Contact</a></li>
        <li id="logout"><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php }else{ ?>
        <li><a href="#homePage">Home</a></li>
        <li><a href="#portfolio">Portfolios</a></li>
        <li><a href="#contact">Contact</a></li>
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
<?php if((($_SESSION['admin'] == 1) || ($_SESSION['admin'] == 2)) && ($_SESSION['done']!=1)){ ?>

	<div class="modal fade" id="welcome" role="dialog">

		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
		  	  <?php  if(($_SESSION['admin'] == 1) || ($_SESSION['admin'] == 2)){
				$_SESSION['done'] = 1;} ?>
			  <button type="button" class="close" data-dismiss="modal">×</button>
			  <h4 class="modal-title">Welcome <?php echo $_SESSION['fname']; ?>!</h4>
			</div>
			<div class="modal-body text-center">
		 		<?php
					$bday = new DateTime($_SESSION['bday']);
					date_default_timezone_set( "America/Chicago" );
					$date = date("m-d");																	 
					if(($bday->format('m-d')) == $date){ echo '<h3><span class="glyphicon glyphicon-star-empty"></span> Happy Birthday! <span class="glyphicon glyphicon-star-empty"></span></h3>'; }?>
			 	<?php if($_SESSION['admin'] == 1){ ?>
					<h3>Do cool admin stuff:</h3>
			 		<p>Visit your <a href="adminPortal.php" class="text-info">Admin Portal</a></p>
			 		<!--<p>Create a <a href="newGal.php" class="text-info">New Gallery</a></p>-->
			 	<?php }else{ ?>
			 		<h3>Please enjoy my website!</h3>
			 		<p>Exit to explore the site, or choose a quick link below:</p>
			 		<div class="containter">
			 			<p class="text-left"><span class="glyphicon glyphicon-user"></span> <a href="update.php" class="text-info">Manage your Account</a></p>
			 			<p class="text-left"><span class="glyphicon glyphicon-camera"></span> <a href="#portfolio" class="text-info" onClick="$('#welcome').modal('hide');">View Portfolios</a></p>
			 			<p class="text-left"><span class="glyphicon glyphicon-envelope"></span> <a href="#contact" class="text-info" onClick="$('#welcome').modal('hide');">Contact Me</a></p>
			 		</div>
			 	<?php } ?>
			</div>
			<div class="modal-footer">
		  	            <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Close
          </button>
			</div>
		  </div>
		</div>
	</div><?php } ?>
   <?php
		echo '<br /><br />';
		$errors = array( 1 => "Invalid username or password. Please try again.",
						 2 => "Please login to access this area.",
						 3 => "Please enter gallery password.",
						 4 => "You must be logged in as an Admin for this!",
						 5 => "Your account is inactive. <a href='#contact' class='text-danger'>Please contact me.</a>",
						 6 => "That user name is already taken. Sign up again.",
						 7 => "Your passwords did not match. Sign up again.");

		if ( isset( $_GET[ 'err' ] ) ) {
			$error_id = $_GET[ 'err' ];
			if ( $error_id >= 1 ) {
				echo '<div class="alert alert-danger text-center"><strong>Warning! </strong>' . $errors[ $error_id ] . '</div>';
			}
		}
	?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <a href="photography.php">
        <img src="img/wood_ducks.jpg" alt="Ducks">
        <div class="carousel-caption">
          <h3>Photography</h3>
          <p>Visit the photography gallery.</p>
        </div>
	  </a>      
      </div>
      
		<div class="item">
		<a href="paintings.php">
			<img src="img/paintings.jpg" alt="Paintings">
			<div class="carousel-caption">
				<h3>Paintings</h3>
				<p>Visit the fine art gallery.</p>
			</div>
		</a>
		</div>

      <div class="item">
       <a href="pottery.php">
        <img src="img/pottery.jpg" alt="Pottery">
        <div class="carousel-caption">
          <h3>Pottery</h3>
          <p>Visit the pottery and sculpture gallery.</p>
        </div>
	   </a>    
      </div>
      
      <div class="item">
       <a href="portraits.php">
        <img src="img/portraits.jpg" alt="Portraits">
        <div class="carousel-caption">
          <h3>Portraiture</h3>
          <p>Visit the portrait gallery.</p>
        </div>
	   </a>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Home Section) -->
<div id="homePage" class="container-fluid text-justify">
  <h2> </h2>
  <br /><br />
  <h3 class="text-center">Jesse Charles Valley</h3>
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
  <div class="row">
  <div class="col-lg-1"></div>
  <div class="col-lg-6">
  <img src="img/me.jpg" class="img-responsive img-thumbnail" alt="Hello, me!"><div class="caption"><p>"Hello, me!" Self-Portrait &copy; 2016.</p></div>
	  <br /></div>
	<div class="col-lg-4">
	<p class="text-center"><em>Welcome to my Portfolio Site!</em></p>
	<p>I am a Programmer, Photographer, Painter, Poet, and Potter.</p>
  <p>I have always been involved in art and creativity. As a child, I first discovered the magic of photography. In high school I started writing poetry. I studied painting and ceramics in college, getting a BA in Studio Art from Winona State University. I have shown my ceramics, sculpture and photography in different exhibitions, and my photography was used in a permanent display at the Science Museum of Minnesota.</p>
  <p>With my wife Lisa, we started <a href="http://jessevalley.com" target="_blank" class="text-info">Jesse Valley Photography</a>. After having our daughter Violette, I went back to school to get my AAS degree in Web Programming &amp; Database Development at Dunwoody College of Technology. You can also read my personal blog <a href="http://jessevalley.com/blog" target="_blank" class="text-info">here</a>.</p>
  <p>Please check out the portfolios below, and drop me a line to say hello!</p><br /></div>
  <div class="col-lg-1"></div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="bg-1">
  <div class="container-fluid">
   <h2> </h2>
  <br /><br />
    <h3 class="text-center">Portfolios</h3>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="cont">
        <a href="photography.php"><img src="img/aspen_thumb.jpg" class="img-responsive img-thumbnail image" alt="Autumn Aspen"><div class="middle"><div class="text">Photography</div></div></a></div>
        <p>Fine Art Photography</p>
	  <br />
      </div>
      <div class="col-sm-4">
        <div class="cont">
        <a href="paintings.php"><img src="img/paint.jpg" class="img-responsive img-thumbnail image" alt="After Stella"><div class="middle"><div class="text">Paintings</div></div></a></div>
		  <p>Painting &amp; Mixed Media</p>
	  <br />
      </div>
      <div class="col-sm-4">
        <div class="cont">
        <a href="pottery.php"><img src="img/bowl.jpg" class="img-responsive img-thumbnail image" alt="Cross-hatched Bowl"><div class="middle"><div class="text">Pottery</div></div></a></div>
        <p>Pottery &amp; Sculpture</p>
	  <br />
      </div>
    </div>
        <div class="row text-center">
      <div class="col-sm-4">
        <div class="cont">
			<a href="programming.php"><img src="img/html.png" class="img-responsive img-thumbnail image" alt="HTML">
			<div class="middle"><div class="text">Programming</div></div></a>
        </div>
        <p>Web Programming</p>
	  <br />
      </div>
      <div class="col-sm-4">
        <div class="cont">
			<a href="poetry.php"><img src="img/poem.png" class="img-responsive img-thumbnail image" alt="Haiku">
			<div class="middle"><div class="text">Poetry</div></div></a>
        </div>
        <p>Poetry</p>
	  <br />
      </div>
      <div class="col-sm-4">
        <div class="cont">
			<a href="portraits.php"><img src="img/violette.jpg" class="img-responsive img-thumbnail image" alt="Violette">
			<div class="middle"><div class="text">Portraiture</div></div></a>
        </div>
        <p>Portrait Photography</p>
	  <br />
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
 <h2> </h2>
  <br /><br />
	<h3 class="text-center">Contact</h3>

  <div class="row">
    <div class="col-lg-2 col-md-1"></div>
    <div class="col-lg-3 col-md-3 col-sm-4 text-center">
		<p><em>Get in touch with me.</em></p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Minneapolis, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> Phone: (612) 382-2867</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: hi@jessecvalley.com</p>
	<section id="socialmedia">
		<nav>
			<ul style="margin-left: -40px;">
				<li class="social"><a href="http://twitter.com/jessevalley" target="_blank"><i class="fa fa-twitter-square" style="font-size: 35px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="http://facebook.com/jessevalleyphotography" target="_blank"><i class="fa fa-facebook-square" style="font-size: 35px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="http://instagram.com/jessevalley" target="_blank"><i class="fa fa-instagram" style="font-size: 35px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="https://plus.google.com/u/0/+JesseValley" target="_blank"><i class="fa fa-google-plus-square" style="font-size: 35px;"></i></a></li>&nbsp; &nbsp;
				<li class="social"><a href="http://www.linkedin.com/in/jessevalley" target="_blank"><i class="fa fa-linkedin-square" style="font-size: 35px;"></i></a></li>
			</ul>
		</nav>
	</section>
    </div>
    <div class="col-lg-5 col-md-8 col-sm-8">
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
      <div class="col-lg-2"></div>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="submit">Send</button>
        </div>
      </div>
	  </form>
    </div>
  </div>
</div><h2></h2>
<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(44.952714, -93.364189);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGCPBIAHu8jOwj2EdxAGxMpTGvV8Y6_WY&callback=myMap"></script>
  <div id="up">
  <a href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up" style="color:black;"></span>
  </a>
	</div>
<!-- Footer -->
<footer class="container-fluid text-center">
		<p>&copy;
			<?php
			$copyYear = 1991;
			$curYear = date( 'Y' );
			echo $copyYear . ( ( $copyYear != $curYear ) ? '&mdash;' . $curYear : '' );
			?> by Jesse Charles Valley. All Rights Reserved.</p>
	</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, div#up a[href='#myPage']").on('click', function(event) {

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
