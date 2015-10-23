<?php
session_start();

form_open('user/register', null, array('registrationpage' => 'true'));
echo '<br />';
form_input('Username', '');echo '<br />';
form_input('Character Name', '');echo '<br />';
form_password('Password', '');echo '<br />';
form_input('Email Addresss', '');echo '<br />';
form_submit('submit', 'Register');echo '<br />';
form_close();
