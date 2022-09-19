<?php
	global $current_user;
	wp_get_current_user();
?>

<div class="simpleauth-container simpleauth-full-width">
    <form class="simpleauth-form" method="post" action="#">

        <h4><?php echo __( 'General information', 'simpleauth' ); ?></h4>

        <fieldset>

            <div class="simpleauth-field">
                <label><?php echo __( 'First name', 'simpleauth' ); ?></label>
                <input type="text" name="first_name" value="<?php echo $current_user->user_firstname; ?>">
            </div>

            <div class="simpleauth-field">
                <label><?php echo __( 'Last name', 'simpleauth' ); ?></label>
                <input type="text" name="last_name" value="<?php echo $current_user->user_lastname; ?>">
            </div>

            <div class="simpleauth-field">
                <label><?php echo __( 'E-mail', 'simpleauth' ); ?></label>
                <input type="text" name="email" value="<?php echo $current_user->user_email; ?>">
            </div>

        </fieldset>

        <h4><?php echo __( 'Change password', 'simpleauth' ); ?></h4>

        <p class="simpleauth-form-description">
            <?php echo __( "If you would like to change the password type a new one. Otherwise leave this blank.", 'simpleauth' ); ?>
        </p>

        <fieldset>

            <div class="simpleauth-field">
                <label><?php echo __( 'New password', 'simpleauth' ); ?></label>
                <input type="password" name="pass1" value="" autocomplete="off">
            </div>

            <div class="simpleauth-field">
                <label><?php echo __( 'Confirm password', 'simpleauth' ); ?></label>
                <input type="password" name="pass2" value="" autocomplete="off">
            </div>

        </fieldset>

        <div>
            <input type="submit" value="<?php echo __( 'Update profile', 'simpleauth' ); ?>" name="submit">
            <input type="hidden" name="action" value="edit">
        </div>

    </form>
</div>