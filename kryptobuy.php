<?php 
	$choiceKrypto = filter_var(trim($_POST['choiceKrypto']), FILTER_SANITIZE_STRING);
	$number       = filter_var(trim($_POST['number']),       FILTER_SANITIZE_STRING);
	$choiceCurr   = filter_var(trim($_POST['choiceCurr']),   FILTER_SANITIZE_STRING);
	$mail		  = filter_var(trim($_POST['mail']),         FILTER_SANITIZE_STRING);
	$wallet		  = filter_var(trim($_POST['wallet']),       FILTER_SANITIZE_STRING);

	$choiceKrypto = stripslashes    ($choiceKrypto);
	$choiceKrypto = htmlspecialchars($choiceKrypto);
	$number		  = stripslashes    	  ($number);
	$number		  = htmlspecialchars      ($number);
	$choiceCurr	  = stripslashes      ($choiceCurr);
	$choiceCurr	  = htmlspecialchars  ($choiceCurr);
	$mail 		  = stripslashes 			($mail);
	$mail 		  = htmlspecialchars 		($mail);
	$wallet		  = stripslashes 		  ($wallet);
	$wallet		  = htmlspecialchars      ($wallet);

	

	
?>