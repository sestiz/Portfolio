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
	/*$pageraw = $_SERVER['PHP_SELF'];
	$page = str_replace('/', '', $pageraw);
	//$page = strstr($page, '.php');
	$page = substr($page, 0, strpos($page, '.php'));*/
	
	$pageraw = $_SERVER['PHP_SELF'];
	//$page = str_replace('/', '', $pageraw);
	$page = strstr_after($pageraw, '/cqcd/');
	$page = str_replace('.php','',$page);
			
	// Affiche le lien de la page suivante et précédente dépendant de la page actuelle
	//     	Tableau $sondage contient toute le nom des pages du sondage
			$sondage = array('sondages','c01','c02','c03','c04','c05','c06','c07','c08','c09','c10','c11');
	$prev = $sondage[intval(array_search($page, $sondage))-1];
	$current = intval(array_search($page, $sondage));
	$next = $sondage[intval(array_search($page, $sondage))+1];
				 
	
				 
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
	
	//print_r($_SESSION['reponse']);
?>