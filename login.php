<?php
/******************************
	-Favicon For Login Screen
******************************/
	function cwfav_login_screen() {
	
	global $cwfav_options;

	ob_start(); ?>
	<!-- Favicon Start -->
		<!-- Favicon Version 1.0.2 : Login Screen : Visit NihalsCode.com-->
		<?php if(!empty($cwfav_options["login_screen_favicon"])): ?>
		<link rel="icon" href="<?php echo $cwfav_options["login_screen_favicon"];  ?>" type="image/x-icon" />
		<?php endif; ?>
		<meta name="Favicon" content="1.0" />
	<!-- Favicom End -->
	<?php
		echo ob_get_clean();
	}
	add_action('login_head', 'cwfav_login_screen');
?>