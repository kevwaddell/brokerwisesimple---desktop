<?php 
global $reg_statement;
global $address;
global $terms_active;
global $cookies_active;
global $privacy_active;	
 ?>
<footer id="site-info">
	<div class="container">
		<div class="row">
			<div class="col-xs-1">
				<div class="logo-footer"></div>
			</div>
			
			<div class="col-xs-6">
				<?php if ($reg_statement) { ?>
				<small><?php echo $reg_statement; ?></small>
				<?php } ?>
				<?php if ($address) { ?>
				<small><?php echo $address; ?></small>
				<?php } ?>
			</div>
			
			<div class="col-xs-5">
				<nav id="legal-links">
					<?php if ($terms_active) { ?>
					<a href="#terms-and-conditions" data-toggle="modal" data-target="#terms-and-conditions">Terms and Conditions</a>			
					<?php } ?>
					<?php if ($cookies_active) { ?>
					<a href="#cookie-policy" data-toggle="modal" data-target="#cookie-policy">Cookie Policy</a>
					<?php } ?>
					<?php if ($privacy_active) { ?>
					<a href="#privacy-policy" data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a>
					<?php } ?>
				</nav>
			</div>
		</div>
	</div>
</footer>

<button id="back2top" class="hidden"><span class="sr-only">Back to top</span><i class="fa fa-arrow-circle-up fa-2x"></i></button>