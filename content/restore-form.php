<div class="simpleauth-container">
	<form class="simpleauth-form" method="post" action="#">

		<fieldset>
		
			<div class="simpleauth-field">
				<input class="simpleauth-field-username" type="text" name="username" value="" placeholder="<?php echo __( 'Username (or E-mail)', 'simpleauth' ) ; ?>">
			</div>

			<div class="simpleauth-field-website">
				<label for='website'>Website</label>
	    		<input type='text' name='website' value=" ">
	    	</div>
		
		</fieldset>
		
		<div>	
			<input type="submit" value="<?php echo __( 'Restore password', 'simpleauth' ); ?>" name="submit">
			<input type="hidden" name="action" value="restore">		
		</div>

	</form>
</div>