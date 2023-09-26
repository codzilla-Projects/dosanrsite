	<!-- Footer Style Two -->
    <footer dir="rtl" class="footer-style-two" style="background-image: url(<?php echo dosanrsite_URL ."assets/images/background/6.jpg";?>)">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
							<div class="logo">
								<a href="<?php bloginfo('url'); ?>"><img src="<?= get_option('dosanrsite_logo_footer_img') ?>" alt="" /></a>
							</div>
							<div class="text"><?= get_option('footer_content'); ?></div>
							<ul class="contact-link">
								<li><span>اتصل بنا : </span> <?= get_option('dosanrsite_phone');?> +</li>
								<li><span>راسلنا : </span> <?= get_option('dosanrsite_email');?></li>
								<li><span>موقعنا : </span><?= get_option('dosanrsite_location');?></li>
							</ul>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">
							<div class="footer-title">
								<h4>أخر الاخبار </h4>
							</div>
							<!-- Footer Column -->
							<div class="widget-content">
								<?php
									$no = 2;
				                    $news = dosanrsite_get_news_footer($no);
				                    if($news->have_posts()) : 
				                    while($news->have_posts()) : $news->the_post(); 
				                ?>
								<div class="post">
									<div class="thumb"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a></div>
									<h4><a href="<?php the_permalink(); ?>">
						        	<?php  the_title(); ?>
										
									</a></h4>
									<span class="date"><?php the_time('j') ?> <?php the_time('M') ?></span>
								</div>
								<?php endwhile; wp_reset_query(); endif ?>		
							</div>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget newsletter-widget">
							<div class="footer-title">
								<h4>تابعنا على مواقع التواصل الاجتماعى </h4>
							</div>
							<div class="text">يمكنك معرفة اخر الاخبار على صفحاتنا على مواقع التواصل الاجتماعى </div>
							<ul class="social-icon-one">
								<li class="title">تابعنا:</li>
								<?php $facebook = get_option('dosanrsite_fb');  
                                    if(!empty($facebook)) :
	                                ?>
	                                <li><a href="<?= $facebook; ?>"><span class="fa fa-facebook-f"></span></a></li>
	                                <?php endif; ?>
	                                <?php $twitter = get_option('dosanrsite_twitter');  
	                                    if(!empty($twitter)) :
	                                ?>
	                                <li><a href="<?= $twitter; ?>"><span class="fa fa-twitter"></span></a></li>
	                                <?php endif; ?>
	                                <?php $instagram = get_option('dosanrsite_insta');  
	                                    if(!empty($instagram)) :
	                                ?>
	                                <li><a href="<?= $instagram; ?>"><span class="fa fa-instagram"></span></a></li>
	                                <?php endif; ?>

	                                <?php $youtube = get_option('dosanrsite_youtube');  
	                                    if(!empty($youtube)) :
	                                ?>
	                                <li><a href="<?= $youtube; ?>"><span class="fa fa-youtube"></span></a></li>
	                                <?php endif; ?>
	                                <?php $linkedin = get_option('dosanrsite_linkedin');  
	                                    if(!empty($linkedin)) :
	                                ?>
	                                <li><a href="<?= $linkedin; ?>"><span class="fa fa-linkedin"></span></a></li>
	                                <?php endif; ?>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="clearfix">
					<div class="centered">
						<?php dosanrsite_footer_menu(); ?>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-multiply"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="https://expert-themes.com/html/sawmall/index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-toped scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
<?php  wp_footer(); ?>
</body>
</html>