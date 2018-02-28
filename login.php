<?php 
require_once("includes/session.php");
require_once("includes/config.php");
require_once("includes/database.php");
require_once("includes/user.php");

$_SESSION['session']=$session;
if($_SESSION['session']->is_logged_in()){
	header("location:userHome.php");
}

if(isset($_POST['login'])){
	$username=trim($_POST['username']);
	$password=trim($_POST['log_password']);
	$found_user=User::authenticate($username,$password);
	if($found_user){
		$_SESSION['session']->login($found_user);
		header("location:userHome.php");
	}
	
}


?>

<html>
	<head>
		<link rel="stylesheet" href="css-files/mainStyle.css" />
	    <link rel="stylesheet" href="css-files/drop-navigation.css" />
	   
	    <?php  require  'php/class.Validation.inc'; $validation=new Validation; ?>
	  
	    
	</head>
	<body class="login">
	<div align="center">
		
		<div>
			<img src="Images/black.png" width="1200px" height="100%" border="5px" style="border-color: white ;opacity:0.4;border-top:0px;" />		
		</div>
		
		<div style="width:1200px;margin-top:-805px;position: relative;" align="left">
		 <img src="Images/logo.png" width="185px" height="40px" style="padding:0px;float:left;" border="0px" />
		  </div>
		
		<div style="width:1200px;margin-top:0px;position: relative;" align="right" >	
		<p style="line-height:5px;color:white" >Email us dineshed25@gmail.com &emsp;</p>			
		  <ul id="menu">
              <li>
              <a href="login.php">Sign in</a>
              </li>
              <li>
              <a href="te.html">Print Design</a>
                
              </li>
                <li>
                  <a href="#">Web Design</a>
                  <ul>
                   <li><a href="#">In Cinemas Now</a></li>
                   <li><a href="#">Coming Soon</a></li>
                   <li><a href="#">On DVD/Blu-ray</a></li>
                   <li><a href="#">Showtimes &amp; Tickets</a></li>
                 </ul>
                </li>
                <li>
                  <a href="#">categories</a>
                </li>
              <li>
              <a href="home.php">Home</a>
              <ul>
                   <li><a href="#">In Cinemas Now</a></li>
                   <li><a href="#">Coming Soon</a></li>
                   <li><a href="#">On DVD/Blu-ray</a></li>
                   <li><a href="#">Showtimes &amp; Tickets</a></li>
                 </ul>
              </li>
              </ul>
         	 	  
	</div>
	
	<div style="width: 1200px;position: relative" align="left">
		
		<p style="color:white;font-size:20px;margin-left:100px;margin-top:70px">For sign up, enter your details here.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;To Login,Enter your Usename and Password here.</p>
		
		<form name="myForm"  method="post" action="login.php">
		
		<div style="float:left;width:170px;margin-left:50px" align="left">
		  <p style="margin-left:0px;font-size:20px">First Name </p>		
		  <p style="margin-left:0px;font-size:20px">Last Name </p>				
		  <p style="margin-left:0px;font-size:20px">E-mail </p>		
		  <p style="margin-left:0px;font-size:20px">Password </p>				
		  <p style="margin-left:0px;font-size:20px">Password Confirm </p>		
		  <p style="margin-left:0px;font-size:20px">Zip Code </p>
		  <p style="margin-left:0px;font-size:20px">Country </p>
		</div>
		
		<div style="float:left;width:500px;color: red">
			<br />			
			<input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px;" type="text" name="fname" value="<?php if(isset($_POST['send'])){echo $_POST['fname'];}?>"   required /> <?php  $status_fname=$validation->test_fname(); ?><br /><br />
			<input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px" type="text" name="lname" value="<?php if(isset($_POST['send'])){echo $_POST['lname'];}?>"  required/><?php  $status_lname=$validation->test_lname(); ?><br /><br />
			<input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px" type="email" name="email" value="<?php if(isset($_POST['send'])){echo $_POST['email'];}?>" required /><br /><br />
			<input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px" type="password" name="password" value="<?php if(isset($_POST['send'])){echo $_POST['password'];}?>" required /><br /><br />
			<input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px" type="password" name="repassword" value="<?php if(isset($_POST['send'])){echo $_POST['repassword'];}?>" required /> <?php $status_conpass=$validation->test_password(); ?><br /><br />
			<input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px;" type="text" name="zipcode" value="<?php if(isset($_POST['send'])){echo $_POST['zipcode'];}?>" required/><br /><br />
			<select style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:0px" name="country" >
			<option>Please choose</option>
			<option>America</option>
			<option>Australia</option>
			<option>England</option>
			<option>Sri Lanka</option>
		    </select><br/><br/>
		    <input style="background-color:black;color:#777777;font-size:18px;border-radius:0px;margin-left:0px;cursor:hand;margin-top:0px;border-style:hidden" type="submit" value="Continue" name="send"/><br />
		    <p style="color:white;font-size:18px;text-decoration:underline">
		    	
		    
		    	<?php
		    	
				if(isset($_POST['send']) && $status_fname==1 && $status_lname==1 && $status_conpass==1){
					header("location:home.php");
			   
				}elseif(isset($_POST['send'])){
					
					echo "Recorrect your information and try again";				
				}
				
			    ?>
			    </p>
		</div>
				
	</form>
	
	<form name="login" method="post" action="login.php">
	
		<div style="float:left;width:170px;margin-left:0px" align="left">
		  <p style="margin-left:0px;font-size:20px">User Name </p>		
		  <p style="margin-left:0px;font-size:20px">Password </p>	
		</div>
		<div style="float:left;width:250px;margin-left:0px" align="left">
			<br />
		  <input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px" type="text" name="username" value="<?php if(isset($_POST['login'])){echo $_POST['username'];}?>" required /><br /><br />
		  <input style="font-size:20px;border-radius:3px;margin-left:0px;border-style:hidden;text-indent:5px" type="password" name="log_password" value="<?php if(isset($_POST['login'])){echo $_POST['log_password'];}?>" required /><br /><br />		 
		  <input style="background-color:black;color:#777777;font-size:18px;border-radius:0px;margin-left:0px;cursor:hand;margin-top:0px;border-style:hidden" type="submit" value="Sign in" name="login"/><br />
		    <p style="color:red;font-size:15px;text-decoration:none;widows:200px">
		   <?php
		   if(isset($_POST['login'])){
		   	echo "Username and password incorrect, try again";
			   
		   }
		   
		   ?>
		   </p>
		</div>
	</form>
 
		
	</div>
	
	
	
	
	
	</div>
	</body>
</html>