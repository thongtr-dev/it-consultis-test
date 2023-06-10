<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package it-consultis
 */

?>

<footer id="colophon" class="site-footer bg-itc-light-gray p-4 w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">
	<div class="max-w-[1140px] mx-auto">
		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'it-consultis')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf(esc_html__('Proudly powered by %s', 'it-consultis'), 'WordPress');
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'it-consultis'), 'it-consultis', '<a href="http://thongtruong.com/">Thong Truong</a>');
			?>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>