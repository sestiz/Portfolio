<?php
	session_start();

	require_once("_script/config.php");
	
	header('Content-Type: text/html; charset=utf-8');
	
	$q1 = $_SESSION['reponse'][1];
	$q2 = $_SESSION['reponse'][2];
	$q3 = $_SESSION['reponse'][3];
	$q4 = $_SESSION['reponse'][4];
	$q5 = $_SESSION['reponse'][5];
	$q6 = $_SESSION['reponse'][6];
	$q7 = $_SESSION['reponse'][7];
	$q8 = $_SESSION['reponse'][8];
	$q9 = $_SESSION['reponse'][9];
	$q10= $_SESSION['reponse'][10];
	$q11= $_SESSION['reponse'][11];
	$q12= $_SESSION['reponse'][12];
	$q13= $_SESSION['reponse'][13];
	$q14= $_SESSION['reponse'][14];
	$q15= $_SESSION['reponse'][15];
	$q16= $_SESSION['reponse'][16];
	$q17= $_SESSION['reponse'][17];
	$q18= $_SESSION['reponse'][18];
	$q19= $_SESSION['reponse'][19];
	$q20= $_SESSION['reponse'][20];
	$q21= addslashes($_SESSION['reponse'][21]);
	$q22= addslashes($_SESSION['reponse'][22]);
	if($_SESSION['reponse'][23] == 'Autre'){
		$q23= $_SESSION['reponse']['23autre'];
	}else{
		$q23= $_SESSION['reponse'][23];
	}
	if($_SESSION['reponse'][24] == 'Autre'){
		$q24= $_SESSION['reponse']['24autre'];
	}else{
		$q24= $_SESSION['reponse'][24];
	}
	if($_SESSION['reponse'][25] == 'Autre'){
		$q25= $_SESSION['reponse']['25autre2'];
	}else if($_SESSION['reponse'][25] == 'Autre site Internet'){
		$q25= $_SESSION['reponse']['25autre1'];
	}else{
		$q25= $_SESSION['reponse'][25];
	}
	$q26= $_SESSION['reponse'][26];
	$q27= $_SESSION['reponse'][27];
	$nom = addslashes($_SESSION['nom']);
	$prenom = addslashes($_SESSION['prenom']);
	$compagnie = addslashes($_SESSION['compagnie']);
	$telephone = addslashes($_SESSION['telephone']);
	$courriel = addslashes($_SESSION['courriel']);
	
	
	if($courriel == '' || $prenom == '' || $nom == '' || $compagnie == '' || $telephone == ''){
		header("Location: 28.php?erreur");exit;	
	}
	
	$req = "SELECT * FROM visiteurs WHERE courriel='$courriel'";
	
	$get = mysql_query($req);
	
	if(mysql_num_rows($get)){
		header("Location: 28.php?erreur2");exit;	
	}else{
		$req = "INSERT INTO visiteurs (prenom,nom,courriel,telephone,compagnie,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,q26,q27) VALUES ('$prenom','$nom','$courriel','$telephone','$compagnie','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27')";
		$get = mysql_query($req) or die(mysql_error());
		session_destroy();
		header("Location: merci.php");exit;
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="user-scalable=no, width=device-width" name="viewport">
<title></title>
</head>

<body>
</body>
</html>