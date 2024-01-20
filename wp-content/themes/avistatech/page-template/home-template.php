<?php

/**
 * Template Name: Home Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
?>
	<section class="main_banner">

		<div class="h-banner-slider-main">
               <div class="h-banner-slider single-item">

                 <div class="banner-slide-col">
                    <div class="banner-content">
                    	 <?php
					        //$home_banner_image_one = get_field( 'home_banner_image_one' );
					     ?>
                        <img src="<?php echo the_field('banner_image_first','option'); ?>" alt="Digital Transformation" class="d-block w-100">
                        <div class="carousel-caption  d-md-block">
                            <div class="container">
                                <?php echo the_field('banner_image_text_first','option'); ?>
                                <a href="<?php echo the_field('button_url_first','option'); ?>" class="btn get_touch" target="_blank">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="banner-slide-col">
                    <div class="banner-content">
                    	<?php
					        //$banner_image_two = get_field( 'banner_image_two' );
					     ?>
                        <img src="<?php echo the_field('banner_image_second','option'); ?>" alt="Digital Transformation" class="d-block w-100">
                        <div class="carousel-caption  d-md-block">
                            <div class="container">
                                <?php echo the_field('banner_image_text_second','option'); ?>
                                <a href="<?php echo the_field('button_url_second','option'); ?>" class="btn get_touch" target="_blank">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="banner-slide-col">
                    <div class="banner-content">
                    	<?php
					        //$banner_image_three = get_field( 'banner_image_three' );
					     ?>
                        <img src="<?php echo the_field('banner_image_third','option'); ?>" alt="Digital Transformation" class="d-block w-100">
                        <div class="carousel-caption  d-md-block">
                            <div class="container">
                                <?php echo the_field('banner_image_text_third','option'); ?>
                                <a href="<?php echo the_field('button_url_third','option'); ?>" class="btn get_touch" target="_blank">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

              </div>

               <div class="progressBarContainer progressBarContainer-main">
                <div class="item">
                  <span data-slick-index="0" class="progressBar"></span>
                  <h3><?php echo the_field('banner_title_first','option'); ?></h3>

                </div>
                 <div class="item">
                  <span data-slick-index="1" class="progressBar"></span>
                  <h3><?php echo the_field('banner_title_second','option'); ?></h3>

                </div>
                <div class="item">
                  <span data-slick-index="2" class="progressBar"></span>
                  <h3><?php echo the_field('banner_title_third','option'); ?></h3>
                </div>
								
              </div>

		</div><!-- .h-banner-slider-main -->
	</section>

	<section class="help_section_1 industry_section m_t_80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-">
					<div class="section_title text-center">
						<h2><?php echo $help_us_section_title = get_field( 'help_us_section_title' ); ?></h2>
						<p><?php echo $help_us_section_sub_title = get_field( 'help_us_section_sub_title' ); ?></p>
					</div>
				</div>
				<div class="multisteps-form form-register">
					<!--progress bar-->
					<div class="row">
						<div class="col-12 ml-auto mr-auto mt-5 mb-0">
							<div class="multisteps-form__progress">
								<button class="multisteps-form__progress-btn userinfo js-active" type="button"></button>
								<button class="multisteps-form__progress-btn address" type="button"></button>
								<button class="multisteps-form__progress-btn orderinfo" type="button"></button>
								<button class="multisteps-form__progress-btn otherdetails" type="button"></button>
							</div>
						</div>
					</div>
					<!--form panels-->
					<div class="row">
						<div class="m-auto">
							<form class="multisteps-form__form">
								<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 60">
									<div id="multisteps-avistatech-tost" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
										<div class="d-flex">
											<div class="toast-body"></div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
								</div>
								<!--Step 1-->
								<div class="multisteps-form__panel p-4 rounded stepone  js-active" data-animation="scaleIn">
									<div class="row industryform">
										<h3 class="text-center"><?php echo $industry_title_home_form = get_field( 'industry_title_home_form' ); ?></h3>
										
										<?php if( have_rows('industry') ): while( have_rows('industry') ) : the_row(); 
										$industry_name = get_sub_field( 'name' ); $industry_id = uniqid('industry-'); $industry_image = get_sub_field( 'image' ); $industry_hover_iamge = get_sub_field( 'hover_image' ); ?>
											<div class="col-lg-2 col-md-4 col-sm-6 col-12 m_bt_20">
												<div class="radio-button">
													<input type="radio" id="<?php echo $industry_id; ?>" name="industryradio" value="<?php echo $industry_name; ?>">
													<label for="<?php echo $industry_id; ?>">
														<div class="content_middle"> 
															<div class="icon-img">
																<?php echo wp_get_attachment_image( $industry_image, 'full', false ,['class' => 'img_white'] ); ?>
																<?php echo wp_get_attachment_image( $industry_hover_iamge, 'full', false, ['class' => 'active_hover'] ); ?>
															</div>
															<span><?php echo $industry_name; ?></span>
														</div>
													</label>	
												</div>	
											</div>
										<?php endwhile; endif; ?>
									</div>
									
									<div class="col-12 text-center mt-4 d-none">
										<button id="stepone-btn" class="btn" value="">Next</button>
									</div>
								</div>
								<!--Step 2-->
								<div class="multisteps-form__panel p-4 rounded steptwo" data-animation="scaleIn">
									<div class="row justify-content-center">
										<h3 class="text-center"><?php echo $business_title_home_form = get_field( 'business_title_home_form' ); ?></h3>
										<div class="col-12 col-lg-10">
											<div class="row gy-4">
												<?php if( have_rows('business_need') ): while( have_rows('business_need') ) : the_row();
												$business_id = uniqid( 'business-' ); $business_name = get_sub_field( 'name' );	?>
													<div class="col-12 col-sm-6 col-md-4 col-lg-3">
														<div class="radio-button">
															<input type="checkbox" id="<?php echo $business_id; ?>" name="whatindustry" value="<?php echo $business_name; ?>">
															<label for="<?php echo $business_id; ?>">
																<div class="content_middle"> 
																	<span><?php echo $business_name; ?></span> 
																</div>
															</label>	
														</div>
													</div>
												<?php endwhile; endif; ?>
											</div>
										</div>
									</div>
									
								</div>
								<!--Step 3-->
								<div class="multisteps-form__panel p-4 rounded stepthree" data-animation="scaleIn">
									<div class="row justify-content-center gy-4">
										<h3 class="text-center"><?php echo $engagement_model_title_home_form = get_field( 'engagement_model_title_home_form' ); ?></h3>
										
										<?php if( have_rows('engagement_model') ): while( have_rows('engagement_model') ) : the_row();
										$engagement_id = uniqid( 'engagement-' ); $engagement_name = get_sub_field( 'name' ); $engagement_desc = get_sub_field( 'decription' ); ?>
										<div class="col-12 col-sm-6 col-md-3">
											<div class="radio-button">
												<input type="radio" id="<?php echo $engagement_id; ?>" name="engagementmodel" value="<?php echo $engagement_name; ?>">
												<label for="<?php echo $engagement_id; ?>">
													<div class="content_middle"> 
														<span><?php echo $engagement_name; ?></span> 
													</div>
												</label>
											</div>
											<p class="txt-bottom"><?php echo $engagement_desc; ?></p>
										</div>
										<?php endwhile; endif; ?>
									</div>
								</div>
								<!--Step 4-->
								<div class="multisteps-form__panel p-4 rounded stepfour form-bg common-form" data-animation="scaleIn">
									<div class="row">
										<h3 class="text-center">Please fill out the following details</h3>
										<div class="col-lg-6 col-md-6 col-sm-6 col-">
											<input type="text" class="form-control" id="mf-first-name" placeholder="First Name "> </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-">
											<input type="text" class="form-control" id="mf-last-name" placeholder="Last Name "> </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-">
											<input type="email" class="form-control" id="mf-email" placeholder="Email"> </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-">
											<input type="text" class="form-control"  id="mf-phone"placeholder="Phone Number"> </div>
											<div class="g-recaptcha" data-sitekey="6Le3ncMfAAAAALJh5kdh33UjoCy_utCh9ONusmJn"></div>
										<div class="col-lg-12 text-center button-content">
											<button class="btn" id="stepfour-submit-btn" type="button">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="multishore_section m_t_80">
		<div class="container">
			<div class="multi_header">
				<div class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col- ">
					<h2><?php echo $multishore_title = get_field( 'multishore_title' ); ?></h2>
					<p><?php echo $multishore_sub_title = get_field( 'multishore_sub_title' ); ?></p>
					<a class="btn get_touch" href="<?php echo $multishore_button_link = get_field( 'multishore_button_link' ); ?>"><?php echo $multishore_button_name = get_field( 'multishore_button_name' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<section class="help_section m_t_80 p_bt_20" id="demos">
	  <div class="row">
	    <div class="col-lg-12 col-sm-12 col-md-12 col-">
	      <div class="se-mt section_title text-center">
	        <h2><?php echo $insight_section_title = get_field( 'insight_section_title' ); ?></h2>
	        <p><?php echo $insight_section_sub_title = get_field( 'insight_section_sub_title' ); ?></p>
	      </div>
	    </div>
	  </div>
	  <div class="container insight_card">
	    <div class="col-lg-12 col-sm-12 col-md-12 col-">
	      <div class="loop owl-carousel owl-theme transition">
	      	<?php
			$args = array( 'posts_per_page' => '4' );
			$recent_posts = new WP_Query($args);
			while( $recent_posts->have_posts() ) :
			$recent_posts->the_post() ?>
		        <div class="item">
		          <div class="card bloglisting">
		            <div class="overflow_img">
		            	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		              <img class="card-img-top" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
		            </div>
		            <div class="card-body">
		              <?php the_title( sprintf( '<h3 class="card-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		              <div class="card_hide">
		                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 10, '..' ); ?></p>
		                <a href="<?php echo get_permalink() ?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i>
		                </a>
		              </div>
		            </div>
		          </div>
		        </div>
	        <?php endwhile;
            wp_reset_postdata();
            ?>
	      </div>
	      <div class="see_all text-center">
	        <a class="btn get_touch" href="<?php echo home_url(); ?>/blog/">See All Insights</a>
	        <!--<button class="btn blogreadmore" type="button"><a href="<?php echo home_url(); ?>/blog/">See All Insights</a></button>-->
	      </div>
	    </div>
	  </div>
	  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SHape.png" alt="" class="shape1">
	</section>


	<section class="introduce_section m_t_100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-">
					<h3><?php echo $home_left_cta_title = get_field( 'home_left_cta_title' ); ?></h3>
					<a class="btn get_touch  homectasec" href="<?php echo $home_left_cta_btn_link = get_field( 'home_left_cta_btn_link' ); ?>"><?php echo $home_left_cta_btn_name = get_field( 'home_left_cta_btn_name' ); ?></a>
				</div>
				<div class="col-lg-6 col-lg-6 col-sm-6 col-md-6 col- m_t_40">
					<h3><?php echo $home_right_cta_title = get_field( 'home_right_cta_title' ); ?></h3></h3>
					<a class="btn get_touch homectasec" href="<?php echo $home_right_cta_btn_link = get_field( 'home_right_cta_btn_link' ); ?>"><?php echo $home_right_cta_btn_name = get_field( 'home_right_cta_btn_name' ); ?></a>
				</div>
			</div>
		</div>
	</section>
</script>
<script type="text/javascript">

</script>
<?php get_footer(); ?>