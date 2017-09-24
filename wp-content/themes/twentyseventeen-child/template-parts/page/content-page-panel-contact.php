<?php
/**
 * Template part for displaying contact panel
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;

?>

<div class="panel-content">
	<div class="wrap">
		
		<header class="entry-header">
			<!-- TODO:  THIS IS EACH PANEL HEADER -->
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<aside class="widget-area" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
						<div class="widget-column footer-widget-1">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
					<?php } ?>
					
				</aside><!-- .widget-area -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
				<div class="widget-column footer-widget-2">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
			<?php } ?>
		</div><!-- .entry-content -->
		
	</div><!-- .wrap -->
</div><!-- .panel-content -->