<?php
global $who_we_are_active;
global $what_we_do_active;
global $find_out_more_active;	

if ($who_we_are_active) {
global	$who_icon;	
global	$who_title;	

//echo '<pre>';print_r($who_icon[sizes][large]);echo '</pre>';
}
		
if ($what_we_do_active) {
global	$what_icon;	
global	$what_title;		
}
		
if ($find_out_more_active) {
global	$find_icon;	
global	$find_title;		
}
?>

<section id="hp-top" class="hp-section">
				
	<div class="col-overlay bg-trans-blk"></div>
	
	<div class="container">
	
		<div class="hp-txt">
			<h2 class="text-center tk-orbitron col-orange"><?php the_title(); ?></h2>
		
			<?php the_content(); ?>	
		</div>
		
		<?php if ($who_we_are_active || $what_we_do_active || $find_out_more_active) { ?>
		
		<nav id="section-links">
			<?php if ($who_we_are_active) { ?>
			<a href="#hp-who-we-are" title="<?php echo $who_title; ?>">
				<span class="icon"><img src="<?php echo $who_icon[sizes][large]; ?>" alt="<?php echo $who_title; ?> icon" class="img-responsive" /></span>
				<span class="title tk-orbitron"><?php echo $who_title; ?></span>
			</a>
			<?php } ?>
			<?php if ($what_we_do_active) { ?>
			<a href="#hp-what-we-do" title="<?php echo $what_title; ?>">
				<span class="icon"><img src="<?php echo $what_icon[sizes][large]; ?>" alt="<?php echo $what_title; ?> icon" class="img-responsive" /></span>
				<span class="title tk-orbitron"><?php echo $what_title; ?></span>
			</a>
			<?php } ?>
			<?php if ($find_out_more_active) { ?>
			<a href="#hp-find-out-more" title="<?php echo $find_title; ?>">
				<span class="icon"><img src="<?php echo $find_icon[sizes][large]; ?>" alt="<?php echo $find_title; ?> icon" class="img-responsive" /></span>
				<span class="title tk-orbitron"><?php echo $find_title; ?></span>
			</a>
			<?php } ?>
		</nav>
		
		<?php } ?>
	
	</div>
	
	<?php if ($who_we_are_active || $what_we_do_active || $find_out_more_active) { ?>
	<button class="scroll-btn section-scroll-btn btn-down">
		<span class="sr-only">Scroll down</span>
		<div class="arrow arrow-left"></div>
		<div class="arrow arrow-right"></div>
	</button>
	<?php } ?>
	
</section>
