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

	if ($choiceKrypto   	 == 'btc')     	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'eth')    	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'tetherusd')   	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'bnb') 	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'usdc') 		   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'cardano') 		   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'ripple') 		   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'solana') 		   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'polkadot')  	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'busd') 	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'shiba') 	   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'polygon') 		   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'tron') 		   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'dai') 			   {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'etс') {

		$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');

	} else if($choiceKrypto == 'dogecoin'){
	 	$purchaseKrypto 	 = '***';
		include               	       ('./headerSell.php');
	}

?>



