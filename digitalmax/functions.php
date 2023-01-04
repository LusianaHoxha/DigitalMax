<?php
require_once('class-wp-bootstrap-navwalker.php');

function wp_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action('init', 'wp_header_menu');