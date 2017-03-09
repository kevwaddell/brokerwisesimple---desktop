<?php
global $find_icon;	
global $find_title;	

$find_text = get_field('find_section_text', 'options');
$form = get_field('contact_form', 'options');
//echo '<pre>';print_r($form[id]);echo '</pre>';
?>

<section id="hp-find-out-more" class="hp-section bg-col-grayLt bg-grid">
	
	<div class="container">	
		<div class="hp-txt">
			<div class="section-icon">
				<img src="<?php echo $find_icon[sizes][large]; ?>" alt="<?php echo $find_title; ?> icon" class="img-responsive" />
			</div>
			<h3 class="tk-orbitron col-orange"><?php echo $find_title; ?></h3>
			<?php echo $find_text; ?>
		</div>
		
		<?php if ($form) { ?>
		<?php include (STYLESHEETPATH . '/_/functions/forms-script-cap-name.php'); ?>
			<?php gravity_form($form[id], false, true, false, '', true); ?>
		<?php } ?>
	</div>
	
</section>