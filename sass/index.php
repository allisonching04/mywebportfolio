<?php
	$this_page = "home";
	$page_title = "Home";
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head.php"; ?>
</head>
<body>

	<div class="page_container">
		
		
		<?php include "includes/nav.php"; ?>

		<div class="primary_context">

			<div class="homepage_part01_grid homepage_moblie_grid_sm">
				<div class="homepage_bg_intro typing_name">
					<h1 class="bg_first_header1 typing_header typing_header1">Hello&excl;<br>I AM<br>CHING<br>CHING.</h1>
				</div>
				<div class="homepage_bg_logo">
					<img src="img/homepage_logo.png" alt="myName">
				</div>

				<div class="shomepage_intro_svg" style="text-align: center;">
					<a class="homepage_intro_scroll_part02" href="#homepage_part02">
						<svg width="30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.3 14.2">
						  <g fill="none" stroke-miterlimit="2">
						    <path d="M4.7.7c2.2 0 4 1.8 4 4v4.8c0 2.2-1.8 4-4 4s-4-1.8-4-4V4.7c0-2.2 1.8-4 4-4z" stroke="#a9a9a9"/>
						    <path class="red-scroll" d="M4.7 2.5v2.3" stroke="#de1b1b" stroke-linecap="round"/>
						  </g>
						</svg>
					</a>
					
				</div>
			</div>
						
			<div id="homepage_part02" class="homepage_part02_grid homepage_moblie_grid_sm">
				<div class="empty_border aboutme_empty_box01"></div>
				<div class="empty_border aboutme_empty_bg_box"></div>
				<div class="homepage_aboutme_intro">
					<div class="aboutme_intro_text">
						<h2 class="bg_second_header homepage_aboutme_intro_flex">I am a</h2>
						<h2 class="bg_second_header homepage_aboutme_intro_flex">Graphic</h2>
						<h2 class="bg_second_header homepage_aboutme_intro_flex">&#38;</h2>
						<h2 class="bg_second_header hhomepage_aboutme_intro_flex">Web Designer</h2>
					</div>
					
<!-- 					<div class="homepage_aboutme_button round_btn">
						<a class="round_btn_link" href="about.php">About Me</a>
					</div> -->
					<a class="homepage_aboutme_button round_btn_link round_btn" href="about.php">About Me</a>
				</div>
				

				<div class="empty_border aboutme_empty_box02"></div>
			</div>

			<div class="homepage_part03_grid">
				<div class="homepage_work_intro_grid homepage_moblie_grid_sm">
					<div class="empty_border intro_grid_empty_box01"></div>
					<div class="empty_border intro_grid_empty_box02"></div>
					<div class="homepage_work_part1">
						<h2 class="bg_second_header">I Code Websites and Templates.</h2>
						<a class="round_btn_link round_btn" href="web.php">Website</a>
					</div>
					<div class="homepage_work_part2 border_area">
						<h2 class="bg_second_header">I Make Graphic<br>Design<br>Too</h2>
						<a class="round_btn_link round_btn" href="graphic.php">Graphic</a>
					</div>
<!-- 					<h2 class="bg_second_header homepage_work_part1">I Code and Template Websites</h2>
					<h2 class="bg_second_header homepage_work_part2 border_area">I Make Graphic<br>Design<br>Too</h2> -->
					<div class="empty_border intro_grid_empty_box03"></div>
				</div>



				<div class="main_gallery_grid homepage_moblie_grid_sm">
					<div class="empty_border gallery_item" style="display: none">
						<div class="empty_border gallery_item_showcase1 showcase_item"></div>
						<div class="gallery_item_showcase2 showcase_item"></div>
						<div class="gallery_item_showcase3 showcase_item"></div>
						<div class="gallery_item_text1 showcase_item empty_border"></div>
						<div class="gallery_item_showcase4 showcase_item"></div>
						<div class="gallery_item_showcase5 showcase_item"></div>
						<div class="gallery_item_text2 showcase_item empty_border">I &#9829; <br>Love<br>Design</div>
						<div class="gallery_item_showcase6 showcase_item"></div>
					</div>
				</div>
			</div>
				
			<div class="homepage_part04_grid homepage_moblie_grid_sm">
				<div class="empty_border contact_empty_box01"></div>
				<div class="empty_border contact_empty_box02"></div>

				<div class="empty_border lg_contact_empty_box"></div>

				<h2 class="contactme_header">Contact Me</h2>

				<div class="contact_inform">
					<h3 class="bg_body_header">
						<a href="mailto:allisonchinglee@gmail.com" target="_top">contactme@chingchinglee.com</a>
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
							<button type="submit" name="submit" class="btn round_btn form-submit-btn">Say Hi!</button>

							<p id="form-sent" class="form-action sent-hide">Sent!</p>
						</form>
					</div>

				</div>
				

				<div class="empty_border contact_empty_box03"></div>
				<div class="empty_border contact_empty_box04"></div>
			</div>
				
		</div>

		<?php include "includes/footer.php"; ?>
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script type="text/javascript" src="js/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
	<script type="text/javascript" src=js/scrollmagic/minified/plugins/animation.gsap.min.js></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>