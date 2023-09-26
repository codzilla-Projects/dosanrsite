<?php  
define('dosanrsite_ROOT', get_stylesheet_directory().'/');
define('dosanrsite_URL', get_stylesheet_directory_uri() .'/');
define('dosanrsite_ADMIN', admin_url());
define('dosanrsite_BlogUrl', get_bloginfo('url'));

require_once( dosanrsite_ROOT . '/lib/dosanrsite_enqueue_scripts.php' );

require_once( dosanrsite_ROOT . '/lib/dosanrsite_theme_init.php' );

require_once( dosanrsite_ROOT . '/lib/dosanrsite_meta_fields.php' );

require_once( dosanrsite_ROOT . '/lib/dosanrsite_functions.php');


function dosanrsite_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'container'         => '',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3
  )

 );

}

function dosanrsite_footer_menu() {

wp_nav_menu( array(

    'menu'              => 'Footer Menu',

    'container'         => '',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'footer-nav',

    'depth'             => 3
  )

 );

}

/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function dosanrsite_widgets_init() {

  register_sidebar( array(
    'name'          => 'First Sidebar Column',
    'id'            => 'first_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'dosanrsite_widgets_init' );
