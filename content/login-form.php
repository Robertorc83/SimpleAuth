<?php
	$register_url = get_option( 'cl_register_url', '');
	$restore_url  = get_option( 'cl_restore_url', '');
?>
<div class="simpleauth-container">		

	<form class="simpleauth-form" method="post" action="#">
			
		<fieldset>
			<div class="simpleauth-field">
				<input class="simpleauth-field-username" type="text" name="log" placeholder="<?php echo __( 'Username', 'simpleauth' ); ?>">
			</div>
			
			<div class="simpleauth-field">
				<input class="simpleauth-field-password" type="password" name="pwd" placeholder="<?php echo __( 'Password', 'simpleauth' ); ?>">
			</div>
		</fieldset>
		
		<fieldset>
			<input class="simpleauth-field" type="submit" value="<?php echo __( 'Log in', 'simpleauth' ); ?>" name="submit">
			<input type="hidden" name="action" value="login">
			
			<div class="simpleauth-field simpleauth-field-remember">
				<input type="checkbox" name="rememberme" value="forever">
				<label><?php echo __( 'Remember?', 'simpleauth' ); ?></label>
			</div>
		</fieldset>
		
		<div class="simpleauth-form-bottom">
			
			<?php if ( $restore_url != '' )
				echo "<a href='$restore_url' class='simpleauth-form-pwd-link'>". __( 'Lost password?', 'simpleauth' ) ."</a>";
			?>

			<?php if ( $register_url != '' )
				echo "<a href='$register_url' class='simpleauth-form-register-link'>". __( 'Register', 'simpleauth' ) ."</a>";
			?>
						
		</div>
		
	</form>

</div>
