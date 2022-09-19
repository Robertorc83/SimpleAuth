<?php
	global $current_user;
	wp_get_current_user();
	$edit_url = get_option( 'cl_edit_url', '');
	$show_user_information = get_option( 'cl_hideuser' ) == 'on' ? false : true;
?>

<div class="simpleauth-container" >
	<div class="simpleauth-preview">
		<div class="simpleauth-preview-top">
			<a href="<?php echo esc_url( add_query_arg( 'action', 'logout' ) ); ?>" class="simpleauth-preview-logout-link"><?php echo __( 'Log out', 'simpleauth' ); ?></a>	
			<?php if ( $edit_url != '' )
				echo "<a href='$edit_url' class='simpleauth-preview-edit-link'>". __( 'Edit my profile', 'simpleauth' ) ."</a>";
			?>
		</div>
		
		<?php echo get_avatar( $current_user->ID, 128 ); ?>

		<?php // Since 1.1 (show username or not) ?>

		<h4>
			<?php
				if ( $show_user_information ) echo $current_user->user_login;
			 ?>
			<small><?php echo $current_user->user_firstname . ' ' . $current_user->user_lastname; ?></small>
		</h4>
	</div>		
</div>