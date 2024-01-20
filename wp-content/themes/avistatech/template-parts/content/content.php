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


<div class=" col-lg-6  col-sm-12 col-md-12 col-">
    <div class="card">
      <div class="overflow_img">
      	<?php twenty_twenty_one_post_thumbnail(); ?>

      </div>
      <div class="card-body">
      	<?php if ( is_singular() ) : ?>
			<?php the_title( '<h2 class="card-title">', '</h3>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h3 class="card-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php endif; ?>

        <p><?php echo wp_trim_words( get_the_content(), 15, '..' ); ?></p>
         <a href="<?php the_permalink(); ?>">Readmore <i class="fa fa-angle-right" aria-hidden="true"></i>
      </div>
    </div>
</div>
