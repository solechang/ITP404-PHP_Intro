<?php
	require('functions.php');
	
	if (!isset($_POST['submit'])) {
		redirect('profile.php');
	} 

?>
<?php

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		

		


		$bool = validateemail($email);

		if( $bool === true ) {
			echo "Thank you for your submission";
		}
		else {
			header('Location: profile.php');
	}

		
	} else {
		header('Location: profile.php');
	}
?>