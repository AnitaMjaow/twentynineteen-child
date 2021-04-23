<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">	

		<?php
	the_content();
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<div class="container mt-5 mb-5">
		<div class="row">
			<?php get_template_part( 'template-parts/content/content', 'project' );?>
		</div>
	</div>

	<div class="container mt-5 mb-5">
		<div class="row">
			<?php get_template_part( 'template-parts/content/content', 'blogg' );?>
		</div>
	</div>

<?php
get_footer();
