<?php
#start session
session_start();

//deletes the username key
unset($_SESSION['username']);

//this would delete all of the session keys
//session_destroy();

//redirects
header('Location: login');
?>