<?php
session_start();
if(!isset($_SESSION['signup'])){
	$_SESSION['signup']=0;
	unset($_SESSION['signup']);
	header('Location: index.php?err=1');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create User Account</title>
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-left" href="index.php"><img src="img/sig.png" class="img-responsive" style="height: 48px;" alt="Jesse Valley's Autograph" title="Home"></a>
      <p class="navbar-text" id="navtext">The Creative Works of Jesse Valley</p>
	  </div>
	  <ul class="nav navbar-nav navbar-right">
      <li><p class="navbar-text"><?php echo $_SESSION['uname']; ?> <span class="glyphicon glyphicon-user"></span></p></li>
    </ul>
  </div>
	</nav>
<br /><br /><br />
<div class="container-fluid">
	<h2 class="text-center">Success!</h2>
	<p class="text-center">Remember your user name: <strong><?php echo $_SESSION['uname']; ?></strong></p>
	<h2 class="text-center">Create Your Profile</h2>
 	<p class="text-center text-warning">** If you do not complete your profile, you will not be registered.</p>
  	<div class="row">
  	 <div class="col-md-1"> </div>
  	 <div class="col-md-9">
	  <form class="form-horizontal" action="createAccount.php" method="post">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="fname">First Name:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="mname">Middle Name:*</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" id="mname" placeholder="Optional: enter your middle name" name="mname">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="lname">Last Name:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="bday">Birthday:</label>
		  <div class="col-sm-10">
			<input type="date" class="form-control" id="bday" name="bday" required>
		  </div>
		</div>
		<div class="form-group">
      		<label class="control-label col-sm-2" for="email">Email:</label>
			  <div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
			  </div>
    	</div>
    	<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
		  	  <input type="hidden" value="0" name="news">
			  <label><input type="checkbox" value="1" checked name="news"> Sign up for the Newsletter?</label>
			</div>
		  </div>
		</div>
    	<div class="form-group">
		  <label class="control-label col-sm-2" for="street1">Address:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" id="street1" placeholder="Enter your street address" name="street1" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="street2">Address:*</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" id="street2" placeholder="Optional: suite or apartment number" name="street2">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="city">City:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
		  </div>
		</div>
		<div class="form-group">
		  <label for="state" class="col-sm-2 control-label">State:</label>
			<div class="col-sm-10">
				<select class="form-control" id="state" name="state" required>
					<option value="">Choose</option>
					<option value="AK">Alaska</option>
					<option value="AL">Alabama</option>
					<option value="AR">Arkansas</option>
					<option value="AZ">Arizona</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DC">District of Columbia</option>
					<option value="DE">Delaware</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="IA">Iowa</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="MA">Massachusetts</option>
					<option value="MD">Maryland</option>
					<option value="ME">Maine</option>
					<option value="MI">Michigan</option>
					<option selected value="MN">Minnesota</option>
					<option value="MO">Missouri</option>
					<option value="MS">Mississippi</option>
					<option value="MT">Montana</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="NE">Nebraska</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NV">Nevada</option>
					<option value="NY">New York</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="PR">Puerto Rico</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VA">Virginia</option>
					<option value="VT">Vermont</option>
					<option value="WA">Washington</option>
					<option value="WI">Wisconsin</option>
					<option value="WV">West Virginia</option>
					<option value="WY">Wyoming</option>
				</select>
			</div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="zip">Zip Code:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" pattern="^\d{5}$" id="zip" placeholder="Enter your 5-digit zip code" name="zip" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="phone_home">Home Phone:*</label>
		  <div class="col-sm-10">
			<input type="tel" class="form-control" id="phone_home" placeholder="Optional: enter your home phone number (numbers only)" pattern="^\d{10}$" name="phone_home">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="phone_cell">Cell Phone:*</label>
		  <div class="col-sm-10">
			<input type="tel" class="form-control" id="phone_cell" placeholder="Optional: enter your cell phone number (numbers only)" pattern="^\d{10}$" name="phone_cell">
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
		  	  <input type="hidden" value="0" name="texts">
			  <label><input type="checkbox" value="1" checked name="texts"> Sign up to receive Text Messages?</label>
			</div>
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2">Are you a client?:</label>
		  <div class="col-sm-10">
			<label class="radio-inline">
      			<input type="radio" name="client" value="1">Yes
    		</label>
    		<label class="radio-inline">
      			<input type="radio" name="client" value="0">Not yet
    		</label>
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="anniv">Wedding Anniversary:*</label>
		  <div class="col-sm-10">
			<input type="date" class="form-control" id="anniv" name="anniv">
			<span class="help-block">* Optional</span>
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" name="submit" class="btn btn-block btn-default">Submit</button>
		  </div>
		</div>
	  </form>
	  </div>
	  <div class="col-md-2"> </div>
	</div>
</div>
<!-- Footer -->
<footer class="container-fluid text-center">
	<section id="socialmedia">
		<h6 style="display:none;">Connect with me on Social Media</h6>
		<nav id="social">
			<ul style="margin-left: -40px;">
				<li class="social"><a href="http://twitter.com/jessevalley" target="_blank"><i class="fa fa-twitter-square" style="font-size: 40px;"></i>&nbsp; &nbsp;</a></li>
				<li class="social"><a href="http://facebook.com/jessevalleyphotography" target="_blank"><i class="fa fa-facebook-square" style="font-size: 40px;"></i>&nbsp; &nbsp;</a></li>
				<li class="social"><a href="http://instagram.com/jessevalley" target="_blank"><i class="fa fa-instagram" style="font-size: 40px;"></i>&nbsp; &nbsp;</a></li>
				<li class="social"><a href="https://plus.google.com/u/0/+JesseValley" target="_blank"><i class="fa fa-google-plus-square" style="font-size: 40px;"></i>&nbsp; &nbsp;</a></li>
				<li class="social"><a href="http://www.linkedin.com/in/jessevalley" target="_blank"><i class="fa fa-linkedin-square" style="font-size: 40px;"></i>&nbsp; &nbsp;</a></li>
			</ul>
		</nav>
	</section>
		<p>&copy;
			<?php
			$copyYear = 1991;
			$curYear = date( 'Y' );
			echo $copyYear . ( ( $copyYear != $curYear ) ? '&mdash;' . $curYear : '' );
			?> by Jesse Charles Valley. All Rights Reserved.<br />
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