<?php

add_action( 'widgets_init', 'foolish_widgets_init' );
function foolish_widgets_init() {
  register_sidebar( array(
      'name' => __( 'Ads Sidebar', 'foolish' ),
      'id' => 'ads-sidebar',
      'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'foolish' ),
      'before_widget' => '<span id="%1$s" class="ads-widget %2$s">',
      'after_widget'  => '</span>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
  ) );
}