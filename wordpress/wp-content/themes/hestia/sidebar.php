<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Hestia
 */

$class_to_add = '';
$hestia_sidebar_layout = '';

$default_blog_layout = hestia_sidebar_on_single_post_get_default();
$hestia_sidebar_layout = get_theme_mod( 'hestia_blog_sidebar_layout', $default_blog_layout );

if ( $hestia_sidebar_layout === 'sidebar-right' ) {
	$class_to_add = 'col-md-offset-1';
}




if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<aside id="secondary" class="col-md-3 blog-sidebar <?php echo esc_attr( $class_to_add ); ?>" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
	<?php
} elseif ( is_customize_preview() ) {
	hestia_sidebar_placeholder( $class_to_add );
} ?>
