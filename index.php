<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Trial :: Andre Septiawan</title>
	<meta name="description" content="The plugin will detect your mouse wheel and swipe gestures to determine which way the page should scroll." />
	<meta name="keywords" content="scroller, jquery one page scroll, onepagescroll, animated scrolling" />
	<meta name="author" content="Author for Tutorial-webdesign.com" />

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
	<link rel="stylesheet" type="text/css" href="css/onepage-scroll.css" />
	
	
	
	
	<link rel="stylesheet" href="css/style1.css">
</head>
<body>
	
	<header>
		<img src="img/R_mini.png" >
		<h1>REYNOIRO<small>.com</small></h1>
</header>
	<div class="main">
		
		<section class="page one">
		<h2> Area Kita </h2>

			<div class="page-container">
				<h2>Login</h2> <br>
              	<div>
				<form action="peta.php" id="lg-form" name="lg-form" method="post">
				<label for="username"></label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password"></label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="message"></div>
							
			</div>
		</section>
		
		<section class="page two">
			<div class="page-container">
				<h2>Web</h2>
             	<p>Apakah Itu WEB ?? </p>
				
			</div>
		</section>
		
		
	</div>


	<script type="text/javascript">
	$(".main").onepage_scroll({
		sectionContainer: "section",
	});
	</script>

</body>
</html>