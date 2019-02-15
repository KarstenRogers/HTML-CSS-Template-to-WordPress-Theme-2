<?php
/**
 * The template for displaying all single posts.
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

<div class="container">
<div class="row">
	<section id="primary" class="col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php bootstrapwp_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>