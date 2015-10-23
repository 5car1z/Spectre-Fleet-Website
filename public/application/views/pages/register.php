
<?php
if(isset($_SESSION['registrationFailed']) && $_SESSION['registrationFailed'] == true)
{
	echo '<h3>Registration Failed</h3>';
}
?>
<form method="post" action="/user/create/">
Username: <input type="text" name="username"><br />
Password: <input type="password" name="password"><br />
Confirm Password: <input type="password" name="confirmpassword"><br />
<br />
Character Name: <input type="text" name="character"><br />
Email Address: <input type="email" name="email">
<input type="submit" value="Register">
</form>