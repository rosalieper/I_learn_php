<?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=my_blog', 'root', '',
$pdo_options);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message)
VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));
// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
