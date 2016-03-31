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
            	$('#sondageLabel1').show("slide", {}, 1000);
				$('#sondageLabel2').hide("slide", {}, 1000);
        	}else if($('#7').is(":checked")){
				$('#sondageLabel2').show("slide", {}, 1000);
				$('#sondageLabel1').hide("slide", {}, 1000);
			}else{
				$('#sondageLabel1').hide("slide", {}, 1000);
				$('#sondageLabel2').hide("slide", {}, 1000);
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
         <p>Comment avez-vous pris connaissance de ce 20e Congrès?  </p>
         <form action="" method="post" name="myForm" id="sondage_form">
                <label><input type="radio" value="Brochure publicitaire imprimée" name="sondage" id="1" /> Brochure publicitaire imprimée</label> 
                <label><input type="radio" value="Site Internet du CQCD" name="sondage" id="2" /> Site Internet du CQCD</label> 
                <label><input type="radio" value="Finances / Opérations" name="sondage" id="3" /> Finances / Opérations</label> 
                <label><input type="radio" value="Par un collègue / ami" name="sondage" id="4" /> Par un collègue / ami</label> 
                <label><input type="radio" value="Courriel" name="sondage" id="3" /> Courriel</label>           
                <label><input type="radio" value="Autre site Internet" name="sondage" id="5" /> Autre site Internet</label>
                <label id="sondageLabel1" style="display:none;padding-left:47px;"> précisez : <input type="text" name="sondageAutre1" style="width:200px;" id="sondageAutre" /></label> 
                <label><input type="radio" value="Distribution de brochures par mon centre commercial" name="sondage" id="6" /> Distribution de brochures par mon centre commercial</label> 
                <label><input type="radio" value="Autre" name="sondage" id="7" /> Autre</label>
                <label id="sondageLabel2" style="display:none;padding-left:47px;"> précisez : <input type="text" name="sondageAutre2" style="width:200px;" id="sondageAutre" /></label>
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