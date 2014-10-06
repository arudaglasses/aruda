<!DOCTYPE html>
<html>
<head>
<title>Aruda Glass Solutions</title>
<meta name="keywords"
	content="Aruda Glass Solutions, Aruda Glass Solutions" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/header.css" rel="stylesheet" />
<link href="css/contact.css" rel="stylesheet" />
<link href="css/body.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
<script src="slider/jquery.bxslider.js"></script>
<script src="js/init.js"></script>

<!-- bxSlider CSS file -->
<link href="slider/jquery.bxslider.css" rel="stylesheet" />

<script
	src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(13.0424373,77.5511965);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>
<body class='body'>
<?php
include "header.php";
?>
	<div id='maincontent'>
		<!-- Nav -->
		<div id="content">

			<div id='right-contact'>
				<h4>Office Address</h4>
				<p>Aruda Glass Solutions</p>
				<p>#9/2, Near Lakshmi Minerals</p>
				<p>Bandappa Garden</p>
				<p>Gokula Post</p>
				<p>Bangalore 560 054</p>
				<br />
				<div id="googleMap"
					style="width: 320px; height: 300px; margin-bottom: 15px"></div>
			</div>
			<div id='left-contact'>
				<h4>E-mail</h4>
				<p style='margin-bottom: 15px'>info.aruda@gmail.com</p>
				<h4>Karthik Prakash</h4>
				<p style='margin-bottom: 15px'>Mobile: +91 88808 80893</p>
				<h4>Prakash Venkatappa</h4>
				<p style='margin-bottom: 15px'>Mobile: +91 93436 80893</p>

				<form id='contact-form' action='contact-submit.php' method='post'>
					<h4 style='margin-top: 25px'>Please fill the below details if you
						have any queries</h4>
					<div class='form-div'>
						<label>Full Name*</label> <input type="text" id='name' name='name' />
						<div id='name-error'>
							<img title='Please enter a valid value' src='images/error.jpg'>
						</div>
					</div>
					<div class='form-div'>
						<label>Email(Optional)</label> <input type="text" id='email'
							name='email' />
						<div id='email-error'>
							<img title='Please enter a valid value' src='images/error.jpg'>
						</div>
					</div>
					<div class='form-div'>
						<label>Mobile Number*</label> <input maxlength='10' type="text"
							id='mob-num' name='mob-num' />
						<div id='mob-error'>
							<img title='Please enter a valid value' src='images/error.jpg'>
						</div>
					</div>
					<div class='form-div'>
						<label>Services(Optional)</label> <select name='services'>
							<option value="select" default>Select</option>
							<option value="Windows/Sliding window cases">Windows/Sliding
								window cases</option>
							<option value="Casement windows">Casement windows</option>
							<option value="Partitions">Partitions</option>
							<option value="Doors">Doors</option>
							<option value="Safety Glasses">Safety Glasses</option>
							<option value="Shower Enclosures">Shower Enclosures</option>
							<option value="Curtain Wall/Glazing">Curtain Wall/Glazing</option>
							<option value="Others">Others</option>
						</select>
					</div>
					<div class='form-div'>
						<label>Query*</label>
						<textarea id='message' name='message'></textarea>
						<div id='msg-error'>
							<img title='Please enter a valid value' style='margin-top: 12px'
								src='images/error.jpg'>
						</div>
					</div>
					<div style='margin-left: 120px;'>
						<input style='width: 120px' type="submit" id='submit'
							name='submit' onclick='return validate()' value='Submit' />
					</div>
				</form>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php
		if (isset ( $_GET ['msg'] )) {
			echo '<script>alert("Your query has been successfully sent. One of our representatives will call you shortly");';
			echo "window.location.href = 'contact.php';</script>";
		}
		?>
	</div>
</body>
</html>

