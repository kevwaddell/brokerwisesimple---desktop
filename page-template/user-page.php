<?php 
/*
Template Name: User page
*/
 ?>

<?php get_template_part( 'parts/headers/header', 'user' ); ?>

	<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="wrap-center">	
		<?php the_content(); ?>
	</div>	
	
	<?php endwhile; ?>
	
	<?php endif; ?>

<?php get_template_part( 'parts/footers/footer', 'user' ); ?>