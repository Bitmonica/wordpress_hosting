<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="banner">

		<div class="main-tb-banner" id="demo">
			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			    <div class="tab-banner-content">
			    	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
			    	<img src="<?php echo $url ?>" alt="<?php the_title(); ?>" class="d-block w-100">
			      <div class="carousel-caption  d-md-block">
			      	<?php the_title( '<h2 class="res_font_size">', '</h2>' ); ?>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</section>

	<section class="blog_section m_t_100">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-12 col-sm-12 col-md-12 col-">
	        <div class="normal_pargraph">
	          <?php the_content(); ?>
	        </div>
	        <!--<div class="socila_link">-->
	        <?php
	        $crunchifyURL = urlencode(get_permalink());
	        $crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

	        $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
					$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
					$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
					$whatsappURL = 'https://api.whatsapp.com/send?text='.$crunchifyTitle.'&nbsp; '.$crunchifyURL.'';

	        ?>
	        <!--  <ul class="inline-list">-->
	        <!--    <li>-->
	        <!--      <h4>Share This</h4>-->
	        <!--    </li>-->
	        <!--    <li><a href="<?=$facebookURL?>" target="_blank"><i class="fa fa-facebook link" aria-hidden="true"></i></a></li>-->
	        <!--    <li><a href="<?=$linkedInURL?>" target="_blank"><i class="fa fa-linkedin fb" aria-hidden="true"></i> </a></li>-->
	        <!--    <li><a href="<?=$twitterURL?>" target="_blank"><i class="fa fa-twitter twit" aria-hidden="true"></i> </a></li>-->
	        <!--    <li><a href="<?=$whatsappURL?>" target="_blank"><i class="fa fa-whatsapp wht" aria-hidden="true"></i> </a></li>-->
	        <!--  </ul>-->
       		<!--</div> <!-- .socila_link -->
	      </div>
	    </div>
	  </div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
