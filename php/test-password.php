<?php 

if((isset($_POST['repassword'])) && ( $_POST['repassword'] != $_POST['password'] ))
{ echo ' Password are missmached.'; } 

?>