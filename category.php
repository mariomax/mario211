<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_archive_header(); ?>

		<div class="cat-list">
			<h2>Post Categories:</h2>
			<ul>
				<li><a href="/category/web-design">Web Design</a></li>
				<li><a href="/category/graphic-design/">Graphics</a></li>
				<li><a href="/category/photography">Photography</a></li>
				<li><a href="/category/wordpress">WordPress</a></li>
				<li><a href="/category/woocommerce">WooCommerce</a></li>
				<li><a href="/category/squarespace">Squarespace</a></li>
				<li><a href="/category/print">Print</a></li>
			</ul>
		</div>

		<?php astra_content_loop(); ?>

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
