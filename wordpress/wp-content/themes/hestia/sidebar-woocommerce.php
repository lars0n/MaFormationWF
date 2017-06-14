<?php
/**
 * The Sidebar for WooCommerce containing the main widget areas.
 *
 * @package Hestia
 */

$class_to_add = '';
$hestia_sidebar_layout = '';

$hestia_sidebar_layout = get_theme_mod( 'hestia_page_sidebar_layout', 'full-width' );

if ( is_active_sidebar( 'sidebar-woocommerce' ) ) { ?>
	<aside id="secondary" class="col-md-3" role="complementary">
		<?php dynamic_sidebar( 'sidebar-woocommerce' ); ?>
	</aside><!-- .sidebar .widget-area -->
	<?php
} elseif ( is_customize_preview() ) {
	hestia_sidebar_placeholder( $class_to_add );
} ?>
