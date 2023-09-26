<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php
            $site_description = get_bloginfo( 'description', 'display' );
            $site_name = get_bloginfo( 'name' );
            //for home page
            if ( $site_description && ( is_home() || is_front_page() ) ):
                echo $site_name;echo ' | '; echo  $site_description; 
            endif;
            // for other post pages
            if (!( is_home() ) && ! is_404() && ! is_front_page()):
            the_title(); echo ' | '; echo $site_name;
            endif;
        ?>
	</title>
	 <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Avo onepage themeforest" />
    <meta name="description" content="Avo - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />
    <?php wp_head(); ?>
</head>
<body class="hidden-bar-wrapper">

<div class="page-wrapper rtl">
 	<!-- Main Header-->
    <header class="main-header header-style-three">
    	
		<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?= get_option('dosanrsite_logo_img'); ?>" alt></a></div>
                    </div>
                    
                    <div class="pull-right upper-right">
                    	<div class="info-outer clearfix">
							<!--Info Box-->
							<div class="upper-column info-box">
								<div class="icon-box"><span class="flaticon-24-hours-2"></span></div>
								<ul>
									<li><span><?= get_option('dosanrsite_location');?></li>
								</ul>
							</div>
							
							<!--Info Box-->
							<div class="upper-column info-box">
								<div class="icon-box"><span class="flaticon-call"></span></div>
								<ul>
									<li><span>+ <?= get_option('dosanrsite_phone');?> </span> <br> <?= get_option('dosanrsite_email');?></li>
								</ul>
							</div>
							
							<!--Info Box-->
							<div class="upper-column info-box">
								<ul class="social-icon-two">
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
        </div>
        <!--End Header Upper-->
        
		<!--Header Lower-->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md centered">
							<div class="navbar-header">
								<!-- Toggle Button -->    	
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<?php dosanrsite_menu(); ?>
							</div>
						</nav>
						
						<!-- Main Menu End-->
						<!-- <div class="outer-box clearfix">	 -->
							<!-- Search Btn -->
							<!-- <div class="search-box-btn"><span class="icon fa fa-search"></span></div>	
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<!--End Header Lower-->
		
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                   <a href="<?php bloginfo('url'); ?>"><img src="<?= get_option('dosanrsite_logo_img'); ?>" alt></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
					<!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php bloginfo('url'); ?>"><img src="<?= get_option('dosanrsite_logo_img'); ?>" alt></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
    
    </header>
    <!--End Main Header -->