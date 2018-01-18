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
		<title>Example page - Contact</title>
	</head>
<body>
	<header>
		<div class="hero-image" style="height: 200px;"></div>
		<nav>
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="news.html">News</a></li>
			  <li><a href="contact.html">Contact</a></li>
			  <li><a href="about-us.html">About</a></li>
			  <li><a href="register.html">Register</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Registration Form</h1>
	<div id="register">	
			<form action="" id="registration_form" name="registration_form" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			
			<label for="fname">First Name: *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..." required>

			<label for="lname">Last Name: *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..." required>
				
			<label for="email">Your E-mail: *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail..." required>
			
			<label for="username">Username:* <small>(Username must contain atleast 5 and maximum 10 characters)</small></label>
			<input type="text" id="username" name="username" pattern=".{5,10}" placeholder="Username..." required><br>
			
									
			<label for="password">Password:* <small>(Password must contain atleast 4 characters)</small></label>
			<input type="password" id="password" name="password" placeholder="Password..." pattern=".{4,}" required>

			<label for="country">Country:</label>
			<select name="country" id="country">
				<option value="">Please choose...</option>';
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>

			<input type="submit" value="Submit">
		</form>
	</div>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2017 Ivan Svrzić</p>
	</footer>
	<!-- Google Analytics code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98455037-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- End Google Analytics code -->
</body>
</html>
