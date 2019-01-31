<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
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
					<i>Chat Box</i>
				</b>
			</h1>	                    
		       	<form method="post" action="minichat_post.php">  
		          	<input type="text" name="pseudo" id="pseudo" placeholder="pseudo" size="50" maxlength="10" /></br></br>
		           	<input type="text" name="message" id="message" placeholder="message" size="125" maxlength="10" /></br></br>
		          	<input type="submit" value="send" />
  				</form>
  				<?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=my_blog', 'root', '',
$pdo_options);
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM chat
ORDER BY ID DESC LIMIT 0, 10');
// Affichage de chaque message (toutes les données sontprotégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) .
'</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
	$reponse->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
	

		</p>
</body>
</html>