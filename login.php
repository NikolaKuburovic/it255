<?php
	session_start();
	include("functions.php");
	
	if(isset($_POST['submit'])){
		$username = $conn->real_escape_string($_POST['username']);
		$password = $_POST['password'];
	
	if(!empty($username) && !empty($password)){
		if(proveriKorisnika($username,$password)){
			$_SESSION['username'] = $username;
		}else{
			echo '<script type="text/javascript">

			window.alert("Pogresno korisnicko ime ili lozinka.");

        	document.location.href = "index_login.html"; 
			
			</script>';
		}
	}else{
			echo '<script type="text/javascript">

			window.alert("Niste uneli sve podatke.");

        	document.location.href = "index_login.html"; 
			
			</script>';
		}
	}
	
	if(isset($_SESSION['username'])){
		
		echo '<script type="text/javascript">

			window.alert("Logovan si kao '.$_SESSION['username'].'");

        	document.location.href = "index.html"; 
			
			</script>';
	}else{
	
	}

?>