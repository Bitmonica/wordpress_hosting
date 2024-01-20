<?php

/**

 * Template Name: Contact Us

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
	<div class="main-tb-banner"> </div>
</section>


<section class="Contact_section m_t_150">
  <div class="container">
    <div class="row ">

			<div class="col-lg-6">

				<div class="section_title text-center" style="padding-top: 0%;">
          <h2 class="con-tit">Our <span>Offices</span></h2>
        </div>

				  <div class="card msgcard">
				    <div class="card-bodye">
				      <div class="">
								
				        <div id="messages_container" class="chat-log">

									<?php $offices = get_posts(array('post_type' => 'offices', 'posts_per_page' => -1, 'orderby' => 'meta_value', 'order' => 'ASC'));

                      ?>
                      <?php $count = 0; ?>
                      <?php foreach($offices as $offices): ?>
                      <div class="chat-log_item chat-log_item-own z-depth-0 <?php echo ($count == 0) ? '' : ''; ?>">
                          <div class="container">
                            <div class="row">
                                <h3><?php echo $offices->post_title; ?></h3>
                                        <div class="col-lg-12">
                                            <div class="location">

                                                <p><span><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/location.svg" alt="Card image cap"></span><?php echo $offices_address = get_field('offices_address', $offices->ID); ?></p>
                                                <p><span><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg" alt="Card image cap"></span><?php echo $office_email = get_field('office_email', $offices->ID); ?></p>
                                                <p><span><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/direction.svg" alt="Card image cap"></span><a href="<?php echo $office_google_map_link = get_field('office_google_map_link', $offices->ID); ?>" target="_blank">Get Directions <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>

                                            </div>
                                        </div>
                            </div>
                          </div>

                      </div> <!-- .chat-log_item chat-log_item-own z-depth-0 -->
                      <?php $count++; ?>
                      <?php endforeach; ?>

				        </div>
				      </div>
				    </div>
				  </div>
			</div>

      <div class="col-lg-6">
		  <div class="h-100 position-relative">
			  <div class="position-sticky" style="top: 110px;">
				  <?php echo do_shortcode( '[contact-form-7 id="118" title="Contact form"]' ); ?>
			  </div>
		  </div>
         
      </div>
    </div>
  </div>
</section>

<script type="javascript">

function scrollDown() {
  jQuery('#messages_container').animate({scrollTop:jQuery('#messages_container').prop('scrollHeight')}, 1000);
}

</script>



<?php get_footer(); ?>
