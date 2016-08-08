<?php
include("functions.php");

	if(isset($_POST['submit'])){
		$ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$username = $_POST['username'];
		$password = $_POST['password'];
	if(!empty($ime) && !empty($prezime) && !empty($username) && !empty($password)){
		dodajKorisnik($ime,$prezime,$username,$password);
		if(!checkIfUserExists($username)){
		echo '<script type="text/javascript">

			window.alert("Uspesna registracija.");

        	document.location.href = "index_login.html"; 
			
			</script>';}
	} else{
		echo '<script type="text/javascript">

			window.alert("Niste popunili sva polja.");

        	document.location.href = "index_register.html"; 
			
			</script>';
	}
	}

?>