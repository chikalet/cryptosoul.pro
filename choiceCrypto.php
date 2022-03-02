<?php
	$choiceSale     = $_POST    ['name'];
	$choiceExchange = $_POST        [''];
	$image          = $_POST['buyImage'];

	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT'); 
	$btc = json_decode($res, TRUE); 
	$btc1 .= floatval($btc["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=ETHUSDT'); 
	$eth = json_decode($res, TRUE); 
	$eth1 .= floatval($eth["price"]); 


	// Tether пока не работает
	// $res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=USDTUSDT'); 
	// $tether = json_decode($res, TRUE); 
	// $string .= $tether["price"] . "$"; 
	// echo $string;

	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=BNBUSDT'); 
	$bnb = json_decode($res, TRUE); 
	$bnb1 .= floatval($bnb["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=USDCUSDT'); 
	$usdc = json_decode($res, TRUE); 
	$usdc1 .= floatval($usdc["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=ADAUSDT'); 
	$cardano = json_decode($res, TRUE); 
	$cardano1 .= floatval($cardano["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=XRPUSDT'); 
	$ripple = json_decode($res, TRUE); 
	$ripple1 .= floatval($ripple["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=SOLUSDT'); 
	$solana = json_decode($res, TRUE); 
	$solana1 .= floatval($solana["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=DOGEUSDT'); 
	$dogecoin = json_decode($res, TRUE); 
	$dogecoin1 .= floatval($dogecoin["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=DOTUSDT'); 
	$polcadot = json_decode($res, TRUE); 
	$polcadot1 .= floatval($polcadot["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=BUSDUSDT'); 
	$busd = json_decode($res, TRUE); 
	$busd1 .= floatval($busd["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=SHIBUSDT'); 
	$shiba = json_decode($res, TRUE); 
	$shiba1 .= floatval($shiba["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=MATICUSDT'); 
	$polygon = json_decode($res, TRUE); 
	$polygon1 .= floatval($polygon["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=TRXUSDT'); 
	$tron = json_decode($res, TRUE); 
	$tron1 .= floatval($tron["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=DAIUSDT'); 
	$dai = json_decode($res, TRUE); 
	$dai1 .= floatval($dai["price"]); 


	$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=ETCUSDT'); 
	$etc = json_decode($res, TRUE); 
	$etc1 .= floatval($etc["price"]); 





	$sql="select * from Posts limit 20"; 

	$arr = array("btc" => $btc1, "eth" => $eth1, "bnb" => $bnb1, "usdc" => $usdc1, "cardano" => $cardano1, "ripple" => $ripple1, "solana" => $solana1, "dogecoin" => $dogecoin1, "polcadot" => $polcadot1, "busd" => $busd1, "shiba" => $shiba1, "polygon" => $polygon1, "tron" => $tron1, "dai" => $dai1, "etc" => $etc1);
	$arr1 = json_encode($arr);

	echo $arr1;
	// file_put_contents("json/kryptojson.json", $arr1); 
	// print_r($arr);
?>