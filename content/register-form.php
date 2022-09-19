<div class="simpleauth-container simpleauth-full-width">
	<form class="simpleauth-form" method="post" action="#">

		<fieldset>

			<div class="simpleauth-field">
				<input class="simpleauth-field-username" type="text" name="username" value="" placeholder="<?php echo __( 'Username', 'simpleauth' ); ?>">
			</div>
			
			<div class="simpleauth-field">
				<input class="simpleauth-field-email" type="email" name="email" value="" placeholder="<?php echo __( 'E-mail', 'simpleauth' ); ?>">
			</div>

			<div class="simpleauth-field-website">
				<label for='website'>Website</label>
				<input type='text' name='website' value=" ">
			</div>
			
			<div class="simpleauth-field">
				<input class="simpleauth-field-password" type="password" name="pass1" value="" autocomplete="off" placeholder="<?php echo __( 'New password', 'simpleauth' ); ?>">
			</div>
			
			<div class="simpleauth-field">
				<input class="simpleauth-field-password" type="password" name="pass2" value="" autocomplete="off" placeholder="<?php echo __( 'Confirm password', 'simpleauth' ); ?>">
			</div>

			<?php /*check if captcha is checked */ if ( get_option( 'cl_antispam' ) == 'on' ) : ?>
				<div class="simpleauth-field">
					<img src="<?php echo plugins_url( 'captcha', __FILE__ ); ?>"/>
					<input class="simpleauth-field-spam" type="text" name="captcha" value="" autocomplete="off" placeholder="<?php echo __( 'Type the text above', 'simpleauth' ); ?>">
				</div>
			<?php endif; ?>

			<?php /*check if custom roles is checked */ if ( get_option( 'cl_chooserole' ) == 'on' ) : ?>
				<?php if ($param['role']) : ?>
				<input type="text" name="role" value="<?php echo $param['role']; ?>" hidden >
				<?php else : ?> 
				<div class="simpleauth-field simpleauth-field-role" <?php if ( get_option( 'cl_antispam' ) == 'on' ) echo 'style="margin-top: 46px;"'; ?> >
					<span><?php echo __( 'Choose your role:', 'simpleauth' ); ?></span>
					<select name="role" id="role">
						<?php
						$newuserroles = get_option ( 'cl_newuserroles' );
						global $wp_roles;
						foreach($newuserroles as $role){
							echo '<option value="'.$role.'">'. translate_user_role( $wp_roles->roles[ $role ]['name'] ) .'</option>';
						}
						?>
					</select>
				</div>
				<?php endif; ?>
			<?php endif; ?>

			<?php /*check if termsconditions is checked */ if ( get_option( 'cl_termsconditions' ) == 'on' ) : ?>
				<div class="simpleauth-field">
					<label class="simpleauth-terms">
						<input name="termsconditions" type="checkbox" id="termsconditions">
						<?php echo get_option( 'cl_termsconditionsMSG' ); ?>
					</label>
				</div>
			<?php endif; ?>

		</fieldset>

		<div>	
			<input type="submit" value="<?php echo __( 'Register', 'simpleauth' ); ?>" name="submit" onclick="this.form.submit(); this.disabled = true;">
			<input type="hidden" name="action" value="register">		
		</div>

	</form>
</div>