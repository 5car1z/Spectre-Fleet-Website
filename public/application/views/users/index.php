<h2><?php echo count($user); ?> Users</h2>
<ul>
	<?php
	foreach($u in $user)
	{
		echo '<li><a href="/user/' . $u['ID'] . '">' . $u['DisplayName'] . '</a></li>';
	}
	?>
</ul>