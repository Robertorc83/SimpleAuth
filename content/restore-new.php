<div class="simpleauth-container">
	<form class="simpleauth-form">
		
		<fieldset>
			<div class="simpleauth-field">
				<label><?php echo __( 'Your new password is', 'simpleauth' ); ?></label>
				<input type="text" name="pass" value="<?php echo $new_password; ?>">
			</div>
		
		</fieldset>
		
		<div class="simpleauth-form-bottom">
				
			<?php if ( $login_url != '' )
				echo "<a href='$login_url' class='simpleauth-form-login-link'>". __( 'Log in', 'simpleauth') ."</a>";
			?>
						
		</div>
	</form>
</div>