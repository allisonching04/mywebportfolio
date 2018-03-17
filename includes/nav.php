<nav class="primary_nav main_nav_border">
	<div class="primary_nav_flex">
		<div class="primary_nav_logo moble-primary-nav" style="text-align: center;">
			<a class="primary_nav_logo_link" href="index.php"><img class="sitelogo" src="img/sitelogo.png" alt="siteLogo"></a>

			<a class="hamburger_menu"></a>
		</div>



		<ul class="primary_nav_ul primary_nav_effect">
			<li <?php if($this_page == 'home') {echo 'class="primary_nav_current"';} ?> class="primary_nav_item moblie_nav_item"><a class="primary_nav_item_link" href="index.php">Home</a></li>
			<li  <?php if($this_page == 'web') {echo 'class="primary_nav_current"';} ?> class="primary_nav_item moblie_nav_item"><a class="primary_nav_item_link moblie_nav_item" href="web.php">Website</a></li>
			<li  <?php if($this_page == 'graphic') {echo 'class="primary_nav_current"';} ?> class="primary_nav_item moblie_nav_item"><a class="primary_nav_item_link moblie_nav_item" href="graphic.php">Graphic</a></li>
			<li  <?php if($this_page == 'about') {echo 'class="primary_nav_current"';} ?> class="primary_nav_item moblie_nav_item"><a class="primary_nav_item_link" href="about.php">About</a></li>
		</ul>
	</div>
	
</nav>