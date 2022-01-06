<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title>login </title>
<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="Home.html"><img src="images/logo.png" width="150px"><a/>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="Home.html">Home</a></li>
				<li><a href="product.html">Product</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="login.html">Account</a></li>
				
				
			</ul>
	</nav>
			<img src="images/cart.png" width="30px" height="30px">
			<img src="Images/Menu.png" class="menu-icon" onClick="menutoggle()">
		</div>
 	</div>

	
<!---------------account page -------------------->
	
<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="Images/homeimage.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="Login()">Login</span>
							<span onclick="register()">Register</span>
							<hr id="Indicator">
						</div>
						
						<form id="LoginForm" method="post">
							<input type="text" placeholder="Username" id="txtusername">
							<input type="password" placeholder="Password" id="txtpassword1" >
							<button type="submit" class="btn">Login</button>
							<a href="">Forgot password</a>
						</form>
						
						<form id="RegForm" method="post">
							<input type="text" placeholder="Username" id="txtusername">
							<input type="email" placeholder="Email" id="txtemail">
							<input type="password" placeholder="Password" id="txtpassword1">
							<button type="submit" class="btn" id="btn">Register</button>
							
						</form>
					</div>
				</div>
			</div>	
		</div>
	</div>
	
<!------------------footer------------------------>
		
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col-1">
						<h3>Download our App</h3>
						<p>Download App for Anroid and ios mobile phone</p>
						<div class="app-logo">
							<img src="Images/appstore.png">
							<img src="Images/playstore.png">
						</div>
					</div>
					<div class="footer-col-2">
						<img src="Images/logo.png">
						<p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Accessible to Many</p>
					</div>
					<div class="footer-col-3">
						<h3>Useful Links</h3>
						<ul>
							<li>Coupons</li>
							<li>Blog Post</li>
							<li>Return Policy</li>
							<li>Join Affiliate</li>
						</ul>
						
					</div>
					<div class="footer-col-4">
						<h3>Useful Links</h3>
						<ul>
							<li>Facebook</li>
							<li>Instagram</li>
							<li>twitter</li>
							<li>Youtube</li>
						</ul>
						
					</div>
				</div> 
				<hr>
				<p class="copyright">Copyright 2021 </p>
			</div>
		</div>
	
<!--------------  js for toggle menu------------->
		<script>
			var MenuItems = document.getElementById("MenuItems");
			
			MenuItems.style.maxHeight = "0px";
			
			function menutoggle(){
				if(MenuItems.style.maxHeight = "200px")
					{
						MenuItems.style.maxHeight = "200px";
					}
				else
					{
						MenuItems.style.maxHeight = "opx";
					}
			}
		</script>
	
<!------------------ js for toggle form--------------->	
	
	<script>
	
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indicator = document.getElementById("Indicator");
		
			function register(){
				RegForm.style.transform = "translateX(0px)";
				LoginForm.style.transform = "translateX(0px)";
				Indicator.style.transform = "translateX(100px)";
			}
		
			function Login(){
				RegForm.style.transform = "translateX(300px)";
				LoginForm.style.transform = "translateX(300px)";
				Indicator.style.transform = "translateX(0px)";
			}
	
	</script>
	
	
	
	
	
	
	
</body>

	
<?php
if(isset($_POST["btn"]))

{
		$UserName=$_POST['txtusername'];
		$Email=$_POST['txtemail'];	
		$Password=$_POST['txtpassword1'];	
	
	
	   $con = mysqli_connect("localhost:3306","root","","hobbyplay");
	   
	   if(!$con)
		{
				die("Cannot connect to the DB Server");
		}
	
	$sql = "INSERT INTO `registration` (`UserName`,`Email`,`Password`) VALUES ('".$UserName."', '".$Email."', '".$Password."');" ;
		
		mysqli_query($con,$sql);
		
	
	   
	
	foreach($in as $i)
		{
			$sql = "INSERT INTO `login` (`UserName`, `Password`) VALUES ('".$UserName."', '".$Password."');";
			
		    mysqli_query($con,$sql);
		}
		header('Location:Login.php');
	
}
?>

</html>

	

