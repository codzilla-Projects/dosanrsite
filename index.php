<?php 
/**
** Template Name: Home Page Template
**/
get_header(); ?>
	<!-- Main Slider Two -->
    <section class="main-slider-two">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <?php
                $sliders = dosanrsite_get_sliders();
                if($sliders->have_posts()) : 
                while($sliders->have_posts()) : $sliders->the_post(); 
                $slider_url  = get_post_meta(get_the_ID(),'dosanrsite_slider_link_url',true);
                $slider_text = get_post_meta(get_the_ID(),'dosanrsite_slider_link_text',true);
            ?>
            <div class="slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                <div class="auto-container">
                	<div class="content clearfix">
						<h2><?php the_title(); ?></h2>
						<h3><?php the_content(); ?> </h3>
                    	<div class="link-box">
                    		<?php
                            	if(!empty($slider_url)||($slider_text)):
                            ?> 
							<a href="<?= $slider_url; ?>" class="theme-btn btn-style-one"><span class="txt"><?= $slider_text; ?></span></a>
						<?php endif; ?>
						</div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); endif ?>
        </div>
		
    </section>
    <!--End Main Slider-->

    <!-- Experiance Section -->
	<section dir="rtl" class="experiance-section">
		<div class="auto-container">
			<div class="row clearfix">
			    <?php 
			    	if( have_posts() ) : while ( have_posts() ) : the_post(); 
					  the_content(); 
					endwhile; wp_reset_query(); endif;
			    ?>			
			</div>
		</div>
	</section>
	<!-- End Experiance Section -->
	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>خدمتنا</h2>
				<div class="separate"></div>
			</div>
			<div class="three-item-carousel owl-carousel owl-theme">
				<?php
                    $services = dosanrsite_get_services();
                    if($services->have_posts()) : 
                    while($services->have_posts()) : $services->the_post(); 
                ?>
				<!-- Services Block -->
				<div class="services-block">
					<div class="inner-box">
						<div class="image">
							<img src="<?php the_post_thumbnail_url(); ?>" alt= ""/>
							<!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
										<div class="icon flaticon-chair"></div>
										<div class="text"><?php the_content(); ?></div>
										<a href="<?php the_permalink(); ?>" class="theme-btn btn-style-two"><span class="txt">أقرا المزيد</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="lower-box">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); endif ?>
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	<!-- Gallery Section -->
    <section dir="rtl" class="gallery-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<h2>مشاريعنا المميزة</h2>
                <div class="separate"></div>
            </div>
            
            <!--Gallery Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters project-filter post-filter has-dynamic-filters-counter">
                	<ul class="filter-tabs filter-btns clearfix">
                		<li class="filter active" data-role="button" data-filter=".all"> <a class="filter-text">كل المشاريع  </a></li>
                		<?php
                            $categories = get_terms( array(
                                'taxonomy'   => 'projects_cat',
                                'hide_empty' => 1
                            ) );

                            foreach ( $categories as $key => $cat ) { ?>
                           	<li class="filter" data-role="button" data-filter=".<?php echo $cat->slug; ?>"> <a class="filter-text"><?php echo $cat->name; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="items-container row clearfix filter-layout masonary-layout">
					<?php $the_query = dosanrsite_get_projects(); ; //Check the WP_Query docs to see how you can limit which posts to display ?>
				    <?php if ( $the_query->have_posts() ) : ?>
				      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
				     $termsArray = get_the_terms( $post->ID, "projects_cat" );  //Get the terms for this particular item
				     $termsString = ""; //initialize the string that will contain the terms
				     foreach ( $termsArray as $term ) { // for each term 
				     $termsString .= $term->slug.' '; //create a string that has all the slugs 
				     }
				     ?> 
					<!-- Gallery Block -->
					<div class="gallery-block masonry-item <?= $termsString ?> all col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="" />
								<div class="overlay-box">
									<div class="options">
										<a href="<?php the_permalink(); ?>" class="plus-icon"><span class="icon flaticon-unlink"></span></a>
										<a href="<?php the_post_thumbnail_url(); ?>" class="plus-icon lightbox-image" data-fancybox-group="gallery-one"><span class="icon flaticon-increase-size-option"></span></a>
									</div>
									<div class="content clearfix">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="category"><?php the_excerpt(); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); endif ?>		
				</div>			
			</div>
		</div>
	</section>
	<!-- End Gallery Section -->
	<!-- Team Section -->
	<section dir="rtl" class="team-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>فريق العمل  </h2>
				<div class="separate"></div>
			</div>
			
			<div class="row clearfix three-item-carousel owl-carousel owl-theme">
			<?php
                    $teams = dosanrsite_get_teams();
                    if($teams->have_posts()) : 
                    while($teams->have_posts()) : $teams->the_post(); 
                    $facebook  = get_post_meta(get_the_ID(),'dosanrsite_teams_fb',true);
                	$twitter   = get_post_meta(get_the_ID(),'dosanrsite_teams_tw',true);
                	$linkedin  = get_post_meta(get_the_ID(),'dosanrsite_teams_li',true);
                	$whatsapp   = get_post_meta(get_the_ID(),'dosanrsite_teams_wh',true);
                ?>
				<!-- Team Block -->
				<div class="team-block-two">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="" />
							<!-- Social Nav -->
							<ul class="social-nav">
								<?php
	                            	if(!empty($facebook)):
		                        ?> 
								<li><a href="<?= $facebook?>"><span class="fa fa-facebook-f"></span></a></li>
								<?php endif; ?>
								<?php
	                            	if(!empty($twitter)):
		                        ?> 
								<li><a href="<?= $twitter?>"><span class="fa fa-twitter"></span></a></li>
								<?php endif; ?>
								<?php
	                            	if(!empty($linkedin)):
		                        ?> 
								<li><a href="<?= $linkedin?>"><span class="fa fa-linkedin"></span></a></li>
								<?php endif; ?>
								<?php
	                            	if(!empty($whatsapp)):
		                        ?> 
								<li><a href="<?= $whatsapp?>"><span class="fa fa-whatsapp"></span></a></li>
								<?php endif; ?>
							</ul>
						</div>
						<div class="lower-content">
							<h3><?php the_title(); ?></h3>
							<div class="designation"><?php the_content(); ?></div>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); endif ?>
			
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	<!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <!-- Sec Title -->
			<div class="sec-title centered">
				<h2>عملائنا</h2>
				<div class="separate"></div>
			</div>
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                	<?php
	                    $clients = dosanrsite_get_clients();
	                    if($clients->have_posts()) : 
	                    while($clients->have_posts()) : $clients->the_post(); 
	                ?>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a></figure></li>
                	<?php endwhile; wp_reset_query(); endif ?>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
    <!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<div class="sec-title centered">
            	<h2>اخر الاخبار</h2>
                <div class="separate"></div>
            </div>
			<div class="two-item-carousel owl-carousel owl-theme">
				<?php
                    $news = dosanrsite_get_news();
                    if($news->have_posts()) : 
                    while($news->have_posts()) : $news->the_post(); 
                ?>
				<!-- News Block -->
				<div class="news-block">
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
				<?php endwhile; wp_reset_query(); endif ?>			
			</div>
		</div>
	</section>
	<!-- End News Section -->

		<!-- Default Section -->
	<section dir="rtl" class="default-section margin-top">
		<div class="auto-container">
			<div class="clearfix">	
				<!-- Accordian Column -->
				<div class="accordian-column">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title centered">
							<h2>اسئلة عامة</h2>
							<div class="separate"></div>
						</div>
						
						<!--Accordian Box-->
						<ul class="accordion-box">
							<?php
			                    $questions = dosanrsite_get_questions();
			                    if($questions->have_posts()) : 
			                    while($questions->have_posts()) : $questions->the_post(); 
			                    $first_flag = true;
			                ?>
							<!--Block-->
							<li class="accordion block <?php echo $first_flag ? 'active-block' : '' ?>">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div><?php the_title(); ?></div>
								<div class="acc-content">
									<div class="content">
										<div class="text"><?php the_content(); ?></div>
									</div>
								</div>
							</li>
							<?php $first_flag = false; endwhile; wp_reset_query(); endif ?>			
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Default Section -->

<?php get_footer(); ?>