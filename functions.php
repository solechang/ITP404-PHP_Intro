<?php 
	function redirect($url) {
			header('Location: ' . $url );
	}
	//Validateing email
	function validateemail($emailAddress) {
		$username = $_POST['username'];
		$message = $_POST['message'];
		$_domains = array(
			'yahoo.com', 'gmail.com',
		 	'usc.edu', 'hotmail.com',
		 	'aol.com'
		);
		if( strpos($emailAddress, '@') !== false ) {
			if($username === "")
			{
				return false;
				//No username
			}
			elseif($message === "")
			{
				return false;
				//No message
			}
			//Cannot find out the reason why strpos($emailAddress, '@') === true go through
			foreach($_domains as $_domain) {
				
				if( strpos($emailAddress, $_domain) ) {
					return true;
				}
			}
		}	
		return false;
	}
?>