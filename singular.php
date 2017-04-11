<?php get_header(); ?>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();
      	the_title();
      	the_content();
      	the_date();
    endwhile; 
else :
    _e( 'Sorry, no posts matched your criteria.', 'devhub' );
endif;
wp_reset_postdata();
?>
<?php get_footer(); ?>