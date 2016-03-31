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
<script type="text/javascript" src="_js/jquery.js"></script>
<script type="text/javascript" src="_js/jquery-ui.js"></script>
<script type="application/javascript">		
	window.onload = function ()
	{
		$("input[name='sondage']").click(function(){
			if($('#5').is(":checked")){
            	$('#sondageLabel').show("slide", {}, 1000);
        	}else{
				$('#sondageLabel').hide("slide", {}, 1000);
				console.log('test');
			}
		});
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
<style type="text/css">
	label{
		margin-left:0px;			
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
         <p>VEUILLEZ INDIQUER LA CATÉGORIE DE VOTRE ENTREPRISE </p>
         <br />
         <form action="" method="post" name="myForm" id="sondage_form">
         	<span>Commerce de détail</span><br />
                <label><input type="radio" value="Chaîne" name="sondage" id="1" /> Chaîne</label> 
                <label><input type="radio" value="Franchise / Bannière" name="sondage" id="2" /> Franchise / Bannière</label> 
                <label><input type="radio" value="Grand Magasin - magasin à rayons" name="sondage" id="3" /> Grand Magasin - magasin à rayons</label> 
                <label><input type="radio" value="Indépendant" name="sondage" id="4" /> Indépendant</label>
                <label><input type="radio" value="Autre" name="sondage" id="5" /> Autre</label><label id="sondageLabel" style="display:none;padding-left:47px;">
 précisez : <input type="text" name="sondageAutre" style="width:200px;" id="sondageAutre" /></label> 
                
                <br />
                
            <span>Organisation / Entreprise affiliée</span><br />
                <label><input type="radio" value="Association / Chambre de commerce / SDC" name="sondage" id="6" /> Association / Chambre de commerce / SDC</label> 
                <label><input type="radio" value="Entreprise de services / Consultant" name="sondage" id="7" /> Entreprise de services / Consultant</label> 
                <label><input type="radio" value="Établissement d'enseignement" name="sondage" id="8" /> Établissement d'enseignement</label> 
                <label><input type="radio" value="Institution financière" name="sondage" id="9" /> Institution financière</label>
                <label><input type="radio" value="Société immobilière / Centre commercial" name="sondage" id="10" /> Société immobilière / Centre commercial</label>
				<label><input type="radio" value="Manufacturier / Grossiste" name="sondage" id="11" /> Manufacturier / Grossiste</label> 
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