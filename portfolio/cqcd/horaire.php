<?php
	include_once('gestion_sondage.inc.php');
	require_once('_script/config.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="user-scalable=no, width=device-width" name="viewport">
<title>CQCD - Horaire</title>
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
        <br />
         	<table>
            	<tr>
                	<th>Nom</th><th>Présentation</th><th>Date</th><th>Heure</th>
                </tr>
                <?php
					$req = 'SELECT nom, presentation, date, heure FROM conferenciers ORDER BY Date,Heure,presentation';
					$get = mysql_query($req) or die(mysql_error());
					
					if(mysql_num_rows($get)){
						while($rows = mysql_fetch_assoc($get)){
							$nom = 	$rows['nom'];
							$presentation = $rows['presentation'];							
							$heure = str_replace('à','<br />à<br />',utf8_encode($rows['heure']));					
											
							echo utf8_encode('<tr>
                    		<td>'.$nom.'</td><td>'.$presentation.'</td><td>'.$rows['date'].'</td><td class="heure">'.utf8_decode($heure).'</td>
                			</tr>');
						}
					}else{
						echo 'erreur';	
					}
				?>        
            </table>
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