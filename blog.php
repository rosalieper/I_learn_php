<!DOCTYPE html>
<html>
<head>
<style>
		li,a{
			background-image: url('im.JPG');
			}
		
	</style>

	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<title>Super_Blog</title>
</head>
<body>
<center><h1><b><img src="mo.JPG" class="imageflottante" alt="Image flottante" />Welcom to your super blog</b></h1></center>
<nav>   
				 <ul>  
		    	 	<li><a href="../Home.php">Home</a></li> 
		     		<li><a href="../sign-up.php">sign_up</a></li>
			    	 <li><a href="../log-in.php">log_in</a></li>    
				 </ul>
		</nav></br></br>
		<h1><b><i>Your Blog</i></b></h1>
		<P>In your blog you can past What evar thing you like.</br>
		Bellow is a space provided for you to comment what ever thing you like </P>
	<form method="post" action="post.php"> 
		<textarea name="post" rows="20" cols="70"> Votre message ici.
		</textarea>
		<input type="submit" value="send" />
	</form>	 

</body>
</html>