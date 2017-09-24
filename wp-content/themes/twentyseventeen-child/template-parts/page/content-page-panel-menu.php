<?php
/**
 * Template part for displaying menu panel
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// get all of the food menu posts
$food_menu_posts = get_posts( array( 'post_type' => 'wp_food_menu' ) );

// get all of the menu items for each menu post
foreach ($food_menu_posts as $food_menu_post) {
	
	echo '<script>console.log("food menu name: '.get_the_title($food_menu_post).'");</script>';
	
	$food_menu = array();
	$food_menu[] = get_the_title($food_menu_post);
	
	$custom_fields = get_post_custom($food_menu_post->ID);
	foreach ( $custom_fields as $custom_field_name => $custom_field_values ) {
		
		if ( ($custom_field_name != '_edit_last') && ($custom_field_name != '_edit_lock') ) {
			
			$food_menu_items = array();
			$food_menu_items[] = $custom_field_name;
			
			foreach ( $custom_field_values as  $custom_field_value )
				$food_menu_items[] = $custom_field_value;
			
			$food_menu[] = $food_menu_items;
		}
	}
	
	$food_menus[] = $food_menu;
}
?>

<script type="text/javascript">
	// creating the food menus JSON object for JS
	var food_menus = <?php echo json_encode( $food_menus ) ?>;
</script>

<div class="panel-content">
	<div class="wrap">
		
		<!-- TODO:  THIS IS EACH PANEL HEADER -->
		<?php the_title( '<h2 class="entry-title" style="text-align: center;">', '</h2>' ); ?>
		<nav class="main-navigation">
			<ul style="text-align: center;">
				<?php
				foreach ( $food_menu_posts as $food_menu_post )
					echo '<li><a onclick="changeMenu(\''.get_the_title($food_menu_post).'\')">'.get_the_title($food_menu_post).'</a></li>';
				?>
			</ul>
		</nav>
	</div><!-- .wrap -->
</div><!-- .panel-content -->

<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );
	$ratio = $thumbnail[2] / $thumbnail[1] * 100;
?>

	<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
		<div class="panel-image-prop" style="padding-top: 60px">
			
			<!-- DISPLAY THE SELECTED MENU -->
			<ul id="selected-menu"></ul>
			
		</div>
	</div><!-- .panel-image -->
	
<?php endif; ?>