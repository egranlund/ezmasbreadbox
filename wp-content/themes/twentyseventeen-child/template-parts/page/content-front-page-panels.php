<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;

?>

<article id="panel<?php echo $twentyseventeencounter; ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php
	if (get_the_title() === 'Contact')
		get_template_part( 'template-parts/page/content', 'page-panel-contact' );
	else if (get_the_title() === 'Menu')
		get_template_part( 'template-parts/page/content', 'page-panel-menu' );
	else if (get_the_title() === 'Specials')
		get_template_part( 'template-parts/page/content', 'page-panel-specials' );
	?>

</article><!-- #post-## -->
