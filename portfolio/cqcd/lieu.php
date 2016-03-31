<?php
	include_once('gestion_sondage.inc.php');
	require_once('_script/config.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="user-scalable=no, width=device-width" name="viewport">
<title>CQCD - Sondage évaluation générale</title>
<link rel="stylesheet" type="text/css" href="_css/style.css" />
<style>
th{
	text-align:left;
}
td{
	padding:4px 2px 4px 2px;	
}
tr{
	font-size:9pt;	
}
.heure{
	width:50px;	
}
tr:nth-child(even){
	background:#FFD8B8;	
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
         	<p>Lieu</p>
            <p>Centre Sheraton Montréal <br /> 1201 Boulevard René-Lévesque West · Montréal, Québec H3B 2L7</p>
            <p><a href="http://goo.gl/maps/QDkp0"><img style="" src="_asset/chemin.png" /></a></p>
            <p><a href="http://goo.gl/maps/QDkp0">Comment s'y rendre</a></p>
            <br />
            <p><a href="index.php">Retour</a></p>
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