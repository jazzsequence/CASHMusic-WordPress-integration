=== CASHMusic init ===
Contributors: jazzs3quence
Donate link:https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AWM2TG
Tags: CASHMusic, music, framework, social networking
Requires at least: 2.8
Tested up to: 3.3.1
Stable tag: 0.02

Loads CASHMusic's api (may do other things later when I start building out the plugin and digging into the API)

== Description ==

Loads CASHMusic's api in the header via an init action.  There's also a debug action that can be embedded into a template file to test that it's working and spit out the path to the cashmusic.php file is.

Example:
`<?php if (has_action('cashmusic_debug')) {
	do_action('cashmusic_debug');
} else {
	echo 'I don\'t really know what you want me to do.  I couldn\'t find the \'cashmusic_debug\' action.';
}?>`

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

== Changelog ==

**0.02**

* changed debug function to be a separate action that can be called in a do_action instead of just loading it in wp_head (this will make it easier to use for other debugging later)
* added a global variable for cashmusic path (this will make it easier later when this becomes an option for people to input)
* updated "CashMusic" to "CASHMusic"
* created a definition for CASHMUSIC_PATH that can be used elsewhere.
* to do: create more general definitions for various cashmusic directories as needed (if they're ever needed, really...)
* fixed debug issue ($%$##@%^$@%$^ typo!!!)
* added readme & changelog

**0.01**

* initial release
* created cashmusic_init function to load cashmusic.php
* created debug function to display a message saying whether cashmusic was initialized or not