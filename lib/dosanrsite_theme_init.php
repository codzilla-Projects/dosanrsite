<?php 
function dosanrsite_register_custom_menu(){

    add_theme_support('post-thumbnails');

    $label = array(

            'name'                  => _x( 'sliders', 'Homepage sliders', 'dosanrsite' ),

            'singular_name'         => _x( 'slider', 'Post type singular name', 'dosanrsite' ),

            'menu_name'             => _x( 'sliders', 'Admin Menu text', 'dosanrsite' ),

            'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'dosanrsite' ),

            'add_new'               => __( 'Add New slider', 'dosanrsite' ),

            'add_new_item'          => __( 'Add New slider', 'dosanrsite' ),

            'new_item'              => __( 'New slider', 'dosanrsite' ),

            'edit_item'             => __( 'Edit slider', 'dosanrsite' ),

            'view_item'             => __( 'View slider', 'dosanrsite' ),

            'all_items'             => __( 'All sliders', 'dosanrsite' ),

            'search_items'          => __( 'Search slider', 'dosanrsite' ),

            'parent_item_colon'     => __( 'Parent slider:', 'dosanrsite' ),

            'not_found'             => __( 'No slider found.', 'dosanrsite' ),

            'not_found_in_trash'    => __( 'No slider found in Trash.', 'dosanrsite' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'Home Page sliders.',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-slides',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'sliders' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'sliders', $arg );



    $label = array(

            'name'                  => _x( 'Projects', 'Homepage Projects', 'dosanrsite' ),

            'singular_name'         => _x( 'Project', 'Post type singular name', 'dosanrsite' ),

            'menu_name'             => _x( 'Projects', 'Admin Menu text', 'dosanrsite' ),

            'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'dosanrsite' ),

            'add_new'               => __( 'Add New Project', 'dosanrsite' ),

            'add_new_item'          => __( 'Add New Project', 'dosanrsite' ),

            'new_item'              => __( 'New Project', 'dosanrsite' ),

            'edit_item'             => __( 'Edit Project', 'dosanrsite' ),

            'view_item'             => __( 'View Project', 'dosanrsite' ),

            'all_items'             => __( 'All Projects', 'dosanrsite' ),

            'search_items'          => __( 'Search Project', 'dosanrsite' ),

            'parent_item_colon'     => __( 'Parent Project:', 'dosanrsite' ),

            'not_found'             => __( 'No Project found.', 'dosanrsite' ),

            'not_found_in_trash'    => __( 'No Project found in Trash.', 'dosanrsite' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'Home Page Projects.',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 6,

            'menu_icon'          => 'dashicons-analytics',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'projects' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'projects', $arg );

        $labels = array(

        'name'                  => _x( 'Services', 'Homepage Services', 'dosanrsite' ),

        'singular_name'         => _x( 'Service', 'Post type singular name', 'dosanrsite' ),

        'menu_name'             => _x( 'Services', 'Admin Menu text', 'dosanrsite' ),

        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'dosanrsite' ),

        'add_new'               => __( 'Add New Service', 'dosanrsite' ),

        'add_new_item'          => __( 'Add New Service', 'dosanrsite' ),

        'new_item'              => __( 'New Service', 'dosanrsite' ),

        'edit_item'             => __( 'Edit Service', 'dosanrsite' ),

        'view_item'             => __( 'View Service', 'dosanrsite' ),

        'all_items'             => __( 'All Services', 'dosanrsite' ),

        'search_items'          => __( 'Search Services', 'dosanrsite' ),

        'parent_item_colon'     => __( 'Parent Services:', 'dosanrsite' ),

        'not_found'             => __( 'No Services found.', 'dosanrsite' ),

        'not_found_in_trash'    => __( 'No Services found in Trash.', 'dosanrsite' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Home Page Services.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-category',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'Services' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'Services', $args );

    $labels = array(

        'name'                  => _x( 'teams', 'Homepage teams', 'dosanrsite' ),

        'singular_name'         => _x( 'team', 'Post type singular name', 'dosanrsite' ),

        'menu_name'             => _x( 'teams', 'Admin Menu text', 'dosanrsite' ),

        'name_admin_bar'        => _x( 'team', 'Add New on Toolbar', 'dosanrsite' ),

        'add_new'               => __( 'Add New team', 'dosanrsite' ),

        'add_new_item'          => __( 'Add New team', 'dosanrsite' ),

        'new_item'              => __( 'New team', 'dosanrsite' ),

        'edit_item'             => __( 'Edit team', 'dosanrsite' ),

        'view_item'             => __( 'View team', 'dosanrsite' ),

        'all_items'             => __( 'All teams', 'dosanrsite' ),

        'search_items'          => __( 'Search teams', 'dosanrsite' ),

        'parent_item_colon'     => __( 'Parent teams:', 'dosanrsite' ),

        'not_found'             => __( 'No teams found.', 'dosanrsite' ),

        'not_found_in_trash'    => __( 'No teams found in Trash.', 'dosanrsite' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Home Page teams.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-groups',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'teams' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'teams', $args );

    $labels = array(

        'name'                  => _x( 'Clients', 'Homepage Clients', 'dosanrsite' ),

        'singular_name'         => _x( 'Client', 'Post type singular name', 'dosanrsite' ),

        'menu_name'             => _x( 'Clients', 'Admin Menu text', 'dosanrsite' ),

        'name_admin_bar'        => _x( 'Client', 'Add New on Toolbar', 'dosanrsite' ),

        'add_new'               => __( 'Add New Client', 'dosanrsite' ),

        'add_new_item'          => __( 'Add New Client', 'dosanrsite' ),

        'new_item'              => __( 'New Client', 'dosanrsite' ),

        'edit_item'             => __( 'Edit Client', 'dosanrsite' ),

        'view_item'             => __( 'View Client', 'dosanrsite' ),

        'all_items'             => __( 'All Clients', 'dosanrsite' ),

        'search_items'          => __( 'Search Clients', 'dosanrsite' ),

        'parent_item_colon'     => __( 'Parent Clients:', 'dosanrsite' ),

        'not_found'             => __( 'No Clients found.', 'dosanrsite' ),

        'not_found_in_trash'    => __( 'No Clients found in Trash.', 'dosanrsite' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Home Page Clients.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-businessman',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'Clients' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'Clients', $args );


        $labels = array(

        'name'                  => _x( 'Questions', 'Homepage Questions', 'dosanrsite' ),

        'singular_name'         => _x( 'Question', 'Post type singular name', 'dosanrsite' ),

        'menu_name'             => _x( 'Questions', 'Admin Menu text', 'dosanrsite' ),

        'name_admin_bar'        => _x( 'Question', 'Add New on Toolbar', 'dosanrsite' ),

        'add_new'               => __( 'Add New Question', 'dosanrsite' ),

        'add_new_item'          => __( 'Add New Question', 'dosanrsite' ),

        'new_item'              => __( 'New Question', 'dosanrsite' ),

        'edit_item'             => __( 'Edit Question', 'dosanrsite' ),

        'view_item'             => __( 'View Question', 'dosanrsite' ),

        'all_items'             => __( 'All Questions', 'dosanrsite' ),

        'search_items'          => __( 'Search Questions', 'dosanrsite' ),

        'parent_item_colon'     => __( 'Parent Questions:', 'dosanrsite' ),

        'not_found'             => __( 'No Questions found.', 'dosanrsite' ),

        'not_found_in_trash'    => __( 'No Questions found in Trash.', 'dosanrsite' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Home Page Questions.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-format-quote',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'Questions' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'Questions', $args );

    /*-----------------------------------------------------------------------------------------------*/
}
add_action( 'init', 'Projects_custom_tax', 0 );
function Projects_custom_tax() 
{
    $ser_taxonomies = array(
        array(

          'labels' => array(

            'name'                          => _x( 'Categories', 'taxonomy general name' ),
            'singular_name'                 => _x( 'Category', 'taxonomy singular name' ),
            'search_items'                  =>  __( 'Search categories','karma' ),
            'popular_items'                 => __( 'Popular Categories' ,'karma'),
            'all_items'                     => __( 'All categories' ,'karma'),
            'parent_item'                   => __('Parent'),
            'parent_item_colon'             => null,
            'edit_item'                     => __( 'Edit Category' ), 
            'update_item'                   => __( 'Update Category' ),
            'add_new_item'                  => __( 'Add new category' ),
            'new_item_name'                 => __( 'New Category' ),
            'separate_items_with_commas'    => __( 'Seperate categories with commas' ),
            'add_or_remove_items'           => __( 'Add or remove category' ),
            'choose_from_most_used'         => __( 'Choose from most used categories' ),
            'menu_name'                     => __( 'Categories' ),
          ),
          'tax_name'         => 'projects_cat',
          'post_types'       =>  array('projects'),
          'slug'             => 'projects-category'          
        )
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($ser_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),

      ));
    }
}

add_action('init','dosanrsite_register_custom_menu');

/* create my custom menu pages */

function dosanrsite_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'dosanrsite Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        dosanrsite_URL.'assets/images/favicon.ico',

        2

    );   

    

}

add_action( 'admin_menu', 'dosanrsite_register_custom_menu_pages' );

require_once ( dosanrsite_ROOT . 'dosanrsite_options/dosanrsite_options.php');

//require_once ( dosanrsite_ROOT . 'dosanrsite_options/home_page_options.php');

//require_once ( dosanrsite_ROOT . 'dosanrsite_options/about_page.php');

//require_once ( dosanrsite_ROOT . 'dosanrsite_options/project_page.php');

//require_once ( dosanrsite_ROOT . 'dosanrsite_options/contact_page.php');




add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:#c5c5d8!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_option('dosanrsite_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }
        .wp-core-ui p .button:hover{
            background-color: #c69923 !important;
            border-color: #c69923 !important;
            color: #fff;
        }
        #reg_passmail{color:#fff;}
    </style>
<?php }
