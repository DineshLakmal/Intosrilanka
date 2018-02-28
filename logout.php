<?php
require_once 'includes/session.php';

	$_SESSION['session']->logout();
	header("location:login.php");
	
?>