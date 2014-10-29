<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package webisabi-febe
 */
?>
	<div id="secondary" class="widget-area container-fluid" role="complementary">
	<div class="row">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<div class="col-xs-12 col-md-8">
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'ws-febe' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'ws-febe' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
			</div><!-- cols div-->
			<div class="col-xs-6 col-md-4">

		<?php endif; // end sidebar widget area ?>
			</div>
	</div><!-- end row -->
	</div><!-- #secondary -->