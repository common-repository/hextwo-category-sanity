<?php
/*
HEXTWO Category Sanity

@package     HEXTWOCategorySanity
@author      Dane Morgan
@copyright   2018 HEXTWO Studio
@license     GPL-2.0+

@wordpress-plugin
Plugin Name: HEXTWO Category Sanity
Plugin URI:  https://hextwo.com/plugins/hextwo-category-sanity
Description: A simple plugin to prevent posting with no category, uncategorized category, or more than one category selected.
Version:     1.0.0
Author:      Dane Morgan
Author URI:  https://danemorgan.com
Text Domain: hextwo-plugin-sanity
License:     GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

HEXTWO Category Sanity is free software: you can redistribute it and/or
modify it under the terms of the GNU General Public License as published
by the Free Software Foundation, either version 2 of the License, or
any later version.
 
HEXTWO Category Sanity is distributed in the hope that it will be 
useful, but WITHOUT ANY WARRANTY; without even the implied warranty
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with HEXTWO Category Sanity. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

add_action( 'admin_enqueue_scripts', 'hextwo_category_sanity' );

/**
@param $hook
 */
function hextwo_category_sanity( $hook ) {

	if ( in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) :

		wp_register_script( 'hextwo-category-sanity', plugins_url( 'js/hextwo-category-sanity.js', __FILE__ ), 'jquery', '1.0.0' );
		wp_enqueue_script( 'hextwo-category-sanity' );

	endif;
}