document.addEventListener('DOMContentLoaded', function (event) {
	let numberInput = document.getElementById('number');
	let valueInput = document.getElementById('value');
	let choiceKrypto = document.getElementById('choiceKrypto');
	let choiceKrypto1 = document.getElementById('choiceKrypto1');

	if (numberInput != null && valueInput != null && choiceKrypto !== null && choiceKrypto1 !== null) {
		fetchCurr(numberInput, valueInput, choiceKrypto, choiceKrypto1);
	}

});

function fetchCurr(numberInput, valueInput, choiceKrypto, choiceKrypto1){
	let x = new XMLHttpRequest();
		x.open('POST', '/choiceCrypto.php');

		x.onreadystatechange = function() {
			if (x.readyState !== 4) return;

			let response = JSON.parse(x.responseText);
			numberInput.removeAttribute('disabled');
			numberInput.setAttribute('placeholder', 'введите данные');
			numberInput.addEventListener('input', function(event){
			handleEvent (numberInput, valueInput, choiceKrypto, choiceKrypto1, response);
		});

		valueInput.removeAttribute('disabled');
		valueInput.setAttribute('placeholder', 'результат');

		choiceKrypto1.addEventListener('change', function(){
				handleEvent (numberInput, valueInput, choiceKrypto, choiceKrypto1, response);
		});

		choiceKrypto.addEventListener('change', function(){
				handleEvent (numberInput, valueInput, choiceKrypto, choiceKrypto1, response);
		});

		valueInput.addEventListener('change', function(){
				handleEvent (numberInput, valueInput, choiceKrypto, choiceKrypto1, response);
		});
	}

	x.send();
}

function handleEvent (numberInput, valueInput, choiceKrypto, choiceKrypto1, response) {
			let type0 = choiceKrypto.value;
			let type1 = choiceKrypto1.value;
			let value0  = parseFloat(numberInput.value);

			let coast0 = value0*parseFloat(response[type0]);
			let coast1 = parseFloat(response[type1]);

			let result = coast0/coast1;
			valueInput.value = result;
}


