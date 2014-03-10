<?php
/******************************
	-Favicon For Admin Dashboard
******************************/
function cwfav_admin() {
	
	global $cwfav_options;

	ob_start(); ?>
	<!-- Favicon Start -->
		<!-- Favicon Version 1.0 : Admin : Visit CodingWar.com -->
		<?php if(!empty($cwfav_options["admin_favicon"])): ?>
		<link rel="icon" href="<?php echo $cwfav_options["admin_favicon"];  ?>" type="image/x-icon" />
		<?php endif; ?>
		<meta name="Favicon" content="1.0" />
	<!-- Favicom End -->
	<?php
		echo ob_get_clean();
	}
	add_action('admin_head', 'cwfav_admin');

?>