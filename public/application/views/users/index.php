<h2><?php echo count($user); ?> Users</h2>
<ul>
	<?php
	foreach($user as $u)
	{
		echo '<li><a href="/user/' . $u['ID'] . '">' . $u['DisplayName'] . '</a></li>';
	}
	?>
</ul>