<!DOCTYPE html>
<html>
<head>
	<title>ONLINE LIBRARY MANAGEMENT SYSTEM </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/animate.css" />
		<link rel="stylesheet" href="font-awesome.css" />
		<link rel="stylesheet" href="css/hover.css" />
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.js"></script>


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
               height:570px;
              background:url('pic/car5.jpg' );
              size:100% 100%;
			}
		</style>
</head>
<body>
<div class="container-fluid"style="background:#191927;">
	<div class="container"style="background:#191927;">
<nav class="navbar navbar-expand-sm navbar-dark"style="background:#191927;">
	<div class="navbar-brand text-danger">
		<img src="pic/logo1.png"class="img img-fluid" style="height:60px;">
	</div>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#suraj">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="suraj">
	<ul class="navbar-nav ml-auto text-center">
		<li class="nav-item ml-2">
			<button class=" hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="index.php" class="nav-link text-dark">HOME</a></button>
		</li>
    <li class="nav-item ml-2">
      <button class=" hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="about.php" class="nav-link text-dark">ABOUT US</a></button>
    </li>
				<li class="nav-item ml-2">
			<button class=" hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="book.php" class="nav-link text-dark">BOOKS</a></button>
		</li>
    
				<li class="nav-item ml-2">
			<button class=" hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="userlogin.php" class="nav-link text-dark">USER-LOGIN</a></button>
		</li>
				<li class="nav-item ml-2">
      <button class=" hvr hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="contact.php" class="nav-link text-dark">CONTACT US</a></button>
    </li>
				<li class="nav-item ml-2">
			<button class=" hvr hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="feedback.php" class="nav-link text-dark">FEEDBACK</a></button>
		</li>
		<li class="nav-item ml-2">
      <button class=" hvr hvr-fade" style="border:#343a40 solid;border-radius:10px;"><a href="upload.php" class="nav-link text-dark">UPLOAD-BOOKS</a></button>
	</ul>
</div>
</nav>
</div>
</div>
<div class="jumbotron hh">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"style="background:#111f4d; opacity:.9;">
		<center><img src="pic/icon1.png" class="img-fluid mt-1"style="height:80px;"></center>
		<h5 class="text-center text-success">NEW USER LOGIN</h5>
		<form class="form-group" action="regcode.php" method="post">
			<lavel class="text-white">NAME</lavel>
              <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fas fa-user"></i></span>
			<input type="text" name="txt1" required placeholder="ENTER YOUR NAME" class="form-control"/></div>
			<lavel class="text-white">MOBILE</lavel>
               <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fas fa-phone"></i></span>
			<input type="number" name="txt4" required placeholder="ENTER YOUR MOBILE NUMBER" class="form-control"/></div>
			<lavel class="text-white">DATE OF BIRTH</lavel>
                  <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fas fa-clock-o"></i></span>
			<input type="date" name="txt5" required placeholder="ENTER YOUR DATE OF BIRTH" class="form-control"/></div>
			<lavel class="text-white">EMAIL</lavel>
                  <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fas fa-envelope"></i></span>
			<input type="email" name="txt2" required placeholder="ENTER YOUR EMAIL" class="form-control"/></div>
			<lavel class="text-white">PASSWORD</lavel>
                 <div class="input-group-append">
								<span class="input-group-text"style="background: cyan"><i class="fas fa-key"></i></span>
			<input type="password" name="txt3" required placeholder="ENTER YOUR PASSWORD" class="form-control"/></div><br>
			<center><button class="btn-warning" style="width:150px;height:40px;border-radius:10px;">SUBMIT</button></center>
			
		</form>

		</div>
		<div class="col-sm-4"></div>
	</div>
</div>


<div class="container-fluid"style="margin-top:-30px">
 	<div class="row">
 		<div class="col-sm-12 bg-success">
<p class="h5 text-white mt-2"><marquee behavior=alternate> @ COPYRIGHT 2022 ON 03/03/2022 BY:-Lovely professional university. DEVLOPED BY:GYAN CHANDRA SRIVASTAVA GUIDED BY Mr.Nishant Agnihotri.</marquee></p> 		</div>
 	</div>
 </div>	
</body>
</html>
