<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<div class="col-lg-4  col-sm-12 col-md-12 col-">
    <div class="card blogimagediv">
      <div class="overflow_img">
        <?php
        if ( has_post_thumbnail() )
          the_post_thumbnail('airbusimage',array('class' => 'img-responsive'));
        else
          echo '<img class="img-responsive card-img-top" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'images/blank.jpg' . '" alt="" />';
        ?>
      </div>
      <div class="card-body">
        <?php if ( is_singular() ) : ?>
      <?php the_title( '<h2 class="card-title">', '</h3>' ); ?>
    <?php else : ?>
      <?php the_title( sprintf( '<h3 class="card-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    <?php endif; ?>
        
        <p><?php echo wp_trim_words( get_the_content(), 15, '..' ); ?></p>
        
        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
</div>

