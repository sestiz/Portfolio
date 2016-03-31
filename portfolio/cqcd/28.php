<?php
	include_once('gestion_sondage.inc.php');
	$erreur = '';
	if(isset($_GET['erreur2'])){
		$erreur = '** Votre profil a déjà donné son opinion. **<br />
 Vous ne pouvez participez au sondage qu\'une seule fois';	
	}else if(isset($_GET['erreur'])){
		$erreur = '** Vous devez insérer tout les<br />
 informations nécessaires dans le formulaire **';	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="user-scalable=no, width=device-width" name="viewport">
<title>CQCD - Sondage évaluation générale</title>
<link rel="stylesheet" type="text/css" href="_css/style.css" />
<script type="application/javascript">
	window.onload = function ()
	{
		document.getElementById('1').value = '<?php echo $_SESSION['prenom']; ?>';
		document.getElementById('2').value = '<?php echo $_SESSION['nom']; ?>';
		document.getElementById('3').value = '<?php echo $_SESSION['compagnie']; ?>';
		document.getElementById('4').value = '<?php echo $_SESSION['courriel']; ?>';
		document.getElementById('5').value = '<?php echo $_SESSION['telephone']; ?>';
	}
</script>
<style type="text/css">
	form label input{
		width:200px;
		margin-left:-60px;		
	}
</style>
</head>
<body>
     <div id="conteneur">
     	<div id="header">
        	<div id="logoCQCD"></div>
            <div id="logoCQCDTitre"></div>
            <div id="patternTop"></div>
        </div>
        <div id="contenu">
         <p>EN PARTICIPANT À CE SONDDAGE, VOUS ÊTES ÉLIGIBLE À UN TIRAGE D'UNE INSCRIPTION<br />
			GRATUITE POUR L'UNE DES JOURNÉES DU CONGRÈS 2014.<br />
			Afin de vous contacter si vous gagnez, veuillez indiquer vos coordonnées ci-dessous.
         </p>
         <form action="" method="post" name="myForm" id="sondage_form">
                <label><input type="text" name="prenom" id="1" /> Prénom</label>
                <label><input type="text" name="nom" id="2" /> Nom</label>
                <label><input type="text" name="compagnie" id="3" /> Compagnie</label>
                <label><input type="text" name="courriel" id="4" /> Courriel</label>
                <label><input type="text" name="telephone" id="5" /> Téléphone</label>
                <p class="erreur"><?php echo $erreur ?></p>
                <br /><br />
            <?php
	 			echo $liens;
	 		?>
         </form>
         </div>
 	</div>
     	<div id="footer">
     		<a href="http://www.groupeviva.com" id="groupeviva"></a>
            <div id="bump"></div>
            <div id="patternBottom"></div>
     	</div>
     </div>
</body>
</html>