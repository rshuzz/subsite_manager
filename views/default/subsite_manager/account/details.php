<?php 
	$user = elgg_get_logged_in_user_entity();
?>
<div class="theme-pleio-account-dropdown-user clearfix">
	<?php 
		echo elgg_view_entity_icon($user, "medium", array("use_hover" => false)); 
		echo "<label>" . $user->name . "</label>";
		echo "<br />";
		
		echo elgg_view('output/url', array(
			'href' => $user->getURL(),
			'text' => elgg_echo("profile"),
			'title' => elgg_echo("profile"),
			'is_trusted' => true
		));
		echo "<br />";
		
		if(elgg_is_active_plugin("messages")){ 
			echo elgg_view('output/url', array(
				'href' => "/messages/inbox/" . $user->username,
				'text' => elgg_echo("messages:inbox") . " [" . messages_count_unread() . "]",
				'title' => elgg_echo("messages:unreadcount", array(messages_count_unread())),
				'is_trusted' => true
			));
			echo "<br />";
			
			// personalized activity
			echo elgg_view("output/url", array(
				"href" => "/activity/notifications",
				"text" => elgg_echo("subsite_manager:account:dropdown:advanced_notifictions"),
				"title" => elgg_echo("advanced_notifications:activity:notifications:info"),
				"is_trusted" => true
			));
			echo "<br />";
		}
		
		echo elgg_view('output/url', array(
			'href' => "/settings/user/" . $user->username,
			'text' => elgg_echo("settings"),
			'title' => elgg_echo("settings"),
			'is_trusted' => true
		));
	?>
</div>
<div class='clearfix'>
	<?php 
		echo elgg_view('output/url', array(
			'href' => "/action/logout",
			'text' => elgg_echo("logout"),
			'title' => elgg_echo("logout"),
			'class' => 'elgg-button elgg-button-action float-alt',
			'is_trusted' => true
		));
	?>
</div> 