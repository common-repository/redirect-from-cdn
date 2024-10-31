<?php
/**
 * Plugin Name: Redirect From CDN
 * Plugin URI: http://kim-tetzlaff.dk
 * Description: Redirects html - pages, posts etc from cdn to original domain.
 * Version: 1.0
 * Author: Kim Tetzlaff
 * Author URI: http://kim-tetzlaff.dk/
 * License: GPL2
 */

/*  Copyright 2014  Kim Tetzlaff  (email : kim@kim-tetzlaff.dk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_action('init', 'redirect_from_cdn');
function redirect_from_cdn()  {
    if("http://".$_SERVER['HTTP_HOST'] != get_site_url()){
		
		
			$urlVar = get_site_url();
			$urlVar .= $_SERVER['REQUEST_URI'];
			$urlVar=strtok($urlVar,'?');
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			//echo $urlVar; exit;
			if($ext != "js" && $ext != "css"){
			wp_redirect($urlVar, 301);exit;
			}
		
	}
}