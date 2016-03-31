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
		var btns = document.getElementsByTagName("input");
		for(i=0;i<btns.length;i++)
		{
			if(btns[i].value=="<?php echo $_SESSION['reponse'][$current]; ?>")
			{
			  	btns[i].checked = true;
				console.log(btns[i]);
			}
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
         <p>Vous êtes?  </p>
         <form action="" method="post" name="myForm" id="sondage_form">
                <label><input type="radio" value="homme" name="sondage" id="1" /> Un homme</label>           
                <label><input type="radio" value="femme" name="sondage" id="2" /> Une femme</label> <br /><br />
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