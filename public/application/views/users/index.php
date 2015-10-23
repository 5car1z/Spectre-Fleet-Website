<h2><?php echo count($user); ?> Users</h2>
<ul>
	<php foreach($u in $user)
	{
		?>
		<li><a href="/user/<?php echo $u['ID']; ?>"><?php echo $u['DisplayName']; ?></a></li>
		<?php
	}
	?>
</ul>