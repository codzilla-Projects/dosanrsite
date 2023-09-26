<?php
function dosanrsite_admin_scripts_styles($hook) {
    wp_enqueue_style( 'dosanrsite-main', dosanrsite_URL . 'assets/admin/css/main-style.css');
    //var_dump($hook);
    $dosanrsite_pages = ['toplevel_page_content-area','dosanrsite-options_page_home-page-content','dosanrsite-options_page_about-page-content','dosanrsite-options_page_contact-page-content','dosanrsite-options_page_contact-page-content','post-new.php','post.php'];



    if( in_array($hook, $dosanrsite_pages) ) {
        wp_enqueue_style( 'dosanrsite-bootsrtap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');

        //wp_enqueue_style( 'dosanrsite-bootsrtap', dosanrsite_URL . 'assets/admin/css/bootstrap.min.css');
        wp_enqueue_style( 'dosanrsite-style', dosanrsite_URL . 'assets/admin/css/style.css');
        wp_enqueue_style( 'dosanrsite-style-sub', dosanrsite_URL . 'assets/admin/css/style-sub.css');

        wp_enqueue_script( 'dosanrsite-popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'dosanrsite-bootsrtap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array() ,false, true );


        //wp_enqueue_script( 'dosanrsite-bootsrtap', dosanrsite_URL .'assets/admin/js/bootstrap.min.js', array() ,false, true );
        wp_enqueue_script( 'dosanrsite-script', dosanrsite_URL .'assets/admin/js/script.js', array() ,false, true );
        if(function_exists( 'wp_enqueue_media' )){
            wp_enqueue_media();
        }else{
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
        }
    }

}
 
add_action('admin_enqueue_scripts', 'dosanrsite_admin_scripts_styles');


function dosanrsite_scripts_styles() {

    wp_deregister_style( 'xirki-inline-styles');

    wp_enqueue_style( 'dosanrsite-bootstrap-css', dosanrsite_URL . 'assets/css/bootstrap.css' );

    wp_enqueue_style( 'dosanrsite-style-css', dosanrsite_URL . 'assets/css/style.css' );

    wp_enqueue_style( 'dosanrsite-responsive-css', dosanrsite_URL . 'assets/css/responsive.css' );

    wp_enqueue_style( 'dosanrsite-color-switcher-css', dosanrsite_URL . 'assets/css/color-switcher-design.css' );

    wp_enqueue_style( 'dosanrsite-default-theme-css', dosanrsite_URL . 'assets/css/color-themes/default-theme.css' );



    wp_enqueue_script( 'dosanrsite-jquery-js',  dosanrsite_URL . 'assets/js/jquery.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-popper-js',  dosanrsite_URL . 'assets/js/popper.min.js' , array() ,false, true );
    
    wp_enqueue_script( 'dosanrsite-bootstrap-js',  dosanrsite_URL . 'assets/js/bootstrap.min.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-mCustomScrollbar-js',  dosanrsite_URL . 'assets/js/jquery.mCustomScrollbar.concat.min.js' , array() ,false, true );
    
    wp_enqueue_script( 'dosanrsite-fancybox-js',  dosanrsite_URL . 'assets/js/jquery.fancybox.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-appear-js',  dosanrsite_URL . 'assets/js/appear.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-isotope-js',  dosanrsite_URL . 'assets/js/isotope.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-owl-js',  dosanrsite_URL . 'assets/js/owl.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-wow-js',  dosanrsite_URL . 'assets/js/wow.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-jquery-ui-js',  dosanrsite_URL . 'assets/js/jquery-ui.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-script-js',  dosanrsite_URL . 'assets/js/script.js' , array() ,false, true );

    wp_enqueue_script( 'dosanrsite-color-settings-js',  dosanrsite_URL . 'assets/js/color-settings.js' , array() ,false, true );

}
add_action( 'wp_enqueue_scripts', 'dosanrsite_scripts_styles' );