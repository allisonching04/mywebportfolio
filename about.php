<?php
	$this_page = "about";
	$page_title = "About";
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head.php"; ?>
</head>
<body>

	<div class="page_container">
	<?php include "includes/nav.php"; ?>

		<div class="innerpage_context innerpage_about">
			<div class="innerpage_part1 innpage_part1_about">
				<div class="aboutName">
				</div>
				<!-- <h2 class="innerpage_second_title moblie_text_title chingType1">CHING</h2>
				<h2 class="innerpage_second_title moblie_text_title chingType2">CHING</h2>
				<h2 class="innerpage_second_title moblie_text_title chingType3">LEE</h2> -->

				<div class="profliePic" style="text-align: center;">
					<svg class="profilePic_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370 390" width="60%">
					  <path d="M103 132c7 17 6 35 12 52 7 16 20 25 34 34 13 9 28 26 46 19 8-3 14-10 20-16l23-24c8-7 13-14 13-26 0-11-4-23-5-34v-1c0 17 11 37-1 53l-19 19-21 20c-7 7-16 11-26 8-10-2-17-10-25-15-14-11-30-19-37-36-6-17-6-36-13-53h-1zm71-21a5 5 0 0 0 5 0l14-7a41 41 0 0 1 15-2c6 0 10 2 15 3v-1c-8-3-16-4-25-2a49 49 0 0 0-12 4c-3 1-8 6-12 5z"/>
					  <path d="M176 110c-3-1-1-3 1-5a77 77 0 0 1 8-4 128 128 0 0 1 14-6c6-2 11 0 16 3l8 7v-1c-3-1-4-4-6-6a24 24 0 0 0-7-4c-7-2-13 1-19 3l-12 6c-1 1-6 2-7 4-1 3 3 5 5 5l-1-2zm-61 11c10-2 20-5 30-3 3 1 6 2 8-1 1-2 0-5-1-7l-2-1c1 2 2 5 0 7-1 2-5 1-7 1a36 36 0 0 0-8-1l-21 4 1 1z"/>
					  <path d="M114 116c4-3 11-4 16-5 4-1 21-6 21 0h1c0-5-7-4-10-4a133 133 0 0 0-16 4c-4 1-9 2-12 5zm35 17a4 4 0 0 1 1 1 11 11 0 0 1-1 2v-3zm70-16a5 5 0 0 1-1 4 3 3 0 0 0-1-1 6 6 0 0 0 1-2 10 10 0 0 0 1-1z"/>
					  <path d="M219 117h-1a5 5 0 0 1 0 1 11 11 0 0 1-6 1h-2a64 64 0 0 0-6-2h3c4 1 8 2 11-1l1 1z"/>
					  <path d="M218 117h1a10 10 0 0 1-1 1 5 5 0 0 0 0-1zm0 4a10 10 0 0 1-6 0l-6-2a5 5 0 0 0-2-1l6 1a19 19 0 0 0 7 1v1h1z"/>
					  <path d="M218 121h-1v-1a3 3 0 0 1 1 1zm0-3a6 6 0 0 1-1 2 1 1 0 0 0-1 0 19 19 0 0 1-6-1h2a11 11 0 0 0 6-1zm-5-3v1c-5-1-11-3-17-1-5 2-7 7-9 11 1-4 4-10 8-12 6-3 13-1 18 1zm-1 6a14 14 0 0 1-7 5 6 6 0 0 0 1-1 18 18 0 0 0 6-4z"/>
					  <path d="M207 121a4 4 0 0 1-1 4l-2 1 3-3a5 5 0 0 0-2-5l1 1a8 8 0 0 1 1 2z"/>
					  <path d="M205 118a5 5 0 0 1 2 5l-3 3a25 25 0 0 1-5 1 11 11 0 0 1-4-2 5 5 0 0 1-1-4 12 12 0 0 1 3-2 4 4 0 0 0 3 3 2 2 0 0 0 3-4 1 1 0 0 0-1 0 14 14 0 0 1 3 0z"/>
					  <path d="M206 119l-1-1a4 4 0 0 0-2-1l1 1a5 5 0 0 1 2 1zm0 6a6 6 0 0 1-1 1 1 1 0 0 1-1 0l2-1z"/>
					  <path d="M205 126zm5-7l-6-1a2 2 0 0 0-1-1 11 11 0 0 0-1 0h-1a8 8 0 0 0-1 1l-1-1a7 7 0 0 1 5 0 64 64 0 0 1 6 2z"/>
					  <path d="M204 126a1 1 0 0 0 1 0c-5 2-10 2-15 2l9-1a25 25 0 0 0 5-1zm0-8l-1-1a2 2 0 0 1 1 1zm-1-1a4 4 0 0 1 2 1 14 14 0 0 0-3 0 2 2 0 0 0 0-1 11 11 0 0 1 1 0z"/>
					  <path d="M204 117a7 7 0 0 0-5 0l1 1a8 8 0 0 1 1-1 1 1 0 0 0 0 1 9 9 0 0 0-2 0 10 10 0 0 0-1 0h-1a2 2 0 0 0 0 1 12 12 0 0 0-3 2v-1a6 6 0 0 0 0 1l-5 6a2 2 0 0 1 0-1c2-4 4-8 9-9a12 12 0 0 1 6 0z"/>
					  <path d="M203 118a2 2 0 0 1-3 4 4 4 0 0 1-3-3 7 7 0 0 1 1-1l1 2a2 2 0 0 0 1 0 2 2 0 0 0 1-2 9 9 0 0 1 1 0 1 1 0 0 1 1 0z"/>
					  <path d="M202 117a2 2 0 0 1 0 1 9 9 0 0 0-1 0 1 1 0 0 1 0-1zm0 0h-1 1zm-3 10zm0 0c-3-1-6-3-5-6a5 5 0 0 0 1 4 11 11 0 0 0 4 2zm-1-9a7 7 0 0 0-1 1 2 2 0 0 1 0-1h1zm-4 2v1a6 6 0 0 1 0-1zm-4 8h1a1 1 0 0 1-1 0zm0 0a2 2 0 0 1-1 0h1zm0 0h-1a2 2 0 0 1 0-1 2 2 0 0 0 1 1zm-1 0a2 2 0 0 0 1 0 25 25 0 0 0-3 1 8 8 0 0 1 2-1zm0-2a2 2 0 0 0 0 1 2 2 0 0 1 0-1z"/>
					  <path d="M189 126a2 2 0 0 0 0 1 20 20 0 0 1-2 2h-1a16 16 0 0 0 3-3zm-37 10c1 0 0 0 0 0h-8a3 3 0 0 0 1 0h1c2-1 5-2 6 0z"/>
					  <path d="M152 135a20 20 0 0 0-8-6 5 5 0 0 0-3-1h-1a13 13 0 0 0-2 0c1 0 0 0 0 0a1 1 0 0 0-1 1 14 14 0 0 0-4 1l-1-1a7 7 0 0 0 0 2h-1a30 30 0 0 1-7 4 17 17 0 0 1-3 0l-1-1c6-3 12-8 19-7 5 1 10 4 13 8z"/>
					  <path d="M150 130v1c-4-5-10-7-16-6-5 1-8 4-12 6 5-3 10-8 17-7a19 19 0 0 1 11 6z"/>
					  <path d="M144 129c2 2 2 5 1 7h-2a5 5 0 0 0 2-4c-1-2-2-3-4-3a1 1 0 0 0 0-1 13 13 0 0 1 3 1z"/>
					  <path d="M145 132a5 5 0 0 1-2 4 41 41 0 0 1-5 2h-1c-2-1-4-2-4-4v-4a14 14 0 0 1 4-1 2 2 0 0 0 0 1 4 4 0 0 0 3 2 2 2 0 0 0 2-1 2 2 0 0 0-1-2c2 0 3 1 4 3zm0 4a3 3 0 0 1-1 0v1a1 1 0 0 1-1-1h2zm-1 0v1z"/>
					  <path d="M144 136a1 1 0 0 0 0 1l-6 2a1 1 0 0 0-1-1h1a41 41 0 0 0 6-2zm-3-7a2 2 0 0 1 1 2 2 2 0 0 1-2 1 4 4 0 0 1-3-2 2 2 0 0 1 0-1 12 12 0 0 1 1-1 2 2 0 0 0 0 2h1a1 1 0 0 0 1-2h1zm3 0a13 13 0 0 0-3-1 5 5 0 0 1 3 1z"/>
					  <path d="M141 128a1 1 0 0 1 0 1v-1zm0 0s-1 0 0 0zm0 0h-1 1c-1 0 0 0 0 0zm-3 0s1 0 0 0a12 12 0 0 0-1 0 1 1 0 0 1 1 0zm0 11h-1zm0 0h-1a7 7 0 0 1-1-1h2a1 1 0 0 1 0 1zm-1-1h-1c-3-1-5-4-4-7a17 17 0 0 1 1-1v4c0 2 2 3 4 4z"/>
					  <path d="M136 138a7 7 0 0 0 1 1 9 9 0 0 1-2 0 18 18 0 0 1-11-4 18 18 0 0 0 12 3zm-4-9c1-1 1 0 1 1a17 17 0 0 0-1 1 7 7 0 0 1 0-2zm-8 6zm135-41c6-2 7 11 7 14a44 44 0 0 1-2 11c-2 6-7 13-7 20 0 0 0 1 0 0 1-6 4-11 6-16s4-12 4-18c0-3-2-15-9-12l1 1zm-26-8c4 10 7 20 9 31 3 10 4 20 5 31 2 15 10 30 25 37v-2c-9-4-16-11-20-20-3-9-4-18-5-27a157 157 0 0 0-14-50z"/>
					  <path d="M257 160c0 4 4 10 6 14 3 5 6 9 11 13v-1a50 50 0 0 1-15-25l-2-1zM188 30c-3 7-9 11-15 15l-19 9c-12 6-24 12-32 23a125 125 0 0 0-21 84l1 1c-3-16-1-32 4-47 4-15 11-30 21-41 9-10 22-15 34-21a150 150 0 0 0 16-9c5-3 11-7 11-13v-1z"/>
					  <path d="M101 129a45 45 0 0 1 5 13h1a36 36 0 0 0-6-13s-1 0 0 0zm152-36c-13-7-26-16-35-28-7-10-13-21-22-29-1-1-1 0-1 1 11 10 17 23 27 34a97 97 0 0 0 31 23v-1z"/>
					  <path d="M87 71a58 58 0 0 1 8-25c4-7 11-12 16-18 6-6 10-15 18-19s17-6 26-6c9-2 19-2 29-1l27 8c21 6 30 23 40 41h1c-6-12-13-25-24-33a45 45 0 0 0-16-8l-23-8c-15-4-32-2-47 1-6 2-13 4-18 8-6 5-10 12-15 18S98 40 94 47a50 50 0 0 0-7 24zm64 148c5 13 6 26 2 40a84 84 0 0 1-19 36c-9 11-19 20-25 32a64 64 0 0 0-4 41c0 1 3 3 2 1-2-15 0-30 7-44 7-13 19-22 27-33 15-20 22-49 11-72l-1-1zm-29-21c4 10 8 19 8 30a54 54 0 0 1-8 25c-8 16-22 27-36 38-14 12-29 24-37 40s-5 37-1 54l2 1c-2-16-5-32 0-47 5-14 15-25 26-35 20-18 45-34 53-61 5-15 2-31-6-44l-1-1z"/>
					  <path d="M100 153c0 13 4 26 9 38a109 109 0 0 0 22 33c-8-10-15-20-20-33a193 193 0 0 1-11-38zM87 61c-3 7-4 17-5 25a68 68 0 0 0 2 22c4 15 10 29 11 44l1 1c1-15-6-28-10-42a70 70 0 0 1-3-25c1-8 4-17 4-25z"/>
					  <path d="M87 119c3 18 4 35 1 53a140 140 0 0 1-18 50c-17 30-43 53-55 86-6 17-8 36-2 53h2c-12-34 7-68 27-95 10-14 22-28 30-43a142 142 0 0 0 17-46 125 125 0 0 0-2-58zm110-99a15 15 0 0 0-4-15h-1a16 16 0 0 1 4 14l1 1zm-38 104c6 14 2 28 8 41 0 0 1 1 0 0-5-13 0-29-8-41zm2 51c4 0 7 4 12 3s5-2 8-4c2-2 4-2 7-1l4-1c3-1 2-5 2-8h-1l-1 6c-3 3-4 1-6 1-3-1-4 1-6 3a11 11 0 0 1-5 3c-3 1-5 0-8-1-2-1-4-2-6-1-1 0 0 0 0 0zm-6-9c-1 2-2 6-1 9 2 2 4 4 7 3l-1-1c-3 0-6-3-6-6a19 19 0 0 1 2-5h-1zm25-1a12 12 0 0 0-1-10h-1c1 3 2 6 1 9l1 1zm0-34a32 32 0 0 1 1-10l-1-1a19 19 0 0 0 0 11s0 1 0 0zm-29-8c4 2 5 6 6 10l2 1c1-2-1-5-2-7a14 14 0 0 0-6-4c-1-1 0 0 0 0zm-1 71c5 1 10-2 14-3a19 19 0 0 1 10-1l7 1c3 0 4-3 7-4h9c5 0 10-1 15-4h-1c-6 4-11 3-18 3a24 24 0 0 0-6 0l-6 3c-5 2-10 0-15 1-6 1-10 4-16 4-1 0 0 0 0 0z"/>
					  <path d="M152 195l15 2 8-2 8-1 7-3 8-1a18 18 0 0 0 12-6h-1c-4 3-8 5-13 5a32 32 0 0 0-6 1l-7 3-14 2c-6 1-11 0-18-1l1 1z"/>
					  <path d="M150 194c8 8 18 17 31 16 12-1 21-10 25-21-6 9-13 17-24 18a29 29 0 0 1-18-2l-14-11zm20 2z"/>
					  <path d="M170 197c9 5 17 1 24-6l-1-1c-7 7-13 11-23 6-1 0-1 0 0 0zm45-10c1-1 2-4 1-5a6 6 0 0 0-3-3v1l3 3c1 2-1 2-1 4zm-67 6l-1 2a2 2 0 0 0 1 1v-3s0-1 0 0zm50-33c3 7 11 12 19 11l-1-1c-7 0-14-3-18-9v-1zm-57 25c5-2 9-7 10-12h-1c-1 5-4 9-9 11v1zm-27-93c-1 20-5 40-3 59 1 15 7 31 21 36v-1c-18-8-20-30-20-46s3-32 3-47l-1-1zm121 107c-6 18-6 40-2 59l2 1a146 146 0 0 1-3-31c0-10 2-19 4-29h-1z"/>
					  <path d="M231 238c6 15 0 30-4 45-5 15-9 31-9 47-1 22 8 47 28 59v-1c-23-17-29-46-25-73 2-14 7-27 11-41 3-12 5-25-1-36 0 0-1-1 0 0zm33-117c-1 19 5 37 11 54 6 19 11 38 11 59 1 38-8 79 9 115 7 14 18 27 33 34 2 1 1-1 0-2-34-16-41-57-41-91 0-19 2-38 1-57 0-18-4-35-10-52-6-20-13-38-13-59l-1-1z"/>
					  <path d="M239 227c11 11 9 27 7 42-3 14-7 29-8 43-2 14-3 27 1 40 2 10 6 22 16 26 2 1 1-1 0-2-13-8-15-27-15-41s2-28 5-42c4-21 15-51-6-67v1zm-84 29c14 2 23 15 38 15 14-1 30-6 40-15l-2-2c-6 5-12 8-19 10-7 3-16 5-24 4-13-1-21-13-34-13l1 1z"/>
					  <path d="M224 211c-1 16-10 30-11 45l1 1c3-15 11-30 10-46zm62 55c4 8 12 12 19 14a140 140 0 0 0 19 4c6 2 13 2 19 3 5 1 10 3 13 8a31 31 0 0 1 4 10 133 133 0 0 1 2 20 161 161 0 0 1-4 43c0 1 2 3 3 2a141 141 0 0 0 4-43c-1-11-1-25-8-34-7-8-17-8-27-10a143 143 0 0 1-24-5c-8-2-14-5-19-11l-1-1zm-250 4c-7 6-16 8-23 14s-9 16-11 25c-3 23-3 47 4 70h2c-5-22-7-45-3-68 1-9 3-19 12-25 6-5 16-7 20-14 1-1-1-2-1-2z"/>
					  <path d="M84 100c-2 9-2 18-1 27a107 107 0 0 1-2 26l-14 49c-9 31-20 61-46 82-1 0 1 2 2 1 26-18 37-50 45-80 5-16 11-33 14-51 4-17 0-35 2-53v-1zm165-54c10 17 21 35 29 53s13 38 17 58c6 36 9 74 32 105a116 116 0 0 0 42 35c2 1 1-2 0-2a116 116 0 0 1-63-87c-8-35-10-72-25-106a388 388 0 0 0-32-56zm-8 9c30 37 1 90 27 128h1c-25-38 4-92-28-128 0 0-1 0 0 0z"/>
					  <path d="M260 128c4 19-1 42 13 58h1c-13-17-8-38-13-57l-1-1z"/>
					</svg>
				</div>

				<div class="body_paragraph moblie_body_paragraph">
					<p class="body_text">
						I am Ching Ching Lee, a graphic and web designer from Hong Kong, now living in Canada. I am currently completing my final year of my B.F.A in New Media at the University of Lethbridge, where I’m focusing on graphic design and web development. 
					</p>
					<p class="body_text">
						I spent my childhood in Thailand and studied high school in Hong Kong before moving to Canada. These experiences inspire me to utilize multicultural elements and perspectives in my design. My multicultural background inspires me to insert images and create icons to be a communication media since they are easy to understand. I believe a “good design” should be used for all people not only a group of people.

					</p>
					<p class="body_text">
						In Spring 2018, my web project <a class="text_link body_text" href="http://chingchingleefox.atwebpages.com">“Reintroduction of Swift Fox”</a>won the title of the top undergraduate student project. “Reintroduction of Swift Fox” is a CSS and JavaScript Web design. I created all my illustrations and coded my HTML, CSS, and also JavaScript. This award made me believe in my skills and pushed me to explore more of the field of computer coding.
					</p>
					<p class="body_text">
						For the past two years, I have provided graphic design service for students and small companies. Since summer 2017, I have been working with a Lethbridge jewellery design company as a freelance designer to recreate their branding and website.
					</p>
				</div>

				<a class="download_resume_btn round_btn_link round_btn" href="img/resume.pdf">Download my Resume</a>
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
					</div>
					
				</div>
			</div>
			
			<div class="innerpage_context_empty_box03"></div>	
			<div class="innerpage_context_empty_box04"></div>	
				
		</div>
		<?php include "includes/footer.php"; ?>
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/typed.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script type="text/javascript" src="js/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
	<script type="text/javascript" src=js/scrollmagic/minified/plugins/animation.gsap.min.js></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
