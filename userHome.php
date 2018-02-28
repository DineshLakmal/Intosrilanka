
<?php 
require_once 'includes/config.php';
require_once 'includes/session.php';
require_once 'includes/user.php';
if(!isset($_SESSION['user_id'])){
	echo "string";
	header("location:login.php");
}else{
	$user=User::find_by_id($_SESSION['user_id']);
	$full_name=$user->full_name();
}


?>

<html>
<head>
	<link rel="stylesheet" href="css-files/mainStyle.css" />
	<link rel="stylesheet" href="css-files/drop-navigation.css" />
	<script src="java-scripts/slideShow.js"></script>
	
</head>
<body class="home" onload="slideit()">
	
	<div align="center">
		
		<div>
			<img src="Images/black.png" width="1200px" height="100%" border="5px" style="border-color: white ;opacity:0.4;border-top:0px;" />		
		</div>
		  
		  <div style="width:1200px;margin-top:-1605px;position: relative;" align="left">
		    <img src="Images/logo1.jpg" width="300px" height="40px" style="padding:0px;float:left;" border="0px" />
		    
		  </div>
		  
		<div style="width:1200px;position: relative;margin-top:0px" align="right" >
		
	   <p style="line-height:5px;color:white" >Email us dineshed25@gmail.com &emsp;</p>	
		
              <ul id="menu">
              <li>
              <a href="userHome.php" style="color:#04ACEC;text-transform:none;"><?php echo $full_name ?></a>
                      <ul>
                      	  <li><a href="#">Check Privacy</a></li>
                      	  <li><a href="#">Profile</a></li>
                      	  <li><a href="logout.php">Sign Out</a></li>
                     </ul>
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
                  <a href="#">Bio</a>
                </li>
              <li>
              <a href="userHome.php">Home</a>
              <ul>
                   <li><a href="#">In Cinemas Now</a></li>
                   <li><a href="#">Coming Soon</a></li>
                   <li><a href="#">On DVD/Blu-ray</a></li>
                   <li><a href="#">Showtimes &amp; Tickets</a></li>
                 </ul>
              </li>
              </ul>
         
		 
	  
	</div>
	
	<div  style="width: 1200px;margin-top: -16px;padding-top:0px;color:white" >
		  <img src="Images/back.jpg" name="main" width="1200px" height="450px" border="0px" style="border-color: black;position:relative" />
	    <div style="position:relative;margin-top:-280px;background-color: rgba(0, 0, 0, 0.6);width:700px;height:200px">	    
	        <h1 style="color:white;position:relative;margin-top:0px;padding-top:20px">WELCOME TO SRI LANKA</h1>
	        <h3 style="color:white;padding-left:20px;padding-right:20px;font-family:"Bradley Hand ITC"">Find out what you want,And think of your attitude will never find out again.So come with us and hope you enjoy the web site with plesure</h3>
	        <a href="" style="margin-left:0px;text-decoration:none;color:#999999;padding-left:400px" >For more, contact web developers &#9658;</a>
	   </div>
	   </div>
	
	
	<div style="width:1200px ;position: relative;margin-top:100px;height:450px">
          <div style="margin-left:62px;margin-top: 13px ;color: white;position: relative;float:left;width:350px;" align="left" >
				<a href="location.php"><img src="Images/scence.jpg" name="slide1" width="300px" height="200px" border="8px" style="border-color: rgba(255,255,255,0.1);border-radius:10px"/> </a>
		        <p style="color:white">Hotel Tajraj</p>
		  	    <p style="color:white">As the most recognized name in the industry, travelers all over the world have been saying “Take me to the Hilton” for almost a century. And because of our innovative approach to products, amenities and service, Hilton continues to be synonymous with hotel across the globe</p>  
		  	    <a class="for_link" href="sss" >Visit more &#9658;</a>
		  </div>
		  
		  
	      <div style="margin-left:20px;margin-top: 13px ;color: white;position: relative;float:left;width:350px" align="left" >
				<a href=""><img src="Images/beah.jpg" name="slide1" width="300px" height="200px" border="8px" style="border-color: rgba(255,255,255,0.1);border-radius:10px"/></a> 
		        <p style="color:white">Hotel Tajraj</p>
		  	    <p style="color:white">As the most recognized name in the industry, travelers all over the world have been saying “Take me to the Hilton” for almost a century. And because of our innovative approach to products, amenities and service, Hilton continues to be synonymous with hotel across the globe</p>
		        <a class="for_link" href="sss" >Visit more &#9658;</a> 
		  </div>
		  
		  
		  <div style="margin-left:20px;margin-top: 13px ;color: white;position: relative;float:left;width:398px" align="left">
				<a><img src="Images/Thril.jpg" name="slide1" width="300px" height="200px" border="8px" style="border-color: rgba(255,255,255,0.1);border-radius:10px"/> </a>
		        <p style="color:white">Hotel Tajraj</p>
		  	    <p style="color:white">As the most recognized name in the industry, travelers all over the world have been saying “Take me to the Hilton” for almost a century. And because of our innovative approach to products, amenities and service, Hilton continues to be synonymous with hotel across the globe</p>
		  	    <a class="for_link" href="sss" >Visit more &#9658;</a>
		  </div>		
				
		
	</div>
	<div style="width:1200px ;position: relative;margin-top:10px;height:470px">
          <div style="margin-left:62px;margin-top: 13px ;color: white;position: relative;float:left;width:350px;" align="left" >
				<a href="location.php"><img src="Images/cave.jpg" name="slide1" width="300px" height="200px" border="8px" style="border-color: rgba(255,255,255,0.1);border-radius:10px"/> </a>
		        <p style="color:white">Hotel Tajraj</p>
		  	    <p style="color:white">As the most recognized name in the industry, travelers all over the world have been saying “Take me to the Hilton” for almost a century. And because of our innovative approach to products, amenities and service, Hilton continues to be synonymous with hotel across the globe</p>  
		  	    <a class="for_link" href="sss" >Visit more &#9658;</a>
		  </div>
		  
		  
	      <div style="margin-left:20px;margin-top: 13px ;color: white;position: relative;float:left;width:350px" align="left" >
				<a href=""><img src="Images/royal.jpg" name="slide1" width="300px" height="200px" border="8px" style="border-color: rgba(255,255,255,0.1);border-radius:10px"/></a> 
		        <p style="color:white">Hotel Tajraj</p>
		  	    <p style="color:white">As the most recognized name in the industry, travelers all over the world have been saying “Take me to the Hilton” for almost a century. And because of our innovative approach to products, amenities and service, Hilton continues to be synonymous with hotel across the globe</p>
		        <a class="for_link" href="sss" >Visit more &#9658;</a> 
		  </div>
		  
		  
		  <div style="margin-left:20px;margin-top: 13px ;color: white;position: relative;float:left;width:398px" align="left">
				<a><img src="Images/wild.jpg" name="slide1" width="300px" height="200px" border="8px" style="border-color: rgba(255,255,255,0.1);border-radius:10px"/> </a>
		        <p style="color:white">Hotel Tajraj</p>
		  	    <p style="color:white">As the most recognized name in the industry, travelers all over the world have been saying “Take me to the Hilton” for almost a century. And because of our innovative approach to products, amenities and service, Hilton continues to be synonymous with hotel across the globe</p>
		  	    <a class="for_link" href="sss" >Visit more &#9658;</a>
		  </div>		
				
		
	</div>
	
		
	<p style="position:relative;">  <a  href="sss"  style="font-size:22px;text-decoration:none;color:white">Visit more Locations&#9658;</a> </p>
	
	</br>
	<div style="width:1200px;position:relative;margin-top:0px" align="center">
	<p style="position:relative;letter-spacing:2px;line-height:15px;font-weight:bold;"> &copy; All right reserved by Miracle 2015.</p>
    </div>
    
	</div>
	
	
		
</body>	
	
</html>
