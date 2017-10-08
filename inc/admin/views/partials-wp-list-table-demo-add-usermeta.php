<?php

/**
 * The plugin area to admin the usermeta
 */

	if( current_user_can('edit_users' ) ) { ?>
		<h2> <?php echo __('Add a Usermeta for ' . $user->display_name . ' (' . $user->user_login . ')', $this->plugin_text_domain ); ?> </h2>
		<br>
		<div class="card">
			<h4> This where you would add a form to perform usermeta operations. </h4>
		</div>
		<br>
		<a href="<?php echo esc_url( add_query_arg( array( 'page' => wp_unslash( $_REQUEST['page'] ) ) , admin_url( 'users.php' ) ) ); ?>"><?php _e( 'Back', $this->plugin_text_domain ) ?></a>
<?php
	}
	else {  
?>
		<p> <?php echo __( 'You are not authorized to perform this operation.', $this->plugin_text_domain ) ?> </p>
<?php   
	}
