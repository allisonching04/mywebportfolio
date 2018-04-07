<?php
	$this_page = "graphic";
	$page_title = "Web Design";
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head.php"; ?>
</head>
<body>

	<div class="page_container">
		<?php include "includes/nav.php"; ?>

		<div class="innerpage_context innerpage_gallery">
			<div class="innerpage_part1 innerpage_part1_web">
				<h2 class="innerpage_second_title huge-h2">GRAPHIC </h2>
				<h2 class="innerpage_second_title huge-h2">DESIGN</h2>
				<div class="body_gallery web_body_gallery">
					
					<a class="webPage graphic_item_01" href="glasses">
						<div class="web_gallery_item gallery_text">
							<div class="showcase_item  graphic_item_images01 moblie_showcase"></div>
							<p class="item_text item_text_right">Glasses</p>
						</div>
					</a>

					<a class="webPage fox_webPage graphic_item_02" href="foodicon.php">
						<div class="web_gallery_item gallery_text">
							<div class="showcase_item  graphic_item_images02 moblie_showcase"></div>
							<p class="item_text item_text_left">Food Icon</p>
						</div>
					</a>
					
					<a class="webPage fox_webPage graphic_item_03" href="flat.php">
						<div class="web_gallery_item gallery_text">
							<div class="showcase_item  graphic_item_images03 moblie_showcase"></div>
							<p class="item_text item_text_right">Flat Design</p>
						</div>
					</a>

					<a class="webPage fox_webPage graphic_item_04" href="bobby.php">
						<div class="web_gallery_item gallery_text">
							<div class="showcase_item  graphic_item_images04 moblie_showcase"></div>
							<p class="item_text item_text_right">Cat Illurstation</p>
						</div>
					</a>
					

				</div>
			</div>

			<div class="innerpage_context_empty_box01"></div>	
			<div class="innerpage_context_empty_box02"></div>	
			<div class="homepage_part04_grid contact_me_grid">
		<h2 class="contactme_header">SAY HI !</h2>
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
				</div></div></div>
			<div class="innerpage_context_empty_box03"></div>	
			<div class="innerpage_context_empty_box04"></div>	
				
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
