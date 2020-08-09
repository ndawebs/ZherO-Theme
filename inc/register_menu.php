<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_nav_menu('user-menu',__( 'User Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>