<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="tml tml-lostpassword" id="theme-my-login<?php $template->the_instance(); ?>">
	<span class="logo"></span>
	<?php $template->the_action_template_message( 'lostpassword' ); ?>
	<?php $template->the_errors(); ?>
	<form name="lostpasswordform" id="lostpasswordform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'lostpassword' ); ?>" method="post">
		<div class="form-group">
			<input type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="input form-control" placeholder="<?php _e( 'Username or E-mail:', 'theme-my-login' ); ?>" value="<?php $template->the_posted_value( 'user_login' ); ?>" size="20" />
		</div>

		<?php do_action( 'lostpassword_form' ); ?>

		<div class="form-group">
			<input type="submit" name="wp-submit" class="tk-orbitron btn btn-default btn-block" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Get New Password', 'theme-my-login' ); ?>" />
			<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'lostpassword' ); ?>" />
			<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
			<input type="hidden" name="action" value="lostpassword" />
		</div>
	</form>
	<?php $template->the_action_links( array( 'lostpassword' => false ) ); ?>
	<a href="<?php echo get_option('home'); ?>/">Return to website</a>
</div>
