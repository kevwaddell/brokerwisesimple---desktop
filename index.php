<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
	
	<?php 
	$who_we_are_active = get_field('who_active', 'option');
	$what_we_do_active = get_field('what_active', 'option');
	$find_out_more_active = get_field('find_active', 'option');
	$terms_active = get_field('terms_active', 'option');
	$cookies_active = get_field('cookies_active', 'option');
	$privacy_active = get_field('privacy_active', 'option');
	
	if ($who_we_are_active) {
	$who_icon = get_field('who_section_icon', 'option');	
	$who_title = get_field('who_section_title', 'option');	
	}
	
	if ($what_we_do_active) {
	$what_icon = get_field('what_section_icon', 'option');	
	$what_title = get_field('what_section_title', 'option');		
	}
	
	if ($find_out_more_active) {
	$find_icon = get_field('find_section_icon', 'option');	
	$find_title = get_field('find_section_title', 'option');		
	}
	?>

	<?php while ( have_posts() ) : the_post(); ?>
	
	<?php get_template_part( 'parts/sections/section', 'hpwelcome' ); ?>
	
	<?php if ($who_we_are_active) { ?>
	
	<?php get_template_part( 'parts/sections/section', 'whoweare' ); ?>

	<?php } ?>
	
	<?php if ($what_we_do_active) { ?>	
	
	<?php get_template_part( 'parts/sections/section', 'whatwedo' ); ?>
	
	<?php } ?>	
	
	<?php if ($find_out_more_active) { ?>	
	
	<?php get_template_part( 'parts/sections/section', 'findoutmore' ); ?>
	
	<?php } ?>	

		<?php endwhile; ?>
		
	<?php endif; ?>
		
<?php get_footer(); ?>

	
	<?php if ($terms_active) { ?>
	
	<?php get_template_part( 'parts/sections/section', 'terms' ); ?>

	<?php } ?>
	
	<?php if ($cookies_active) { ?>
	
	<?php get_template_part( 'parts/sections/section', 'cookies' ); ?>

	<?php } ?>
	
	<?php if ($privacy_active) { ?>
	
	<?php get_template_part( 'parts/sections/section', 'privacy' ); ?>

	<?php } ?>