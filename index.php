<?php  $conn=mysqli_connect("localhost","root","","project");
session_start();
if (isset($_POST['submit'])) {
	$enroll=$_POST['enroll'];
	// $name=$_POST['mobile'];
	$dup=mysqli_query($conn,"Select * from students where enrol='".$enroll."'");

	if(mysqli_num_rows($dup)>0)
	{
		// $_SESSION["name"]=$name;
		$_SESSION["enroll"]=$enroll;
		echo '<script>window.location.href="user.php";</script>';
	}else{
		echo '<script>alert("Login Failed...Invalid Enrollment Number");window.location.href="index.php ";</script>';}
}
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>
		.logo{
			  text-align: center;
		}
		 .div {
		 	padding-top: 30px;
  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(0.5px);
  margin-top: 90px;
  width:360px;
  height: 400px;
  border-radius: 10px;
  text-align: center;
  background-color: #A7A6BC;

}
.multicolortext {
        background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, orange, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
      }
      #text-area {
  /* height: 11px;
  */
  border: 2px solid rgba(92, 91, 91, 0.589);
  border-right: none;  
  margin-right: none;
  padding-right: none;
}

#button-area {
  margin-left: -4.8%;
  padding-top: 0.0625rem;
  padding-bottom: 0.0625rem;
  background-color: #008CBA;
  border: 0.125rem solid rgba(92, 91, 91, 0.589);
  border-radius: 0.1875rem;
}
#button-area:hover{
  cursor: pointer;
}
	</style>
</head>
<body style="justify-content: center;	display: flex;	height: 100%;	background-image:url(images/im.jpg);	background-repeat: no-repeat;  -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover;  background-size: cover;" oncontextmenu="return false;">
	<div class="div">
		<div class="cardc">
		<form method="post">
			<h2 style="text-decoration: underline; font-weight: bold; text-align: center;"><span class="multicolortext" title="Self Learning Material">SLM </span>- Student Login</h2>
			<div class="logo">
			<img src="images/img.jpg" style="border-radius: 50%; width: 80px;"> <br></div>
  

			<label style="font-weight: Bold; color: Black; ">Enrollment Number :<br>
				<input type="text" name="enroll" placeholder="Type here your enrollment number..." id="text-area" autocomplete="none" style="border-radius: 10px;height: 40px; width: 270px;" required></label><br><br>
				<label style="font-weight: Bold;">Mobile Number :<br>
				<input type="text" name="pass" placeholder="Type here your mobile number..." id="text-area" autocomplete="off" required style="border-radius: 10px;height: 40px;width: 270px; "></label><br><br>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary" id="button-area" style="border-radius: 10px 1px 10px 1px; width: 170px;"><br>
		<!--<a href="register.php" style="align-content: left; color: blue;font-weight: bold;">New registration?</a> |
		<a href="forget.php" style=" align-content: left; color: blue;font-weight: bold;">Forgot Password?</a> -->
		</form></div>
</div>


</body>
</html>
