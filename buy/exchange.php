<?php 
	$title = 'Обмен';
	include('../headerExchange.php');
?>
<link rel="stylesheet" type="text/css" href="/styles/stylemain.css">
<div class="kryptobuy">
	<form action="/kryptosell.php" method="post">
		<div id="give">
			<select class="form-select" aria-label="Default select example" name="choiceKrypto" id="choiceKrypto">
				<option disabled="true" class="wordinselect">Выберите криптовалюту</option>
  				<option value="btc" selected class="wordinselect">Bitcoin</option>
  				<option value="eth" class="wordinselect">Ethereum</option>
  				<option value="tetherusd" class="wordinselect">Tether USD</option>
  				<option value="bnb" class="wordinselect">Binance Coin</option>
  				<option value="usdc" class="wordinselect">USD coin</option>
  				<option value="cardano" class="wordinselect">Cardano</option>
				<option value="ripple" class="wordinselect">Ripple</option>
  				<option value="solana" class="wordinselect">Solana</option>
  				<option value="dogecoin" class="wordinselect">Doge Coin</option>
  				<option value="polcadot" class="wordinselect">Polkadot</option>
  				<option value="busd" class="wordinselect">Binance USD</option>
  				<option value="shiba" class="wordinselect">Shiba Inu</option>
  				<option value="polygon" class="wordinselect">Polygon</option>
  				<option value="tron" class="wordinselect">Tron</option>
  				<option value="dai" class="wordinselect">DAI</option>
  				<option value="etc" class="wordinselect">Ethereum Classic</option>
			</select>
			<input type="number" name="number" id="number" placeholder="загружаются данные..." disabled="true">
		</div>
		<div id="take">
			<select class="form-select" aria-label="Default select example" name="choiceKrypto1" id="choiceKrypto1">
				<option disabled="true" class="wordinselect">Выберите криптовалюту</option>
  				<option value="btc" selected class="wordinselect">Bitcoin</option>
  				<option value="eth" class="wordinselect">Ethereum</option>
  				<option value="tetherusd" class="wordinselect">Tether USD</option>
  				<option value="bnb" class="wordinselect">Binance Coin</option>
  				<option value="usdc" class="wordinselect">USD coin</option>
  				<option value="cardano" class="wordinselect">Cardano</option>
				<option value="ripple" class="wordinselect">Ripple</option>
  				<option value="solana" class="wordinselect">Solana</option>
  				<option value="dogecoin" class="wordinselect">Doge Coin</option>
  				<option value="polcadot" class="wordinselect">Polkadot</option>
  				<option value="busd" class="wordinselect">Binance USD</option>
  				<option value="shiba" class="wordinselect">Shiba Inu</option>
  				<option value="polygon" class="wordinselect">Polygon</option>
  				<option value="tron" class="wordinselect">Tron</option>
  				<option value="dai" class="wordinselect">DAI</option>
  				<option value="etc" class="wordinselect">Ethereum Classic</option>
			</select>
			<input type="text" name="value" id="value" placeholder="загружаются данные..." disabled="true" readonly="true">
		</div>
		<div id="datatoreceive">
				<p class="adreess position">Ваш email адрес</p>
				<input type="text" name="mail" placeholder="введите ваш адрес электронной почты">
		 		<p class="adreess position">Адрес кошелька</p>
				<input type="text" name="wallet">
		</div>
		<button class="btn waves-effect waves-light btnKrypto" type="submit" name="action">Подтвердить</button>
	</form>
</div>

<?php 
	include('../footer.html');
?>