<?php 
function dosanrsite_get_sliders(){
    $args = array(
        'post_type'       => 'sliders',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function dosanrsite_get_services(){
    $args = array(
        'post_type'       => 'services',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function dosanrsite_get_projects(){
    $args = array(
        'post_type'       => 'projects',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function dosanrsite_get_teams(){
    $args = array(
        'post_type'       => 'teams',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function dosanrsite_get_clients(){
    $args = array(
        'post_type'       => 'clients',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function dosanrsite_get_news(){
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}
function dosanrsite_get_posts($no){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
    return $members = new WP_Query( $args );    
}
function dosanrsite_get_news_footer($no){
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );    
}

function dosanrsite_get_questions(){
    $args = array(
        'post_type'       => 'questions',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}
function dosanrsite_get_service_with_tax($term_id){

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  get_option('posts_per_page'),
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}