Author: Timy Dang
Version: 1.0
Tag: Post, Comments, Posts, wordpress, pages
Tested: 2.3.1
Creation Time: 16.12.2007

Author URI: http://blog.nanowings.de/
Plugin Name: WP TIMY TYPING
Plugin URI: http://blog.nanowings.de/category/timytyping/
Description: Used to typing vietnamese on the page. WP TIMY TYPING v1.0. (USE ONLY FOR VIETNAMESE)



This plugin uses code from Hieu Tran Dang (http://avim.veneroida.com/?page_id=5 )

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.










What is WP-Timytyping? WP-Timytyping is a Wordpress plugin and used to typing vietnamese on the page.

Plugin Name: WP-Timytyping
Description:  Wordpress Plugin, Used to typing vietnamese on the page
Version: 1.0
Author: Timy Dang
Tested on WP 2.3.1
used Avim Version: avim20071006.js

INSTALLATION:
1. Download wp-timytyping.rar
2. Unpack the *.zip file and extract the /timy-typing/ folder and the files
3. Using an FTP program, upload the /timy-typing/ folder to your WordPress plugins
directory (Example: /wp-content/plugins).
4. Open /wp-content/themes/default/footer.php, copy php code in readme.txt insert it after <div id="footer"> (this is for default theme. you can edit your theme)  

<!--Copy it into footer.php-->
<p>
		<?php
		echo ".:: Timytyping Tool ::.";
		echo "			<INPUT id=him_auto onclick=setMethod(0); type=radio name=viet_method>AUTO \n";
		echo "      <INPUT id=him_telex onclick=setMethod(1); type=radio name=viet_method>TELEX \n";
		echo "      <INPUT id=him_vni onclick=setMethod(2); type=radio name=viet_method>VNI \n";
		echo "      <INPUT id=him_viqr onclick=setMethod(3); type=radio name=viet_method>VIQR \n";
		echo "      <INPUT id=him_viqr2 onclick=setMethod(4); type=radio name=viet_method>VIQR* \n";
		echo "      <INPUT id=him_off onclick=setMethod(-1); type=radio name=viet_method>OFF\n";
		echo "      <INPUT id=him_ckspell onclick=setSpell(this); type=checkbox name=viet_method>Check Spell \n";
		echo "			<INPUT id=him_daucu onclick=setDauCu(this); type=checkbox name=viet_method>Old Accent \n";
		?>
</p>
<!--End copy-->

5. Open your WordPress Admin panel and go to the Plugins page (link on the top menu). Locate the "WP TIMY TYPING" plugin and click on the "Activate" link.
6. That's it, you’re done. You can now add downloads.


DEMO: 

see footer of http://blog.nanowings.de

DOWNLOAD PLUGIN: 

please come to http://blog.nanowings.de/category/timytyping/
