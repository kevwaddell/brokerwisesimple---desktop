<?php
global $who_icon;	
global $who_title;	

$who_text = get_field('who_section_text', 'options');
?>

<section id="hp-who-we-are" class="hp-section bg-col-blk bg-grid">
	
	<div class="container">
				
		<div class="hp-txt">
			<div class="section-icon">
				<img src="<?php echo $who_icon[sizes][large]; ?>" alt="<?php echo $who_title; ?> icon" class="img-responsive" />
			</div>
			<h3 class="tk-orbitron col-orange"><?php echo $who_title; ?></h3>
			
			<?php echo $who_text; ?>
		</div>
	
	</div>
	
	<button class="scroll-btn section-scroll-btn btn-down">
		<span class="sr-only">Scroll down</span>
		<div class="arrow arrow-left"></div>
		<div class="arrow arrow-right"></div>
	</button>
	
</section>
