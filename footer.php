<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package webisabi-febe
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p class="credits twocol pull-left"><?php echo '&copy;' . date('Y') . '&nbsp;' . get_bloginfo ( 'name' ); ?> All rights reserved.</p>
			<p class="credits twocol pull-right">
				<?php echo 'Web development and hosting by <a href="http://webisabihosting.co.uk" target="_blank">WebiSabi</a>'; ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Carousel autoplay fix -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.carousel').carousel({
  		interval: 10000	
  	})
});
</script>
<!-- END Carousel autoplay fix -->
</body>
</html>