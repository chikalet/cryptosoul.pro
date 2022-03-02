<?php 
	$title = 'Продажа';
	require('../header.php');
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
			<!-- <select class="form-select" aria-label="Default select example" name="choiceCurr" id="choiceCurr">
  				<option selected class="wordinselect">Выберите валюту</option>
  				<option value="RUB">RUB</option>
  				<option value="USD">USD</option>
  				<option value="EUR">EUR</option>
			</select> -->
			<p id="price">Итоговая Цена</p>
			<div id="choiceCurr">
			<input type="text" readonly="true" name="value" id="value" placeholder="итого">
			</div>
		</div>
		<div id="datatoreceive">
				<p class="adreess position">Ваш email адрес</p>
				<input type="text" name="mail" placeholder="введите ваш адрес электронной почты">
		 		<p class="adreess position" >Номер карты</p>
				<input type="number" name="wallet" min="0000000000000000" max="9999999999999999" required>
		</div>
		<button class="btn waves-effect waves-light btnKrypto" type="submit" name="action">Подтвердить</button>
	</form>
</div>

<?php 
	include('../footer.html');
?>