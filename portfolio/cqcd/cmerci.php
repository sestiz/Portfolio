<?php
	session_start();
	
	require_once('_script/config.php');
	
	$idConf = $_SESSION['conferenciers']['id'];
	$q1 = $_SESSION['conferenciers'][0]['note'];
	$q2 = $_SESSION['conferenciers'][1]['note'];
	$q3 = $_SESSION['conferenciers'][2]['note'];
	$q4 = $_SESSION['conferenciers'][3]['note'];
	$q5 = $_SESSION['conferenciers'][4]['note'];
	$query = "INSERT INTO commentaires (idConf,q1,q2,q3,q4,q5) VALUES ('$idConf','$q1','$q2','$q3','$q4','$q5')";
	mysql_query($query);
	session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="user-scalable=no, width=device-width" name="viewport">
<title>CQCD - Merci d'avoir participé</title>
<link rel="stylesheet" type="text/css" href="_css/style.css" />
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
         <p>Merci d'avoir participé !
         </p>
         <p><a href="http://www.groupeviva.com">Visitez-nous</a></p>
         <br />
         <p><a href="index.php">Retourner à l'accueil</a></p>
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