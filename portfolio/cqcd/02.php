<?php
	include_once('gestion_sondage.inc.php');
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
		var e = document.getElementById("<?php echo $_SESSION['reponse'][$current]; ?>");
		if(e != null){
			e.checked = true;
		}
	}
</script>
</head>
<body>
<div id="conteneur">
     <div id="header">
        	<div id="logoCQCD"></div>
            <div id="logoCQCDTitre"></div>
            <div id="patternTop"></div>
        </div>
     <div id="contenu">
         <p>2. Quelle est votre appréciation globale du 20e Congrès du commerce de détail?</p>
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