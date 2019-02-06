<!DOCTYPE html>
<html>
	<head>
		<div class="background-image"><style>
			body 
			{
				background-image: url('im.JPG');
				background-size: cover;
				
			}

		</style>
	</div>

		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>Super_Blog</title>
	</head>
	<body>
		<center><h1><b>Welcom to my super blog</b></h1></center>
		<nav>   
				 <ul>  
		    	 	<li><a href="Home.php">Home</a></li> 
		     		<li><a href="sign-up.php">sign_up</a></li>
			    	 <li><a href="log-in.php">log_in</a></li>    
				 </ul>
		</nav>
		<p>
			<center><h1><b><i>LOG_IN</i></b></h1></center>
			<section>	                    
		        <form method="POST" action="DB-connection/collect.php">
		             <center><input type="Email" name="Email" id="Email" placeholder="Email" size="70" maxlength="10" /></br></br></center>
		             <center><input type="password" name="password" id="password" placeholder="password" size="70" maxlength="10" /></br></br>
		            </center>
		                        
  					<center><input type="submit" value="send" /></center>
  				</form>
  			</section>
		</p>
</body>
</html>