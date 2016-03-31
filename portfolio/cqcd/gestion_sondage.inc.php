<?php
	//error_reporting(E_ALL);	ini_set('display_errors', '1');
	
	session_start();
	
	function strstr_after($haystack, $needle, $case_insensitive = false) {
		$strpos = ($case_insensitive) ? 'stripos' : 'strpos';
		$pos = $strpos($haystack, $needle);
		if (is_int($pos)) {
			return substr($haystack, $pos + strlen($needle));
		}
		// Most likely false or null
		return $pos;
	}
	// Trouve le nom de la page
	// Décortique pour ne donner que le nom sans .php et le /
	$pageraw = $_SERVER['PHP_SELF'];
	//$page = str_replace('/', '', $pageraw);
	$page = strstr_after($pageraw, '/cqcd/');
	$page = str_replace('.php','',$page);
			
	// Affiche le lien de la page suivante et précédente dépendant de la page actuelle
	//     	Tableau $sondage contient toute le nom des pages du sondage
			$sondage = array('sondages','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28');
	$prev = $sondage[intval(array_search($page, $sondage))-1];
	$current = intval(array_search($page, $sondage));
	$next = $sondage[intval(array_search($page, $sondage))+1];
		
	// Gère les pages spéciales
	if($page == 12){
		if($_SESSION['reponse'][11] != 'En ligne sur le site Internet CQCD'){
			header("Location: 13.php");exit;
		}
	}else if($page == 13){
		if($_SESSION['reponse'][11] != 'Sur place la journée même'){
			header("Location: 14.php");exit;
		}	
	}
			 
	// Création des liens en fonction de la page actuelle
	$liens = '';
	if($current >= count($sondage)-1){
		$liens .= '<div id="liens">';
		$liens .= '<input type="submit" value="Précédent" name="prec" />';
		$liens .= '<input type="submit" value="Soumettre" name="submit" />';
		$liens .= '</div>';
	}else if($current == 0){
		$liens .= '<div id="liens">';
		$liens .= '<button type="submit" value="Commencer" name="start" >Commencer</button>';
		$liens .= '</div>';
	}else{
		$liens .= '<div id="liens">';
		$liens .= '<input type="submit" value="Précédent" name="prec" />';
		$liens .= '<input type="submit" value="Suivant" name="suiv" />';
		$liens .= '</div>';
	}
		
	// Enregistrement de la réponse dans un array dans une variable de session
	$reponses = array();
	if(isset($_POST['suiv'])){
		if($page == 11){
			$_SESSION['reponse'][$current+1] = 0;
			$_SESSION['reponse'][$current+2] = 0;
		}else if($page == 23){
			if($_POST['sondage'] == 'Autre'){
				$_SESSION['reponse']['23autre'] = $_POST['sondageAutre'];
			}
		}else if($page == 24){
			if($_POST['sondage'] == 'Autre'){
				$_SESSION['reponse']['24autre'] = $_POST['sondageAutre'];
			}
		}else if($page == 25){
			if($_POST['sondage'] == 'Autre site Internet'){
				$_SESSION['reponse']['25autre1'] = $_POST['sondageAutre1'];
			}else if($_POST['sondage'] == 'Autre'){
				$_SESSION['reponse']['25autre2'] = $_POST['sondageAutre2'];
			}
		}
		$_SESSION['reponse'][$current] = $_POST['sondage'];	
		header("Location: ".$next.".php");exit;		 
	}
	if(isset($_POST['prec'])){
		if($page == 14 || $page == 13){
			header("Location: 11.php");exit;	
		}else if($page == 28){
			$_SESSION['prenom'] = $_POST['prenom'];
			$_SESSION['compagnie'] = $_POST['compagnie'];
			$_SESSION['telephone'] = $_POST['telephone'];
			$_SESSION['courriel'] = $_POST['courriel'];
			$_SESSION['nom'] = $_POST['nom'];
			header("Location: 27.php");exit;	
		}else{
			$_SESSION['reponse'][$current] = $_POST['sondage'];	
			header("Location: ".$prev.".php");exit;
		}
	}
	if(isset($_POST['start'])){
		header("Location: 01.php");exit;	
	}
	if(isset($_POST['submit'])){
		$_SESSION['prenom'] = $_POST['prenom'];
		$_SESSION['compagnie'] = $_POST['compagnie'];
		$_SESSION['telephone'] = $_POST['telephone'];
		$_SESSION['courriel'] = $_POST['courriel'];
		$_SESSION['nom'] = $_POST['nom'];
		header("Location: submit.php");exit;	
	}
	
	//print_r($_SESSION['reponse']);
?>