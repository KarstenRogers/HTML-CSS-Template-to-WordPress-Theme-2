<?php
/**
 * File used for homepage two column content module
 * 
 * @package WordPress
 */
?>

<div class="greywrap">
  <div class="container">
  <div class="row">

    <?php 
    $the_query = new WP_Query( array('post_type' => 'service', 'posts_per_page' => 3) ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

      <?php while ( $the_query->have_posts() ) : $the_query->the_posts(); ?>

        <?php get_template_part( 'content', 'service' ); ?>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
</div>
</div>