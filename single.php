<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
    $post_title = get_the_title();
?> 
<?php get_template_part('page_title'); ?>
<!--Sidebar Page Container-->
    <div class="sidebar-page-container single">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="news-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><?php the_author(); ?></li>
                                    <li><?php the_time('j') ?> <?php the_time('M') ?></li>
                                </ul>
                                <h3><?php the_title(); ?></h3>
                                <div class="text">
                                    <?php the_content(); ?>
                                </div>
                            </div>                           
                        </div>
                    </div>                            
                </div>        
            </div>
        </div>
    </div>
<?php endwhile; endif;?>

<?php get_footer(); ?>