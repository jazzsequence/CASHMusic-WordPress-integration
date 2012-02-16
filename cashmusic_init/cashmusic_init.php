<?php
/*
Plugin Name: CASHMusic init
Plugin URI:
Description: Loads CASHMusic's api
Version: 0.02
Author: Chris Reynolds
Author URI: http://museumthemes.com
License: GPL3
*/

/*
	CASHMusic init
    Copyright (C) 2012 | Chris Reynolds (chris@arcanepalette.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    http://www.opensource.org/licenses/gpl-3.0.html
*/
$cashmusic_path = ABSPATH . '../cashmusic/framework/cashmusic.php'; // creating a variable here that can eventually be used to grab input from an option
define( "CASHMUSIC_PATH", $cashmusic_path ); // using the variable to create a path definition that we can use later

/**
 * CASHMusic init
 * really the only thing this plugin does right now
 * @since 0.01
 * @author Chris Reynolds
 * @todo add parameters so path to cashmusic can be defined through a settings page or something
 */
function cashmusic_init() {
    if (!is_admin()) { // don't run this in the admin
        include ( CASHMUSIC_PATH ); // CASH Music
    }
}
add_action('init','cashmusic_init');

/**
 * CASHMusic debug
 * this tells you that CASHMusic has properly been intialized
 * @since 0.01
 * @author Chris Reynolds
 */
function cashmusic_debug() {
    // no fucking clue why this function does not run
    $debug_out = '<div style="background: white; color: black">';
    $debug_out .= 'version 0.02. using ABSPATH. <br />';
    if (file_exists( CASHMUSIC_PATH ) ) {
        $debug_out .= 'CASHMusic has been loaded from "' . CASHMUSIC_PATH . '.';
    } else {
        $debug_out .= 'CASHMUSIC has not been loaded.  Couldn\'t find the path to cashmusic.php.  I looked in ' . CASHMUSIC_PATH . ' and then gave up.  Sorry.';
    }
    $debug_out .= '</div>';
    print_r($debug_out);
}
add_action('cashmusic_debug','cashmusic_debug'); // oh my fucking god i was foiled by a fucking typo.  GODDAMMIT!!!!

/* that's all folks */
?>