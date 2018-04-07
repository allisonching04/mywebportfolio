<?php
	$this_page = "web";
	$page_title = "Kimono";
	$portfolio_title = "The History of<br>Kimono";
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
		<div class="innerpage_web_detail">
			<?php include "includes/portfolio.php"; ?>
			<img class="portfolio_image_bg portfolio_image_fox" src="img/webgallery/kimono/kimono_laptop.png">
			<div class="portfolio_paragraph body_paragraph moblie_body_paragraph">
				<p class="body_text portfolio_text portfolio_center_text">
					<span class="bold_body_text">The History of Kimono</span> is a static website using basic HTML and CSS code. It aims to promote Kimono - Japanese traditional dressing to Western people. Combining two different typographies and languages into one website is a challenge for me since it is hard to align the font and find the perfect font family which would be supported by all browser. Therefore, I exported the Chinese characters to a png image. I hope you enjoy this litter state website and learn more about the traditional Japanese culture.
				</p>
				<h3 class="portfolio_section_title">Skills</h3>
				<ul class="body_text portfolio_text portfolio_skill_list">
					<li class="skill_list_detail">Adobe XD CC</li>
					<li class="skill_list_detail">Adobe Illustrator CC</li>
					<li class="skill_list_detail">Adobe Photoshop CC</li>
					<li class="skill_list_detail">HTML</li>
					<li class="skill_list_detail">UI &amp; UX</li>
					<li class="skill_list_detail">CSS</li>
					<li class="skill_list_detail">Prototypes</li>
				</ul>
			</div>
			<a class="body_text portfolio_text portfolio_link" href="http://chingchingleekimono.myartsonline.com">Go to this Website</a>
			
		</div>

		<div class="innerpage_context_empty_box01"></div>	
		<div class="innerpage_context_empty_box02"></div>	
		<div class="homepage_part04_grid contact_me_grid contact_me_show_grid">
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
