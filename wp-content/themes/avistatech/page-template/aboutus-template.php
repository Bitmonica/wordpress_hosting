<?php

/**

 * Template Name: About Us

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
        <div class="tab-banner-content">
          <img src="<?php echo $about_us_banner = get_field( 'about_us_banner' ); ?>" alt="Sharing our Knowledge of the Industry" class="d-block w-100">
          <div class="carousel-caption  d-md-block">
             <h2><?php echo $about_us_banner_title = get_field( 'about_us_banner_title' ); ?></h2>
             <p><?php echo $about_us_banner_sub_title = get_field( 'about_us_banner_sub_title' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="About_Section m_t_80">
  <div class="container">
    <div class="row">
      <!--<div class="col-sm-12 col-sm-12 col-md-12 col-">-->
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
               <div class="normal_pargraph">
           <p class="aboutstrong">
             <?php echo $about_description = get_field( 'about_description' ); ?>
           </p>
        </div>
          </div>
          <div class="col-sm-2">
          </div>
      <!--</div>-->
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-">
        <div class="section_title text-center m_t_80">
          <h2><?php echo $our_company_title = get_field( 'our_company_title' ); ?></h2>
          <p class="m_b_50"><?php echo $our_company_sub_title = get_field( 'our_company_sub_title' ); ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col- normal_pargraph">
        <p><?php echo $our_left_company_description = get_field( 'our_left_company_description' ); ?></p>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col- normal_pargraph">
        <p><?php echo $our_right_company_description = get_field( 'our_right_company_description' ); ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
