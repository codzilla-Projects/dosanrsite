<?php 
/*********************************

Add Link Meta Box To Slider

**********************************/

function dosanrsite_add_slider_data_meta() {

    add_meta_box( "slider_extra_data", "Additional Data" , "dosanrsite_slider_data_callback", array('sliders'), "normal" );
}


add_action( 'add_meta_boxes', 'dosanrsite_add_slider_data_meta' );


/* Display the post meta box. */

function dosanrsite_slider_data_callback( $object, $box ) { 

    $dosanrsite_slider_link_text = esc_attr( get_post_meta( $object->ID, 'dosanrsite_slider_link_text', true ) );
    $dosanrsite_slider_link_url = esc_attr( get_post_meta( $object->ID, 'dosanrsite_slider_link_url', true ) );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="dosanrsite_slider_link_text"><?php _e('Link Text: ','dosanrsite'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="dosanrsite_slider_link_text" class="form-control w-100" value="<?php echo $dosanrsite_slider_link_text; ?>"><br>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="dosanrsite_slider_link_url"><?php _e('Link URL: ','dosanrsite'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="dosanrsite_slider_link_url" class="form-control w-100" value="<?php echo $dosanrsite_slider_link_url; ?>"><br>
                </div>
            </div>
        </div>

    </div>
<?php

}


function dosanrsite_add_teams_data_meta() {

    add_meta_box( "teams_extra_data", "Additional Data" , "dosanrsite_teams_data_callback", array('teams'), "normal" );
}


add_action( 'add_meta_boxes', 'dosanrsite_add_teams_data_meta' );


/* Display the post meta box. */
    function dosanrsite_teams_data_callback( $object, $box ) { 

    $dosanrsite_teams_fb = esc_attr( get_post_meta( $object->ID, 'dosanrsite_teams_fb', true ) );
    $dosanrsite_teams_tw = esc_attr( get_post_meta( $object->ID, 'dosanrsite_teams_tw', true ) );
    $dosanrsite_teams_li = esc_attr( get_post_meta( $object->ID, 'dosanrsite_teams_li', true ) );
    $dosanrsite_teams_wh = esc_attr( get_post_meta( $object->ID, 'dosanrsite_teams_wh', true ) );

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="dosanrsite_teams_fb"><?php _e('Facebook: ','dosanrsite'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="dosanrsite_teams_fb" class="form-control w-100" value="<?php echo $dosanrsite_teams_fb; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="dosanrsite_teams_tw"><?php _e('Twitter: ','dosanrsite'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="dosanrsite_teams_tw" class="form-control w-100" value="<?php echo $dosanrsite_teams_tw; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="dosanrsite_teams_li"><?php _e('Linked In: ','dosanrsite'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="dosanrsite_teams_li" class="form-control w-100" value="<?php echo $dosanrsite_teams_li; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="dosanrsite_teams_wh"><?php _e('Whats App: ','dosanrsite'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="dosanrsite_teams_wh" class="form-control w-100" value="<?php echo $dosanrsite_teams_wh; ?>"><br>
                </div>
            </div>
        </div>
    </div>
<?php

}

add_action( 'save_post', 'dosanrsite_save_custom_meta', 10, 2 );


function dosanrsite_save_custom_meta($post_id){

    
    if( isset($_POST['dosanrsite_slider_link_text']) ){

        update_post_meta($post_id, 'dosanrsite_slider_link_text', $_POST['dosanrsite_slider_link_text']);

    }

    else

        delete_post_meta($post_id,'dosanrsite_slider_link_text');


    if( isset($_POST['dosanrsite_slider_link_url']) ){

        update_post_meta($post_id, 'dosanrsite_slider_link_url', $_POST['dosanrsite_slider_link_url']);

    }

    else

        delete_post_meta($post_id,'dosanrsite_slider_link_url');

    if( isset($_POST['dosanrsite_teams_fb']) ){

        update_post_meta($post_id, 'dosanrsite_teams_fb', $_POST['dosanrsite_teams_fb']);

    }

    else

        delete_post_meta($post_id,'dosanrsite_teams_fb');



    if( isset($_POST['dosanrsite_teams_tw']) ){

        update_post_meta($post_id, 'dosanrsite_teams_tw', $_POST['dosanrsite_teams_tw']);

    }

    else

        delete_post_meta($post_id,'dosanrsite_teams_tw');


    if( isset($_POST['dosanrsite_teams_li']) ){

        update_post_meta($post_id, 'dosanrsite_teams_li', $_POST['dosanrsite_teams_li']);

    }

    else

        delete_post_meta($post_id,'dosanrsite_teams_li');


    if( isset($_POST['dosanrsite_teams_wh']) ){

        update_post_meta($post_id, 'dosanrsite_teams_wh', $_POST['dosanrsite_teams_wh']);

    }

    else

        delete_post_meta($post_id,'dosanrsite_teams_wh');

}