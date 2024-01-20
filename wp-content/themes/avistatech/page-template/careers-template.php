<?php

/**

 * Template Name: Careers

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

<section class="banner">
  <div class="main-tb-banner" id="demo">
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="tab-banner-content"> <img src="<?php echo $careers_banner = get_field( 'careers_banner' ); ?>" alt="Digital Transformation" class="d-block w-100">
          <div class="carousel-caption  d-md-block">
            <h2><?php echo $careers_banner_title = get_field( 'careers_banner_title' ); ?></h2>
            <p><?php echo $careers_banner_sub_title = get_field( 'careers_banner_sub_title' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="career_Section text-center m_t_60 ">
  <div class="container">
    <div class="row ">
      <div class="col-lg-12 col-sm-12 col-md-12 col-">
        <h3 class="m_b_50"><?php echo $careers_title_postion = get_field( 'careers_title_postion' ); ?></h3>
      </div>
    </div>
    <?php //echo do_shortcode( '[contact-form-7 id="119" title="Careers"]' ); ?>


        <div class="row justify-content-center gy-4">
    		<div class="col-12 col-lg-10">
    			<div class="row gy-4">
    				<?php if( have_rows('name_of_positions') ): while( have_rows('name_of_positions') ) : the_row();
    				$courses_name = get_sub_field( 'name' ); $courses_id = uniqid( 'courses-' ); ?>
    				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    					<div class="radio-button industry">
    						<input type="radio" id="<?php echo $courses_id; ?>" name="career-option" value="<?php echo $courses_name; ?>">
    						<label for="<?php echo $courses_id; ?>">
    							<div class="content_middle">
    								<span><?php echo $courses_name; ?></span>
    							</div>
    						</label>
    					</div>
    				</div>
    				<?php endwhile; endif; ?>
    			</div>
    		</div>
        </div>

        <div class="row m_t_100 careerform">
          <div class="col-lg-12 col-sm-12 col-md-12 col-">
            <h3 class="m_b_50">Please fill out the following details</h3>
            <div class="common-form">
              <div class="row  justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6 col-">
                  <input type="text" class="form-control" placeholder="First Name " id="career-firstname" name="firstname" >

                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 col-">
                  <input type="text" class="form-control" placeholder="Last Name " id="career-lastname" name="lastname" >

                </div>
              </div>
              <div class="row  justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6 col-">
                  <input type="text" class="form-control" placeholder="Enter email" name="email" id="career-email">
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 col-">
                  <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" id="career-phone" >
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 col-">
                </div>
               <div class="col-lg-4 col-sm-6 col-md-4 col- text-left customupload">
                 <div class="upload-btn-wrapper">
                   <button class="btn">Upload a file</button>
                   <input type="file" id="careers-file" name="myfile" />
					 <div class="careers-filename">Select files</div>
                 </div>
                 <div class="g-recaptcha" data-sitekey="6Le3ncMfAAAAALJh5kdh33UjoCy_utCh9ONusmJn"></div>
                </div>
              </div>
      		    <div class="row  justify-content-center">
                <div class="col-12 text-center">
                  <button class="btn get_touch " id="careers-submit-btn" type="button">Submit</button>
                </div>
					<div class="col-12 col-lg-8">
						<div id="career-notice" class="mt-4"></div>
					</div>
              </div>
            </div>
          </div>
        </div>

        <style>#career-notice .btn-close {filter: none !important;}.careers-filename {display: block; margin: 10px 0 0 0;}</style>

  </div>
</section>



<?php get_footer(); ?>
