<?php
	include_once('gestion_conferenciers.inc.php');
	require_once('_script/config.php');
	
	if(isset($_POST['suiv'])){	
		header("Location: ".$next.".php");exit;		 
	}
	if(isset($_POST['prec'])){
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
         <p>Évaluation :</p>
         <?php
		 	$query = "SELECT id,nom,titre FROM conferenciers WHERE id='".$_SESSION['conferenciers']['id']."'";
			$get = mysql_query($query) or die(mysql_error());
						
			$resultat ='';
			
			if(mysql_num_rows($get)){
				
				$_SESSION['conferenciers']['count'] = mysql_num_rows($get);
				$_SESSION['conferenciers']['current'] = 1;
				$i = 1;
				
				while($rows = mysql_fetch_assoc($get)){
					//$resultat .= '<span class="presentation">Id : </span>'.$rows['idConf'].'<br />';
					$resultat .= '<span class="presentation">Nom : </span>'.$rows['nom'].'<br />';
					$resultat .= '<span class="presentation">Titre : </span>'.$rows['titre'].'<br /><br />';
					//$_SESSION['conferenciers'][$i]['idConf'] = $rows['idConf'];
					$_SESSION['conferenciers'][$i]['nom'] = $rows['nom'];
					$_SESSION['conferenciers'][$i]['titre'] = $rows['titre'];
					$i++;
				}
				echo utf8_encode($resultat);
				
			}
		 ?>
         <form action="" method="post" name="myForm" id="sondage_form">
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