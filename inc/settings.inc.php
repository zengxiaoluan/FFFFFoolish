<?php

/* Automatic updates for All themes: */
add_filter( 'auto_update_theme', '__return_true' );
/* Automatic updates for All plugins: */
add_filter( 'auto_update_plugin', '__return_true' );
/* To enable automatic updates for major releases or development purposes, the place to start is with the WP_AUTO_UPDATE_CORE constant. Defining this constant one of three ways allows you to blanket-enable, or blanket-disable several types of core updates at once.
 */
define( 'WP_AUTO_UPDATE_CORE', true );