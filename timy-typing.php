<?php
/*
Plugin Name: WP TIMY TYPING
Plugin URI: http://blog.nanowings.de/category/timytyping/
Description: Used to typing vietnamese on the page. WP TIMY TYPING v1.0.
Version: 1.0
Author: Timy Dang
Author URI: http://www.nanowings.de

Copyright (C)2007 Timy Dang

This plugin uses code from Hieu Tran Dang (http://avim.veneroida.com/?page_id=5 )

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/

function timytyping_use_avim_styles() {

  $timytyping_use_avim_path =  get_bloginfo('wpurl')."/wp-content/plugins/timy-typing/timytyping-use-avim/";

	$timytyping_use_avim_script = "
	
	<script type=\"text/javascript\" src=\"".$timytyping_use_avim_path."timytyping_use_avim.js\"></script>\n
	<!-- end timytyping_use_avim scripts -->\n";
	
	echo($timytyping_use_avim_script);
}
add_action('wp_head', 'timytyping_use_avim_styles');
?>