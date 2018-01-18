<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="ivan_svrzic@hotmail.com">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Samsung Galaxy S8</title>
	</head>
<body>
	<div class="header">
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success" >
			<h3>
			<?php 
				echo $_SESSION['success']; 
				unset($_SESSION['success']);
			?>
			</h3>
		</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		<?php endif ?>
	</div>
	<header>
		<div class="hero-image"></div>
		<nav>
			<ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="news.php">News</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about_us.php">About</a></li>
  			  <li><a href="register.php">Register</a></li>
			  <li><a href="index.php?logout='1'">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Samsung Galaxy S8</h1>
		<figure>
			<img src="s8_figure.png" alt="HTML5" title="HTML5">
			<figcaption>Samsung Galaxy S8 Android smartphone. Announced Mar 2017. Features 5.8″ Super AMOLED display, Exynos 8895 Octa chipset, 12 MP primary camera, ...</figcaption>
		</figure>
		<p>The revolutionary design of the Galaxy S8 and S8+ begins from the inside out.</p>
		<p>We rethought every part of the phone's layout to break through the confines of the smartphone screen.</p>
		<p>So all you see is pure content and virtually no bezel.</p>
		<p>It's the biggest, most immersive screen on a Galaxy smartphone of this size.</p>
		<p>And it's easy to hold in one hand.</p>
		<p>Source: <a href="http://www.samsung.com/global/galaxy/galaxy-s8/" target="_blank">Samsung</a></p>
		<p>Social media:<br>
			<a href="https://www.facebook.com/SamsungMobile/" target="_blank"><img src="f_icon.svg" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
			<a href="https://www.instagram.com/samsungmobile/?hl=en" target=_blank"><img src="instagram_icon.svg" alt="Instagram" title="Instagram" style="width:24px; margin-top:0.4em"></a>
			<a href="https://twitter.com/SamsungMobile" target="_blank"><img src="twitter_icon.svg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			<a href="https://plus.google.com/+SamsungMobile" target="_blank"><img src="google+_icon.svg" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
		</p>
	</main>
	<footer>
		<p>Copyright &copy; 2017 Ivan Svrzić</p>
	</footer>
</body>
</html>
