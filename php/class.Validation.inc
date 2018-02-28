<?php 

class Validation{
	
	function test_password(){
		if(isset($_POST['repassword'])){
		  $repassword = trim($_POST['repassword']);
		  if($_POST['password']!=$_POST['repassword']) {
            echo '*Does not match with your password';
			return false; 
          }
	   }
		return true;
	}
	function test_fname(){
		if(isset($_POST['fname'])){
		  $firstname = trim($_POST['fname']);
		  if(!preg_match('/^[A-Za-z\s\ ]*$/', $firstname)) {
            echo '*Your first name cannot contain digits';
			return false; 
          }
	   }
		return true;	
	}
	
	function test_lname(){
		if(isset($_POST['lname'])){
		  $lastname = trim($_POST['lname']);
		  if(!preg_match('/^[A-Za-z\s\ ]*$/', $lastname)) {
            echo '*Your last name cannot contain digits';
			return false; 
          }
	   }
		return true;	
	}
	
}

?>