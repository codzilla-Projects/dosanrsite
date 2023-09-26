<!--Page Title-->
    <section dir="rtl" class="page-title" style="background: url('<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo dosanrsite_URL ."assets/images/background/2.jpg" ;} else{ echo $page_image;}?>)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<div class="title"><?php the_excerpt(); ?></div>
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="<?php bloginfo('url'); ?>">الصفحة الرئيسية</a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->