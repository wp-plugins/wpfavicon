<?php
/******************************
	-Favicon For site
******************************/
function cwfav_site() {
	
	global $cwfav_options;

	ob_start(); ?>
	<!-- Favicon Start -->
		<!-- Favicon Version 1.0 : Site : Visit CodingWar.com-->
		<?php if(!empty($cwfav_options["admin_favicon"])): ?>
		<link rel="icon" href="<?php echo $cwfav_options["site_favicon"];  ?>" type="image/x-icon" />
		<?php endif; ?>
		<meta name="Favicon" content="1.0" />
	<!-- Favicom End -->
	<?php
		echo ob_get_clean();
	}
	if(!empty($cwfav_options["site_favicon"])){
		add_action('wp_head', 'cwfav_site');
}
?>