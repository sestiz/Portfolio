<?php
	include_once('gestion_conferenciers.inc.php');
	
	if(isset($_POST['suiv'])){
		if(isset($_POST['choixid']) && $_POST['choixid'] != 'none'){
			session_destroy();
			session_start();
			$_SESSION['conferenciers']['id'] = $_POST['choixid'];	
			header("Location: ".$next.".php");exit;	
		}			 
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
         <p>Choisissez le/les conférenciers que vous souhaitez évaluer.</p>
         <form action="" method="post" name="myForm" id="sondage_form">
            <!--<select name="conferencier">-->
            <select name="choixid" onchange="if (this.options.selectedIndex == 1 || this.options.selectedIndex == 12){this.options.selectedIndex = 0;this.focus();}">
            	<option value="none">Choisissez le conférenciers</option>
            	<option value="none" disabled>-- Lundi, 11 mars</option>  
                <option value="l1">Léopold Turgeon</option>          	
                <option value="l2">Georges Pothier, Christian Bourque, Carlos Leitao, Jean Stéphane Tremblay</option>
                <option value="l3">Christine Beaulieu, Denis Carter, Stéphane Gauvin, Jacques Nantel, Alain Ménard</option>
                <option value="l5">Mélanie Grenier</option>
                <option value="l6">Sylvain Sénécal</option>
                <option value="l7">Jacques Pelletier</option>
                <option value="l8">Gerry Doutre</option>
                <option value="l9">Steve Plamondon, Marie Andrée Boutin, Jean Laramée</option>
                <option value="l10">Stéphane Bernier, Stéphane Gagnon, Patrick Tremblay</option>
                <option value="none" disabled>-- Mardi, 12 mars</option>
                <option value="m1">Scott Duby (De transaction à relation...)</option>
                <option value="m2">Marc Giroux</option>
                <option value="m3">Scott Duby (L'avenir du magasinage)</option>
                <option value="m4">François Gaumond</option>
                <option value="m5">Louise Pauzé</option>
                <option value="m6">Philippe Lasnier</option>
                <option value="m7">Sophie Marchand</option>
                <option value="m8">Jean-Pierre Lefebvre, Sylvain Toutant, François Berthiaume, Nathaly Riverin</option>
                <option value="m9">Sylvain Matte</option>
				<option value="m10">François Plaisance, Daniel Croteau</option>
                <option value="m12">Philippe Pinatel</option>
                <option value="m13">Jean Lapierre</option>
            </select>
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