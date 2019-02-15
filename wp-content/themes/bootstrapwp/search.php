<?php
/**
 * The template for displaying search results pages.
 *
 * @package bootstrapwp
 */

get_header(); ?>

<?php $bg_img = rwmb_meta('dwp_banner_image', 'type=image');

$bg_url = '';

if (count($bg_img) > '0' ) {
	foreach ($bg_img as $img) {
		$bg = "{$img['full_url']}";
		$bg_url = "background-image: url('" . $bg . "');";
	}
}
?>

<div class="pagewrap" style="<?php echo $bg_url; ?>">
		<header>
			<?php if (rwmb_meta('dwp_banner_text') != '') {
				echo '<h1>';
				echo rwmb_meta('dwp_banner_text');
				echo '<h1>';
			} else {
				the_title( '<h1 class="entry-title">', '</h1>');
			}?>
	</header>	    
</div><!-- /pagewrap -->

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'bootstrapwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php bootstrapwp_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
