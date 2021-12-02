
// add code in functions of theme/plugins/php Snippet 
add_action( 'init', 'disable_comments_feed' );
// new_activity_comment or vikinger_create_activity_comment= for vikinger theme
function disable_comments_feed() {
   if(isset($_POST['action']) && $_POST['action'] == "vikinger_create_activity_comment"){
	   $current_user = wp_get_current_user();
		$current_user_id = $current_user->ID;
	   $_POST = array(); //clean array post
	  die('You have no right to add comments' . $current_user_id);
   }
}


