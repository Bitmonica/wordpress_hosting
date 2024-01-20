<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<section class="banner">
	<div class="main-tb-banner" id="demo">
	    <div class="tab-content" id="pills-tabContent">
	      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
	        <div class="tab-banner-content"> <img src="<?php echo the_field('blog_banner_image','option'); ?>" alt="Digital Transformation" class="d-block w-100 zoombanner">
	          <div class="carousel-caption  d-md-block">
	            <h2><?php echo the_field('blog_banner_title','option'); ?></h2>
	            <p><?php echo the_field('blog_banner_sub_title','option'); ?></p>
	          </div>
	        </div>
	      </div>
	    </div>
  </div>
</section>
<section class="insight_section m_t_100 bloglisting">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-8 col-">
        <div class="row insight_card">
       	  <?php
				if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							the_post();

							get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
						}

				} else {

					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content-none' );

				}
			?>

        </div>
        <div class="text-center">
          <div class="pagination">
          	<?php
          	//
				$links = paginate_links( array(
          'prev_next'          => false,
          'type'               => 'array'
        ) );

        if ( $links ) :
            $lefticon = "<img src='".get_template_directory_uri()."/assets/images/icn-left.svg' class='img-fluid' alt='left'>";
            $righticon = "<img src='".get_template_directory_uri()."/assets/images/icn-right.svg' class='img-fluid' alt='left'>";
            if ( $prev_posts_link = get_previous_posts_link( __( $lefticon) ) ) :
                echo $prev_posts_link;
            endif;
            echo join( "", $links );
            if ( $next_posts_link = get_next_posts_link( __($righticon) ) ) :
                echo $next_posts_link;
            endif;
        endif;
          	?>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-4 col- common-form">
        <div class="search-container form-control">
          <form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url('/'); ?>">
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" value="" placeholder="What are you looking for?" name="s" id="s" />
            <button type="submit" id="searchsubmit" value="Search">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
        <div class="section_title text-left m_t_70">
          <h2>Editor's <br>
            <span>Top Picks</span>
          </h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
          	<?php
      			$args = array( 'posts_per_page' => '5' );
      			$recent_posts = new WP_Query($args);
      			while( $recent_posts->have_posts() ) :
      			$recent_posts->the_post() ?>
            <div class="media d-flex">
              <span class="media-left customimage">
              	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              	<img src="<?php echo $url ?>" alt="<?php the_title(); ?>">

              </span>
              <div class="media-body">
                <p class="card-text"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></p>
              </div>
            </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>

          </div>
        </div>

        <div class="blogform">
          <div class="row">
            <div class="col-lg-12 insightstext">
              <h3>Want More Insights? Request a topic for our next article!</h3>
            </div>
          </div>
          <div class="row">
            <?php echo do_shortcode( '[contact-form-7 id="201" title="Blog-Form"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php


get_footer();
