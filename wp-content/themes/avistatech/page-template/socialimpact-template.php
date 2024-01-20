<?php

/**

 * Template Name: Our Social Impact

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
          <img src="<?php echo $social_impact_banner_image = get_field( 'social_impact_banner_image' ); ?>" alt="Digital Transformation" class="d-block w-100">
          <div class="carousel-caption  d-md-block">
            <h2><?php echo $social_impact_banner_title = get_field( 'social_impact_banner_title' ); ?></h2>
            <p><?php echo $social_impact_banner_sub_title = get_field( 'social_impact_banner_sub_title' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="Social_impact m_t_150">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-">
        <div class="Social_impact_content normal_pargraph">
          <h3><?php echo $social_impact_title = get_field( 'social_impact_title' ); ?></h3>
          <p><?php echo $social_impact_description = get_field( 'social_impact_description' ); ?></p>
          <h3><?php echo $social_impact_title_second = get_field( 'social_impact_title_second' ); ?></h3>
          <p><?php echo $social_impact_description_second = get_field( 'social_impact_description_second' ); ?></p>
          <img src="<?php echo $social_impact_image = get_field( 'social_impact_image' ); ?>" alt="seva" class="img-fluid">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col- Social_impact_right normal_pargraph">
        <img src="<?php echo $social_impact_right_image = get_field( 'social_impact_right_image' ); ?>" alt="EYe" class="img-fluid">
        <p><?php echo $social_impact_right_description = get_field( 'social_impact_right_description' ); ?></p>
        
            <!--<button class="btn get_touch " type="button">-->
            <a class="btn get_touch" href="<?php echo $social_impact_right_button_link = get_field( 'social_impact_right_button_link' ); ?>"><?php echo $social_impact_right_button_name = get_field( 'social_impact_right_button_name' ); ?>
            </a>
    
            <!--</button>-->
        <h4><?php echo $social_impact_right_title = get_field( 'social_impact_right_title' ); ?></h4>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
