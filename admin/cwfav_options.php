<?php
/******************************
	-Admin Panel goes here
******************************/
function cwfav_options_page() {

	global $cwfav_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>Favicons</h2>
		<?php
			$input = array(
				"site_favicon" => array("text"=>"Site Favicon Url","class"=>"cwfav_file"),
				"login_screen_favicon" => array("text"=>"Login Screen Favicon Url","class"=>"cwfav_file"),
				"admin_favicon" => array("text"=>"Admin Favicon Url","class"=>"cwfav_file"),
			);
		?>
		<div style="float:left;">
			<form method="post" action="options.php">
				<?php settings_fields('cwfav_settings_group'); ?>
				<table>
					<?php foreach ($input as $name => $data) : ?>
					<tr>
						<td style="text-align:;"><label class="description" for="cwfav_settings[<?php echo $name; ?>]"><?php _e($data["text"], 'cwfav_domain'); ?></label></td>
						<td><input class="<?php echo $data["class"]; ?>" id="cwfav_settings[<?php echo $name; ?>]" size="45" name="cwfav_settings[<?php echo $name; ?>]" type="text" value="<?php echo $cwfav_options[$name]; ?>"/></td>
					</tr>
					<?php endforeach; ?>
					<tr>
						<td></td>
						<td class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Options', 'cwfav_domain'); ?>" /></td>
					</tr>
				</table>
			</form>
		</div>
		<div style="float:right;text-align:right;width:250px;">
			 
				<span style="font-size:32px;">Hello!</span><br />
				I am Nihal <br />
				I need your support.I have lost my domain name.
				I registered that domain in 2012.
				After a year in 2013 my domain expired.
				Because of my exam I didn't renew it.
				Now my domain became a premium domain name and it costs $700.
				Now I am working so that I can get my domain back.
				So I need your help.Please 
				<span style="font-size:18px;"><b><a href="http://goo.gl/dxNcHZ" target="_blank">donate</a></b></span>
				for this plugin. 
							 

			</div>
		<div style="float:left;">
			Thank you for using this plugin.Give <a href="http://wordpress.org/extend/plugins/wpfavicon/" target="_blank">this plugin</a> a good rating <br />
		</div>
	</div>
	<?php
	echo ob_get_clean();
}

function cwfav_add_options_link() {
	add_options_page('Favicons', 'Favicons', 'manage_options', 'cwfav-options', 'cwfav_options_page');
}
add_action('admin_menu', 'cwfav_add_options_link');

function cwfav_register_settings() {
	register_setting('cwfav_settings_group', 'cwfav_settings');
}
add_action('admin_init', 'cwfav_register_settings');

?>