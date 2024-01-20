<?php

/**

 * Template Name: Service

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
          <img src="<?php echo $service_banner_image = get_field( 'service_banner_image' ); ?>" alt="service" class="d-block w-100 zoombanner">
          <div class="carousel-caption  d-md-block">
            <h2><?php echo $service_banner_title = get_field( 'service_banner_title' ); ?></h2>
            <p><?php echo $service_banner_sub_title = get_field( 'service_banner_sub_title' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="help_business m_t_100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-">
        <div class="help_budiness_content">
          <h3><?php echo $services_section_title_1 = get_field( 'services_section_title_1' ); ?></h3>
          <p><?php echo $services_section_descriptions_1 = get_field( 'services_section_descriptions_1' ); ?></p>

          <h3><?php echo $services_section_title_2 = get_field( 'services_section_title_2' ); ?></h3>
          <p><?php echo $services_section_descriptions_2 = get_field( 'services_section_descriptions_2' ); ?></p>

          <h3><?php echo $services_section_title_3 = get_field( 'services_section_title_3' ); ?></h3>
          <p><?php echo $services_section_descriptions_3 = get_field( 'services_section_descriptions_3' ); ?></p>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-">
        <img src="<?php echo $services_section_image = get_field( 'services_section_image' ); ?>" alt="help business" class="img-fluid">
      </div>
    </div>
  </div>
</section>


<section class="what_provide">
  <div class="container what_provide_bg">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-">
        <div class="section_title text-center">
          <h2><?php echo $services_provide_section_title = get_field( 'services_provide_section_title' ); ?></h2>
          <p><?php echo $services_provide_section_sub_title = get_field( 'services_provide_section_sub_title' ); ?></p>
        </div>
      </div>
      <div class="row">
        <?php $services = get_posts(array('post_type' => 'services', 'posts_per_page' => -1, 'orderby' => 'meta_value', 'order' => 'ASC'));

                      ?>
                      <?php $count = 0; ?>
                      <?php foreach($services as $services): ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col- <?php echo ($count == 0) ? '' : ''; ?>">
                          <div class="card">
                            <div class="overflow_img">
                              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($services->ID)) ?>" class="card-img-top" alt="">
                            </div>
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $services->post_title; ?></h3>
                              <p class="card-text"><?php echo $services->post_content; ?></p>
                            </div>
                          </div>
                      </div> <!-- .col-lg-4 col-md-4 col-sm-4 col- -->
                      <?php $count++; ?>
                      <?php endforeach; ?>
      </div>
</section>


<section class="introduce_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-">
        <h3><?php echo $service_cta_title = get_field( 'service_cta_title' ); ?></h3>
        <!--<button class="btn get_touch " type="button">-->
        <!--  <a href="<?php echo $service_cta_btn_link = get_field( 'service_cta_btn_link' ); ?>"><?php echo $service_cta_btn_name = get_field( 'service_cta_btn_name' ); ?></a>-->
        <!--</button>-->
        <a class="btn get_touch" href="<?php echo $service_cta_btn_link = get_field( 'service_cta_btn_link' ); ?>"><?php echo $service_cta_btn_name = get_field( 'service_cta_btn_name' ); ?></a>
      </div>
    </div>
  </div>
</section>


<section class="future_section m_t_150 m_b_50">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-">
        <div class="section_title">
           <h2><?php echo $future_title = get_field( 'future_title' ); ?></h2>
           <p><?php echo $future_description = get_field( 'future_description' ); ?></p>
           <!-- <button class="btn get_touch " type="button"> -->
             <a class="btn get_touch " href="<?php echo $future_btn_link = get_field( 'future_btn_link' ); ?>"><?php echo $future_btn_name = get_field( 'future_btn_name' ); ?></a>
           <!-- </button> -->
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-">
        <img src="<?php echo $future_image = get_field( 'future_image' ); ?>" alt="help business" class="img-fluid">
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
