<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('error');
?>
	
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    
                        <h1><?php esc_html_e( '404 Error', 'melbourne' ); ?></h1>
                        
                    <div class="error-details">
                        This page may have been moved or deleted. Be sure to check your spelling.
                    </div>
                    <div class="error-actions">
                        <a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lg">
                            Go to Home 
                        </a>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>.error-template {padding: 12% 1% 5% 0 ;text-align: center;}
    .error-details {padding: 3%; font-size: 20px;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }</style>

<?php
get_footer();
