<?php
	include_once('gestion_conferenciers.inc.php');
	require_once('_script/config.php');
	
	if(isset($_POST['suiv'])){
		$_SESSION['conferenciers'][$courant]['note'] = $_POST['sondage'];
		$_SESSION['conferenciers']['current'] = $_SESSION['conferenciers']['current'] + 1;
		header("Location: ".$next.".php");exit;		 
	}
	if(isset($_POST['prec'])){
		$_SESSION['conferenciers']['current'] = $_SESSION['conferenciers']['current'] - 1;
		header("Location: ".$prev.".php");exit;	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="user-scalable=no, width=device-width" name="viewport">
<title>CQCD - Sondage conférenciers</title>
<link rel="stylesheet" type="text/css" href="_css/style.css" />
<style type="text/css">
	select{
		margin:0 auto;
		width:300px;
		margin-bottom:20px;
		margin-top:20px;
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
         <p>VEUILLEZ INDIQUER VOTRE FONCTION DANS L'ENTREPRISE</p>
         <?php			
		 	if($_SESSION['conferenciers']['count'] >= $_SESSION['conferenciers']['current']){
				$courant = $_SESSION['conferenciers']['current'];
				$resultat ='';
								
				$resultat .= '<span class="presentation">Nom : </span>'.$_SESSION['conferenciers'][$courant]['nom'].'<br />';
				$resultat .= '<span class="presentation">Titre : </span>'.$_SESSION['conferenciers'][$courant]['titre'].'<br /><br />';
				
				echo utf8_encode($resultat);
			}else{
				header("Location: cmerci.php");exit;		
			}
		 ?>
         <form action="" method="post" name="myForm" id="sondage_form">
                <label><input type="radio" value="Achats " name="sondage" id="1" /> Achats </label> 
                <label><input type="radio" value="Administrateur / Vice-président" name="sondage" id="2" /> Administrateur / Vice-président</label> 
                <label><input type="radio" value="Finances / Opérations" name="sondage" id="3" /> Finances / Opérations</label> 
                <label><input type="radio" value="Présentation visuelle / marchandisage" name="sondage" id="4" /> Présentation visuelle / marchandisage</label> 
                <label><input type="radio" value="Propriétaire / Président" name="sondage" id="5" /> Propriétaire / Président</label>           
                <label><input type="radio" value="Ressources humaines" name="sondage" id="6" /> Ressources humaines</label> 
                <label><input type="radio" value="Sécurité / prévention des pertes" name="sondage" id="7" /> Sécurité / prévention des pertes</label> 
                <label><input type="radio" value="Supervision / gérance" name="sondage" id="8" /> Supervision / gérance</label> 
                <label><input type="radio" value="Technologies de l'information" name="sondage" id="9" /> Technologies de l'information</label>
                <label><input type="radio" value="Ventes / Marketing" name="sondage" id="10" /> Ventes / Marketing</label>
				<label><input type="radio" value="Autre" name="sondage" id="11" /> Autre</label>
                <label id="sondageLabel" style="display:none;padding-left:47px;"> précisez : <input type="text" name="sondageAutre" style="width:200px;" id="sondageAutre" /></label>
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