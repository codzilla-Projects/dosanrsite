<?php 
/**
** Template Name: Blog Template
**/
get_header(); 
?>
    <!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<div class="sec-title centered">
            	<h2>اخر الاخبار</h2>
                <div class="separate"></div>
            </div>
			<div class="row">
				<?php
				$no = 6;
                    $news = dosanrsite_get_posts($no);
                    if($news->have_posts()) : 
                    while($news->have_posts()) : $news->the_post(); 
                ?>
				<!-- News Block -->
				<div class="news-block col-md-4">
					<div class="inner-box">
						<div class="image">
							<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><?php the_author(); ?></li>
								<li><?php the_time('j') ?> <?php the_time('M') ?></li>
							</ul>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="<?php the_permalink(); ?>" class="read-more">أقرا المزيد </a>
						</div>
					</div>
				</div>
				<?php endwhile;?>
				<div class="dosanrsite-panigations-block justify-content-center mt-5">
                        <?php    
                            $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $news->max_num_pages,
                               'show_all'           => false,
                               'end_size'           => 1,
                               'mid_size'           => 2,
                               'prev_next'          => true,
                               'next_text'          => '<i class="fa fa-arrow-right"></i>',
                               'prev_text'          => '<i class="fa fa-arrow-left"></i>',
                               'type'               => 'list',
                              );
                        ?>
                        <?php echo paginate_links($args); ?>
                </div>
				<?php wp_reset_query(); endif ?>			
			</div>
		</div>
	</section>
	<!-- End News Section -->
<?php 
get_footer(); 
?>