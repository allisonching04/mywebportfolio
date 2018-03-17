<?php
	$this_page == 'web';
	$page_title = "Cat Pro";
	$portfolio_title = "App Development :<br>Cat Pro";
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
			<img class="portfolio_image_bg portfolio_image_fox" src="img/webgallery/catpro/moblie_three_catpro.png">
			<div class="portfolio_paragraph body_paragraph moblie_body_paragraph">
				<p class="body_text portfolio_text">
					Lorem ipsum dolor sit amet, mauris gravida vitae, integer eget nec auctor nulla, laoreet orci ligula nulla aliquam ac justo, integer massa. Id euismod proin nulla posuere magna, imperdiet nec. Laoreet nisl diam praesentium. Id nibh, suscipit hac nec, ipsum omnis mauris arcu consectetuer sed adipiscing, leo lorem ultrices tristique penatibus. Ut pellentesque nonummy eros, velit sit risus sapien, eu nunc urna nunc. Nisl facilisis et lectus. Accumsan vel.
				</p>
				<h3 class="portfolio_section_title">Skills &colon;</h3>
				<ul class="body_text portfolio_text portfolio_skill_list">
					<li class="skill_list_detail">Adobe XD CC</li>
					<li class="skill_list_detail">Adobe Illustrator CC</li>
					<li class="skill_list_detail">Adobe Photoshop CC</li>
					<li class="skill_list_detail">UI &amp; UX</li>
					<li class="skill_list_detail">Prototypes</li>
					<li class="skill_list_detail">App Design</li>
				</ul>
			</div>

			<a class="body_text portfolio_text portfolio_link" href="https://projects.invisionapp.com/share/5SB553J32#/screens">Check it On InVision</a>
			
		</div>

		<div class="innerpage_context_empty_box01"></div>	
		<div class="innerpage_context_empty_box02"></div>	
		<div class="homepage_part04_grid contact_me_grid">
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
						<button type="submit" name="submit" class="btn round_btn">Say Hi!</button>
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
