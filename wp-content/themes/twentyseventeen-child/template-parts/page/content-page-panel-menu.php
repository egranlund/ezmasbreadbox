<?php
/**
 * Template part for displaying menu panel
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;

?>

<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );
	
	// Calculate aspect ratio: h / w * 100%.
	$ratio = $thumbnail[2] / $thumbnail[1] * 100;
?>
	
	<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
		<div class="panel-image-prop" style="padding-top: 60px"><h1>THIS IS MENU</h1></div>
	</div><!-- .panel-image -->
	
<?php endif; ?>

<div class="panel-content">
	<div class="wrap">
		
		<!-- TODO:  THIS IS EACH PANEL HEADER -->
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		
	</div><!-- .wrap -->
</div><!-- .panel-content -->