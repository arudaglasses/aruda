<?php
$selected = "selected";
$fileName = basename($_SERVER['PHP_SELF']);
?>
<div id="header">
	<div id="logo">
		<img src="images/aruda_logo.jpg" alt="Company Logo" />
	</div>
	<div id="menu-bar">
		<nav>
		<ul id="menu-items">
			<img style='float: left' src='images/menu_divider.png' >
			<li><a class='<?php if($fileName == 'index.php') echo $selected; ?>'
				href="index.php">Home</a>
			</li>
			<img style='float: left;' src='images/menu_divider.png'>
			<li><a
				class='<?php if($fileName == 'services-glass.php' ||$fileName == 'services-alum.php' ) echo $selected; ?>'
				href="#">Services</a>
				<ul class='submenu'>
					<li><a href='services-alum.php'>Aluminium Fabrications</a></li>
					<li><a href='services-glass.php'>Glass Fabrications</a></li>
				</ul>
			</li>
			<img style='float: left;' src='images/menu_divider.png'>
			<li><a
				class='<?php if($fileName == 'gallery.php') echo $selected; ?>'
				href="gallery.php">Gallery</a>
			</li>
			<img style='float: left;' src='images/menu_divider.png'>
			<li><a
				class='<?php if($fileName == 'contact.php') echo $selected; ?>'
				href="contact.php">Contact Us</a>
			</li>
			<img style='float: left; height: 30px' src='images/menu_divider.png'>
		</ul>
		</nav>
	</div>

</div>
