<!DOCTYPE html>
<html>
<head>
<title>Aruda Glass Solutions</title>
<meta name="keywords"
	content="Aruda Glass Solutions, Aruda Glass Solutions" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script src="js/jquery-1.11.1.js"></script>
<script src="js/init.js"></script>
<!-- bxSlider Javascript file -->
<script src="slider/jquery.bxslider.min.js"></script>

<link href="css/style.css" rel="stylesheet" />
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
  zoom:5,
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
<body>
	<div id='main-content'>
		<!-- Nav -->
	<?php
	include "header.php";
	?>

		<div id='content'>
			<div id='left-contact'>
				<h4>Postal Address</h4>
				<p>Aruda Glass Solutions</p>
				<p>#9/2, Near Lakshmi Minerals</p>
				<p>Bandappa Garden</p>
				<p>Gokula Post</p>
				<p>Bangalore 560 054</p>
				<br />
				<div id="googleMap" style="width:300px;height:200px;margin-bottom:15px"></div>	
			</div>
			<div id='right-contact'>
				<h4>E-mail</h4>
				<p style='margin-bottom: 15px'>info.aruda@gmail.com</p>
				<h4>Karthik Prakash</h4>
				<p style='margin-bottom: 15px'>Mobile: +91 88808 80893</p>
				<h4>Prakash Venkatappa</h4>
				<p style='margin-bottom: 15px'>Mobile: +91 93436 80893</p>
				<h4 style='margin-top: 15px'>Contact Form</h4>
				<form id='contact-form'>
				<div id='form-div'>
					<label>Full Name*</label> <input type="text" id='name' />
				</div>
				<div id='form-div'>
					<label>Email</label> <input type="text" id='email' />
				</div>
				<div id='form-div'>
					<label>Mobile Number*</label> <input type="text" id='mob-num' />
				</div>
				<div id='form-div'>
					<label>Message*</label>
					<textarea id='message'></textarea>
				</div>
				<div style='margin-left: 120px;'>
					<input style='width:120px' type="submit" id='submit' name='submit' value='Submit'/>
				</div>
				</form>
			</div>
		</div>
		<?php include "footer.html"; ?>
	</div>
</body>
</html>
