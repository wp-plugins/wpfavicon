<?php
/******************************
	-Favicon For Admin Dashboard
******************************/
function cwfav_admin() {
	
	global $cwfav_options;

	ob_start(); ?>
	<!-- Favicon Start -->
		<!-- Favicon Version 1.0.2 : Admin : Visit NihalsCode.com -->
		<?php if(!empty($cwfav_options["admin_favicon"])): ?>
		<link rel="icon" href="<?php echo $cwfav_options["admin_favicon"];  ?>" type="image/x-icon" />
		<?php endif; ?>
		<link rel='stylesheet' href="<?php echo plugin_dir_url(''); ?>/wpfavicon/style.css" type="text/css" />
		
		<meta name="Favicon" content="1.0" />
	<!-- Favicom End -->
	<?php
		echo ob_get_clean();
	}
	add_action('admin_head', 'cwfav_admin');

?>