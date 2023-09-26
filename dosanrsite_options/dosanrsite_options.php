<?php 

function main_content_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['dosanrsite_save'] ) && !empty( $_POST['dosanrsite_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['dosanrsite_map_code','footer_content'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}

	}

?>
	<div class="container-fluid text-right padding-right-4">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center dosanrsite-title"><span>General Settings</span></h1>
					</header>
				</div>
					<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>
						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>
						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>
						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back p-5" id="v-pills-tabContent">
						<form class="form-horizontal" method="post" action="#">

						    <div class="tab-content" id="v-pills-tabContent">

						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

									<div class="form-group">

									  <label for="dosanrsite_website_logo" class="col-sm-12 text-right  control-label text-white">Header Logo</label>

									  <div class="col-sm-12 text-right ">

									    <input class="first_img_url dosanrsite_half" type="text" name="dosanrsite_logo_img" size="60" value="<?php echo get_option('dosanrsite_logo_img'); ?>">

									    <a href="#" class="first_img_upload btn btn-info">Choose</a>

									    <img class="first_img" src="<?php echo get_option('dosanrsite_logo_img'); ?>" height="100" style="max-width:100%" />

									  </div>

									</div>

									<div class="form-group">

									  <label for="dosanrsite_website_logo_footer" class="col-sm-12 text-right  control-label text-white">Footer Logo</label>

									  <div class="col-sm-12 text-right ">

									    <input class="second_img_url dosanrsite_half" type="text" name="dosanrsite_logo_footer_img" size="60" value="<?php echo get_option('dosanrsite_logo_footer_img'); ?>">

									    <a href="#" class="second_img_upload btn btn-info">Choose</a>

									    <img class="second_img" src="<?php echo get_option('dosanrsite_logo_footer_img'); ?>" height="100" style="max-width:100%" />

									  </div>

									</div>

						        </div>

						        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

									<div class="form-group">

										<label for="dosanrsite_phone" class="col-sm-12 text-right  control-label text-white">Phone Number</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_phone" name="dosanrsite_phone" value="<?php echo get_option('dosanrsite_phone'); ?>">

										</div>

									</div>	

									<div class="form-group">

										<label for="dosanrsite_email" class="col-sm-12 text-right  control-label text-white">E-mali Address</label>

										<div class="col-sm-12 text-right ">

											<input type="email" class="form-control text-right" id="dosanrsite_email" name="dosanrsite_email" value="<?php echo get_option('dosanrsite_email'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_location" class="col-sm-12 text-right  control-label text-white">Location</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control text-right" id="dosanrsite_location" name="dosanrsite_location" value="<?php echo get_option('dosanrsite_location'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_map" class="col-sm-12 text-right  control-label text-white">Google Map</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control text-right" id="dosanrsite_map" name="dosanrsite_map" value="<?php echo get_option('dosanrsite_map'); ?>">

										</div>

									</div>

							    </div>	      

								<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

									<div class="form-group">

										<label for="dosanrsite_fb" class="col-sm-12 text-right  control-label text-white">Facebook</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_fb" name="dosanrsite_fb" value="<?php echo get_option('dosanrsite_fb'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_twitter" class="col-sm-12 text-right  control-label text-white">Twitter</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_twitter" name="dosanrsite_twitter" value="<?php echo get_option('dosanrsite_twitter'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_youtube" class="col-sm-12 text-right  control-label text-white">Youtube</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_youtube" name="dosanrsite_youtube" value="<?php echo get_option('dosanrsite_youtube'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_insta" class="col-sm-12 text-right  control-label text-white">Instagram</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_insta" name="dosanrsite_insta" value="<?php echo get_option('dosanrsite_insta'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_linkedin" class="col-sm-12 text-right  control-label text-white">Linked In</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_linkedin" name="dosanrsite_linkedin" value="<?php echo get_option('dosanrsite_linkedin'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="dosanrsite_whatapp" class="col-sm-12 text-right  control-label text-white">Whats App</label>

										<div class="col-sm-12 text-right ">

											<input type="text" class="form-control" id="dosanrsite_whatapp" name="dosanrsite_whatapp" value="<?php echo get_option('dosanrsite_whatapp'); ?>">

										</div>

									</div>

								</div>

								<div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

								<div class="form-group text-left">
										<label for="footer_content" class="col-sm-6 control-label text-white">Footer Content</label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('footer_content'), 'footer_content',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content','class'=>'form-control',) );  ?>
										</div>
									</div>

							    </div>	

						    </div>

							<div class="form-group">

								<div class="col-sm-12">

								<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 dosanrsite_save_route" name="dosanrsite_save" value="Save Settings">

								</div>

							</div>

						</form>
					</div>
				</div>
			</div>

		</div><!-- /container -->

<?php

}