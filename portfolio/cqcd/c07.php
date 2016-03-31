<?php
	include_once('gestion_conferenciers.inc.php');
	require_once('_script/config.php');
	
	if(isset($_POST['suiv'])){
		$_SESSION['conferenciers'][4]['note'] = $_POST['sondage'];
		$_SESSION['conferenciers']['current'] = $_SESSION['conferenciers']['current'] + 1;
		header("Location: ".$next.".php");exit;		 
	}
	if(isset($_POST['prec'])){
		$_SESSION['conferenciers']['current'] = $_SESSION['conferenciers']['current'] - 1;
		header("Location: ".$prev.".php");exit;	
	}
?>
<?php			
		 	if($_SESSION['conferenciers']['count'] >= $_SESSION['conferenciers']['current']){
				$courant = $_SESSION['conferenciers']['current'];
				$resultat ='';
								
				$resultat .= '<span class="presentation">Nom : </span>'.$_SESSION['conferenciers'][$courant]['nom'].'<br />';
				$resultat .= '<span class="presentation">Titre : </span>'.$_SESSION['conferenciers'][$courant]['titre'].'<br /><br />';
				
			}else{
				header("Location: cmerci.php");exit;		
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
         <p>Évaluation : <?php echo utf8_encode($_SESSION['conferenciers'][4]['nom']); ?></p>
         <?php
			echo utf8_encode($resultat);			
		 ?>
         <form action="" method="post" name="myForm" id="sondage_form">
         	<label><input type="radio" value="5" name="sondage" id="5" /> Excellent</label>
            <label><input type="radio" value="4" name="sondage" id="4" /> Très bon</label>
            <label><input type="radio" value="3" name="sondage" id="3" /> Bon</label>
            <label><input type="radio" value="2" name="sondage" id="2" /> Passable</label>
            <label><input type="radio" value="1" name="sondage" id="1" /> Faible</label> 
            <label><input type="radio" value="0" name="sondage" id="0" checked="checked" style="display:none;" /></label>
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