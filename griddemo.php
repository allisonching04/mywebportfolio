<?php
	$this_page = "web";
	$page_title = "CSS GRID DEMO";
	$portfolio_title = "The Study of<br>CSS Grid";
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
			<img class="portfolio_image_bg portfolio_image_fox" src="img/webgallery/cssdemo/gridlaptop.png">
			<div class="portfolio_paragraph body_paragraph moblie_body_paragraph">
				<p class="body_text portfolio_text">
					<span class="bold_body_text">This a demo and study</span> of CSS Grid from Ching Ching Lee, a third-year New Media student from The University of Lethbridge. I am very interested in web design, I used to apply and follow Flexbox and float methods to write websites but those methods are somehow thicky to create a layout that will fit content perfectly in different browsers. Not too far later, CSS Grid is released, and then is supported by most of the mainstream browsers since March 2017, this new system solves a lot of website layout problems and also helps me to develop websites in a more structured way. So, I believe it is important to learn the related system to catch up the upcoming trend.
				</p>
				<h3 class="portfolio_section_title">Skills</h3>
				<ul class="body_text portfolio_text portfolio_skill_list">
					<li class="skill_list_detail">CSS GRID</li>
					<li class="skill_list_detail">Flexbox</li>
					<li class="skill_list_detail">HTML</li>
					<li class="skill_list_detail">Adobe Illustrator CC</li>
					<li class="skill_list_detail">Adobe Photoshop CC</li>
					<li class="skill_list_detail">UI &amp; UX</li>
				</ul>
			</div>
			<a class="body_text portfolio_text portfolio_link" href="http://chingchingleegridstudy.atwebpages.com">Check it Online</a>
			
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
