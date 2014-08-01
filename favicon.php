<?php
/*
Plugin Name: WPFavicon
Plugin URI: http://www.NihalsCode.com/
Description: This plugin is for adding favicons to WordPress site.
Tags: favicon,wpfavicons,icon,icons,Nazmul Hossain Nihal,NihalsCode.com,login screen,admin,site
Version: 1.0.2
Author:	Nazmul Hossain Nihal
Author URI: http://www.NihalsCode.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/******************************
* global variables
******************************/

$cwfav_options = get_option('cwfav_settings');

/******************************
* includes
******************************/

include('admin/cwfav_options.php'); //Admin Panel

include('display/settings.php'); //Display