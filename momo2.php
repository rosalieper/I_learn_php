<html>
<body>
	<li><a href="momo1.php">Journal</a></li>
	<title>Japan Jurney<?php echo "&#8212;{$title}";?></title>


<h><b><i>
	This my conditional file</br>
</i></b></h>
<?php
$i=0;
$g="GIRL";
$b="BOY";
if ($b=="BOY")
	while($i<=20){
		echo"I am a boy</br>";
		$i++;
	}
else
echo "i de stay</br>";	
function doubleIt($number) { 
	$number *= 2; echo "$number<br />"; 
}
 $number = 4; 
 doubleIt($number);
  echo $number;

function salutation($nom)
{
	echo 'Bonjour'.$nom.'!</br>';
}
salutation('AYATO');
salutation('ONII CHA');
salutation('MELIODAS');
SALUTATION('ESCANOR');
SALUTATION('BAN');
SALUTATION('HAWK');
SALUTATION('DIAN');
SALUTATION('KING');
SALUTATION('EILEN');
SALUTATION('ELISABET');
SALUTATION('MISTIC');
$jj=date('d');
$hh=date('h');
$mm=date('i');
echo $jj.'/'.$hh.'/'.$mm;
$coordonnees = array (    'prenom' => 'François',    'nom' => 'Dupont',    'adresse' => '3 Rue du Paradis',    'ville' => 'Marseille');

?>
<input type='text'/>
<p>    Cette page ne contient que du HTML.<br />    Veuillez taper votre prénom : </p>
<form action="cible.php" method="post"> <p>    
	<input type="text" name="prenom" />    
	<input type="submit" value="Valider" /> 
</p>
</form>
<select name="choix">    
	<option value="choix1">Choix 1</option>    
	<option value="choix2">Choix 2</option>    
	<option value="choix3">Choix 3</option>    
	<option value="choix4">Choix 4</option> 
</select>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <script type="text/javascript">alert('Badaboum')</script> !</p>
<form action="cible_envoi.php" method="post" enctype="multipart/form-data"> 
   <p>Formulaire d'envoi de fichier</p> </form> 







<form action="cible_envoi.php" method="post" enctype="multipart/form-data">       
 <p>                Formulaire d'envoi de fichier :<br /> 
 	<input type="file" name="monfichier" /><br />               
  <input type="submit" value="Envoyer le fichier" />       
   </p>
</form>
<?php// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur 
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {        
// Testons si le fichier n'est pas trop gros       
 if ($_FILES['monfichier']['size'] <= 1000000)        {                
 // Testons si l'extension est autorisée               
  $infosfichier = pathinfo($_FILES['monfichier']['name']);               
   $extension_upload = $infosfichier['extension'];                
   $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');                
   if (in_array($extension_upload, $extensions_autorisees))  
                 {                       
                  // On peut valider le fichier et le stocker définitivement 
                 	move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));                        echo "L'envoi a bien été effectué !";                }       
                 	 }
                 	  }
                 	   ?>

?>


</body>
</htlm>