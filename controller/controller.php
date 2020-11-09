<?php 
	
	$name = ['Ekassi'];
	$surname = ['Simon'];
	$student_type = ['Etudiant'];
	$school = ['IAI-Cameroun'];
	$study_subject = ['systeme et réseau'];

	/*Informations de contact*/
	$emails = ['ulrichekassi2001@gmail.com'];
	$phone_numbers = ['655 850 652'];

	/*Informations sur le lieu de residence*/
	$town = ['Mfou'];
	$quarter = ['Lycée Bilingue'];

	/*Informations connexes*/
	$date_of_birth = ['13 janvier 2002'];
	$place_of_birth = ['Kokoe'];

	$number_of_members = count($name);
	if(isset($_POST['register_btn'])) {
		if(isset($_POST['name']) AND isset($_POST['surname']) AND isset($_POST['student_type']) AND isset($_POST['ecole']) AND isset($_POST['filiere']) AND isset($_POST['email']) AND isset($_POST['tel']) AND isset($_POST['ville']) AND isset($_POST['quartier']) AND isset($_POST['place_of_birth']) AND isset($_POST['date_of_birth']) ){
			$name[] = $_POST['name'];
			$surname[] = $_POST['surname'];
			$student_type[] = $_POST['student_type'];
			$school[] = $_POST['ecole'];
			$study_subject[] = $_POST['filiere'];
			$emails = $_POST['email'];
			$phone_numbers[] = $_POST['tel'];
			$town[] = $_POST['ville'];
			$quarter[] = $_POST['quartier'];
			$date_of_birth[] = $_POST['date_of_birth'];
			$place_of_birth[] = $_POST['place_of_birth']; 
			header('Location: ../view/')
		}
	}

?>


