<?php get_header(); ?>
<section>
<div class="container">
		<div class="row">
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post(); ?>
				<div class="col-xs-12 col-md-4">
				<div class="panel panel-default">
			  	<div class="panel-heading"><div class="panel-title"><?php the_title(); ?></div></div>
			  	<div class="panel-body"><?php the_excerpt(); ?></div>
			  	<div class="panel-footer"><a href="<?php the_permalink(); ?>">more</a></div>
				</div>
				</div>
      	<?php
    endwhile; 
else :
    _e( 'Sorry, no posts matched your criteria.', 'devhub' );
endif;
wp_reset_postdata(); ?>
		</div>
</div>

</section>
<?php get_footer(); ?>