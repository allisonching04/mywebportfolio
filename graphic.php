<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ching Ching | Graphic Design</title>
	<link rel="shortcut icon" type="image/x-icon" href="#"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<div class="page_container">
		
		
		<nav class="primary_nav main_nav_border">
			<div class="primary_nav_flex">
				<div class="primary_nav_logo" style="text-align: center;">
					<a class="primary_nav_logo_link" href="index.php"><img class="sitelogo" src="img/sitelogo.png" alt="siteLogo"></a>
				</div>
				<ul class="primary_nav_ul primary_nav_effect">
					<li class="primary_nav_item"><a class="primary_nav_item_link" href="index.php">Home</a></li>
					<li class="primary_nav_item"><a class="primary_nav_item_link" href="web.php">Website</a></li>
					<li class="primary_nav_item"><a class="primary_nav_item_link" href="graphic.php">Graphic</a></li>
					<li class="primary_nav_item"><a class="primary_nav_item_link" href="about.php">About</a></li>
				</ul>
			</div>
			
		</nav>

		<div class="innerpage_context">
			<div class="innerpage_part1">
				
			</div>

			<div class="empty_border innerpage_context_empty_box01"></div>	
			<div class="empty_border innerpage_context_empty_box02"></div>	
			
			<div class="homepage_part04_grid contact_me_grid empty_border">

				<h2 class="contactme_header">Contact Me</h2>

				<div class="contact_inform">
					<h3 class="bg_body_header">
						<a href="mailto:allisonchinglee@gmail.com" target="_top">allisonchinglee@gmail.come</a>
					</h3>
					<div class="contactme_social_icon social_icon_flex">
						<div class="social_icon ig"><a class="social_icons" href="https://www.instagram.com/ching2lcc/?hl=en"><img class="instagram_icon" src="img/instagram_icon.png" alt="myIG"></a></div>

						<div class="social_icon twitter"><a class="social_icons" href="https://twitter.com/chingchinglcc"><img class="twitter_icon" src="img/twitter_icon.png" alt="myTwitter"></a></div>
					</div>

					<div class="contact-form-container">
						<form action="includes/contactform.php" method="post" class="contact-form">
							<div class="field-container">
						    <input type="text" class="input" name="name" placeholder="Name" />
						  	</div>
						  	<div class="field-container">
						    	<input type="text" class="input" name="mail" placeholder="Email" />
						  	</div>
						  <div class="field-container">
						    <textarea class="input text-area" name="message" placeholder="Your Message"></textarea>
						  </div>
							<button type="submit" name="submit" class="btn round_btn">Say Hi!</button>
						</form>
					</div>
					
				</div>
			</div>
			
			<div class="empty_border innerpage_context_empty_box03"></div>	
			<div class="empty_border innerpage_context_empty_box04"></div>	
				
		</div>

		<footer>
			<div class="footer_logo"><img class="twitter_icon" src="img/footer_white_logo.png" alt="siteLogo"></div>
			<p class="footer_copyright">&copy; Ching Ching Lee 2018</p>
		</footer>
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script type="text/javascript" src="js/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
	<script type="text/javascript" src=js/scrollmagic/minified/plugins/animation.gsap.min.js></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
