<?php 
	get_header();
?> 
	<section class="services-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
               <?php 
                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_id   = $category->cat_ID;
                    $services = dosanrsite_get_service_with_tax($cat_id);
                    if($services->have_posts()) :
                 ?>
                <div class="row"> 	 
                <?php                                                   
                    while($services->have_posts()) : $services->the_post(); 
                    $service_title = get_the_title();
                ?>
					<!-- Services Block -->
				<div class="services-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="<?php the_post_thumbnail_url();  ?>" alt= ""/>
							<!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
										<div class="icon flaticon-chair"></div>
										<div class="text"><?php the_content();?></div>
										<a href="<?php the_permalink();?>" class="theme-btn btn-style-two"><span class="txt">المزيد</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="lower-box">
							<h3><a href="<?php the_permalink();?>"><?php echo wp_trim_words( $service_title ,8, ' ...' );?></a></h3>
						</div>
					</div>
				</div>
                    <?php endwhile; ?> 
					<div class="dosanrsite-panigations-block justify-content-center mt-5">
                    <?php     
                            $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $services->max_num_pages,
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
                  <?php wp_reset_query(); ?>
                <?php endif ?>
            </div>
		</div>
		</div>
	</section>
<?php get_footer(); ?>