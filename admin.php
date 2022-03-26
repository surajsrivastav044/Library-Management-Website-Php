<?php
$a=rand(65,90);
$b=chr($a);
$c=rand(10,99);
$d=rand(97,122);
$e=chr($d);
$f=rand(65,90);
$g=chr($f);
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="link/bootstrap.min.css" />
		<link rel="stylesheet" href="link/animate.css" />
		<link rel="stylesheet" href="font-awesome.css" />
		<link rel="stylesheet" href="link/hover.css" />
		<script src="link/jquery-3.3.1.slim.min.js"></script>
		<script src="link/popper.min.js"></script>
		<script src="link/bootstrap.min.js"></script>
		<script src="link/wow.js"></script>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		

		<style>
             .hh
			{
               height:600px;
              background:url('pic/bac1.jpg' );
              size:100% 100%;
			}
		</style>
</head>
<body>


<div class="jumbotron hh">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"style="background:#111f4d; opacity:.9;">
		<center><img src="pic/icon1.png" class="img-fluid mt-4"style="height:80px;"></center>
		<h5 class="text-center text-success">ADMIN LOGIN</h5>
		<form class="form-group" action="admincode.php" method="post">
			
			<lavel class="text-white">EMAIL</lavel>
			<div class="input-group-append">
								<span class="input-group-text" style="background: cyan"><i class="fas fa-envelope"></i></span>
							<input type="email" name="txt1" required placeholder="ENTER YOUR EMAIL" class="form-control"/></div>
							<div class="mt-3"></div>
			<lavel class="text-white">PASSWORD</lavel>
			<div class="input-group-append">
								<span class="input-group-text "style="background:cyan"><i class="fas fa-key"></i></span><input type="password" name="txt2" required placeholder="ENTER YOUR PASSWORD" class="form-control"/></div><br>
								<span class="text-white">FILL VERIFICATION</span>
                          <div class="row">
								<div class="col-sm-8  form-group">
									<div class="input-group-append">
									<span class="input-group-text "style="background:cyan"><i class="fas fa-key"></i></span>
								<input type="text" class="form-control" name="txt3" placeholder="FILL VERIFICATION CODE" required />
								</div>	</div>
								<div class="col-sm-4  form-group ">					
<input type="text" value="<?php echo $b.$c.$e.$g; ?>" name="txt4" class="form-control" style="background:black;color:white" readonly /></span>
</div>
</div>
			<center><button class="btn-warning mt-3" style="width:150px;height:40px;border-radius:10px;">SUBMIT</button></center><br>
					</form>

		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

<!--- new gallery code start ---->
<div class="container-fluid"style="margin-top:-30px">
 	<div class="row">
 		<div class="col-sm-12 bg-success">
            <p class="h5 text-white mt-2"><marquee behavior=alternate> @ COPYRIGHT 2019 ON 03/08/2019 BY:-DIGICODER PVT.(LTD). DEVLOPED BY:GYAN CHANDRA SRIVASTAVA GUIDED BY ER.GOPAL SINGH.</marquee></p>
 		</div>
 	</div>
 </div>		
</body>
</html>