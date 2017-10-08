<?php

/**
 * The plugin area to view the usermeta
 */

	if( current_user_can('edit_users' ) ) { ?>
		<h2> <?php echo __('Displaying Usermeta for ' . $user->display_name . ' (' . $user->user_login . ')', $this->plugin_text_domain ); ?> </h2>
<?php

		$usermeta = get_user_meta( $user_id );
		echo '<div class="card">';
		foreach( $usermeta as $key => $value ) {
			$v = (is_array($value)) ? implode(', ', $value) : $value;            
			echo '<p">'. $key . ': ' . $v . '</p>';
		}
		echo '</div><br>';
?>
		<a href="<?php echo esc_url( add_query_arg( array( 'page' => wp_unslash( $_REQUEST['page'] ) ) , admin_url( 'users.php' ) ) ); ?>"><?php _e( 'Back', $this->plugin_text_domain ) ?></a>
<?php
	}
	else {  
?>
		<p> <?php echo __( 'You are not authorized to perform this operation.', $this->plugin_text_domain ) ?> </p>
<?php   
	}
