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

		$purchaseKrypto 	 = 'bc1q8vs9c62dclkwuyt2fmxnvhxlqypyzuyergf4ew';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'eth')    	   {

		$purchaseKrypto 	 = '0x62eAD3C47186CAEd70363B788b7cc22185BfD99c';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'tetherusd')   	   {

		$purchaseKrypto 	 = '0x62eAD3C47186CAEd70363B788b7cc22185BfD99c';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'bnb') 	   {

		$purchaseKrypto 	 = 'bnb1aujtmdf6j6qla09m9px9qs02002hcewxu72ltl';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'usdc') 		   {

		$purchaseKrypto 	 = '0x62eAD3C47186CAEd70363B788b7cc22185BfD99c';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'cardano') 		   {

		$purchaseKrypto 	 = 'addr1qxn6xnkmqhm62ht307rqynj3uunu5wue2p0k8s0c7vpdf4a85d8dkp0h54whzluxqf89ree8egaej5zlv0ql3ucz6ntscf4pqj';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'ripple') 		   {

		$purchaseKrypto 	 = 'rPRzaU6rPionEzcPT1uuC4xLsCF48SyQho';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'solana') 		   {

		$purchaseKrypto 	 = '6zjfzNXYFmYa4NJbeDXozvS9a2bK7xPV7tFKpP8nmGZE';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'polkadot')  	   {

		$purchaseKrypto 	 = '14toYCRHuW6WXvWAsUnVPr5CrAZZ3KcDngvxEE9TAzjTF4Nm';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'busd') 	   {

		$purchaseKrypto 	 = '0x62eAD3C47186CAEd70363B788b7cc22185BfD99c';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'shiba') 	   {

		$purchaseKrypto 	 = '0x62eAD3C47186CAEd70363B788b7cc22185BfD99c';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'polygon') 		   {

		$purchaseKrypto 	 = 'TTuoN2J2GUGbXPizRkUDjw8mNvPeW1Zbmg';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'tron') 		   {

		$purchaseKrypto 	 = '0x62eAD3C47186CAEd70363B788b7cc22185BfD99c';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'dai') 			   {

		$purchaseKrypto 	 = '0x6432cEAcd9A3fCE6355dCEE20E199C262Da92aAc';
		include               	       ('./headerSell.php');
	} else if ($choiceKrypto == 'etс') {

		$purchaseKrypto 	 = '0x6432cEAcd9A3fCE6355dCEE20E199C262Da92aAc';
		include               	       ('./headerSell.php');

	} else if($choiceKrypto == 'dogecoin'){
	 	$purchaseKrypto 	 = 'DDXw1Qp3jrDA8RUtGLR6FiaHRQpd6Loq7V';
		include               	       ('./headerSell.php');
	}

?>



