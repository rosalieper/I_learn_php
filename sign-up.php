
<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>Super_Blog</title>
	</head>
	<body>

		<center>
			<h1>
				<b>Welcom to my super blog</b>
			</h1>
		</center>
		<nav>   
			 <ul>  
		     	<li>
		     		<a href="Home.php">Home</a>
		     	</li> 
		     	<li>
		     		<a href="sign-up.php">sign_up</a>
		     	</li>
		    	 <li>
		    	 	<a href="log-in.php">log_in</a>
		    	 </li>    
			 </ul>
		</nav>
		<p>
			<h1>
				<b>
					<i>SIGN_UP</i>
				</b>
			</h1>	                    
		       	<form method="post" action="DB-connection/connect.php">  
		          	<center><input type="text" name="Name" id="Name" placeholder="Name" size="125" maxlength="10" /></br></br></center>
		           	<center><input type="text" name="Favorite" id="Favorite" placeholder="Favorite" size="125" maxlength="10" /></br></br></center>
		            <center><input  type="password" name="password" id="password"  placeholder="Password" size="125" maxlength="10" /></br></br></center>
		            <center><input  type="password" name="check_password" id="check_password"  placeholder="confirm password" size="125" maxlength="10" /></br></br></center>
		             <center><input type="Email" name="Email" id="Email" placeholder="adress Email" size="125" maxlength="10" /></br></br></center>
		            <center><input type="submit" value="send" /></center>
  				</form>
	

		</p>



	</body>
</html>	