<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<section class="banner">
	<div class="main-tb-banner" id="demo">
	    <div class="tab-content" id="pills-tabContent">
	      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
	        <div class="tab-banner-content"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/latest_insight.png" alt="Digital Transformation" class="d-block w-100">
	          <div class="carousel-caption  d-md-block" id="sear-titl">
	            <h2>Search Results</h2>
	          </div>
	        </div>
	      </div>
	    </div>
  </div>
</section>

<section class="insight_section m_t_100 bloglisting">
  <div class="container">
  	<div class="row">
  		<div class="col-lg-2">
  		</div>
      <div class="col-lg-8 col-md-12 col-sm-12 col-" id="sear-res">
	      	<div class="search-container form-control">
	          <form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url('/'); ?>">
	            <label class="screen-reader-text" for="s">Search for:</label>
	            <input type="text" value="" placeholder="What are you looking for?" name="s" id="s" />
	            <button type="submit" id="searchsubmit" value="Search">
	              <i class="fa fa-search"></i>
	            </button>
	          </form>
	        </div>
      </div>
      <div class="col-lg-2">
  		</div>
    </div> 
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-">
        <div class="row insight_card">
       	  <?php
				if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							the_post();

							get_template_part( 'template-parts/content/content-blogsearch', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
						}

				} else {

					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content-blogsearch' );

				}

				
			?>	 	
          
        </div>
      </div>
     
    </div>
  </div>
</section>
<style>#sear-res{padding: 5% 0 12% 0;}</style>
<?php
get_footer();
