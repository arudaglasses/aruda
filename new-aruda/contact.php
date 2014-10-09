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
			<div id='left-contact' style='text-align: center'>
				<p class='email-ph'>
					<img width="25px" height="35px" title='E-mail'
						src='images/email.jpg'> info.aruda@gmail.com
				</p>
				<p class='email-ph'>
					<img width="25px" height="35px" title='Phone/Mobile'
						src='images/Mobile2.png'> 88808 80893 (Karthik P)
				</p>
				<p class='email-ph'>
					<img width="25px" height="35px" title='Phone/Mobile'
						src='images/Mobile2.png'> 93436 80893 (Prakash V)
				</p>

				<h3 style='margin: 30px 0 5px 20px; text-align: left'>Where are we?</h3>
				<p class='address'>Aruda Glass Solutions</p>
				<p class='address'>#9/2, Near Lakshmi Minerals</p>
				<p class='address'>Bandappa Garden</p>
				<p class='address'>Gokula Post</p>
				<p class='address'>Bangalore 560 054</p>
				<br />
				<div id="googleMap"
					style="width: 320px; height: 225px; margin-bottom: 15px; text-align: center"></div>
			</div>
			<div id='right-contact'>
				<form id='contact-form' action='contact-submit.php' method='post'>
					<h4 style='margin: 10px 0 15px 0; text-align: left'>Please fill the
						below details if you have any queries</h4>
					<div class='form-div'>
						<label>Full Name*</label> <input type="text" id='name' name='name' />
						<div id='name-error'>
							<p style='color: red; text-align: center; margin: 0'>Please enter
								a valid value</p>
							<!-- <img title='Please enter a valid value' src='images/error.jpg'> -->
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
							<p style='color: red; text-align: center; margin: 0'>Please enter
								a valid value</p>
							<!-- <img title='Please enter a valid value' src='images/error.jpg'> -->
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
						<textarea rows='8' id='message' name='message'></textarea>
						<div id='msg-error'>
							<p style='color: red; text-align: center; margin: 0'>Please enter
								a valid value</p>
							<!-- <img title='Please enter a valid value' src='images/error.jpg'> -->
						</div>
					</div>

					<input style='width: 120px; margin-left: 95px' type="submit"
						id='submit' name='submit' onclick='return validate()'
						value='Submit' />


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

