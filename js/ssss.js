document.addEventListener('DOMContentLoaded', function (event) {
	let numberInput = document.getElementById('number');
	let valueInput = document.getElementById('value');
	let choiceKrypto = document.getElementById('choiceKrypto');
	
	if (numberInput != null && valueInput != null && choiceKrypto !== null) {
		fetchCurr(numberInput, valueInput, choiceKrypto);

	}
});

function fetchCurr(numberInput, valueInput, choiceKrypto){
	let x = new XMLHttpRequest();
		x.open('POST', '/choiceCrypto.php');

		x.onreadystatechange = function() {
			if (x.readyState !== 4) return;

			let response = JSON.parse(x.responseText);
			numberInput.removeAttribute('disabled');
			numberInput.setAttribute('placeholder', 'введите данные');
			numberInput.addEventListener('input', function(event){
			handleEvent (numberInput, valueInput, choiceKrypto,response);
		});

		choiceKrypto.addEventListener('change', function(){
				handleEvent (numberInput, valueInput, choiceKrypto, response);
		});

		choiceCurr.addEventListener('change', function(){
				handleEvent (numberInput, valueInput, choiceKrypto, response);
		});
	}

	x.send();
}

function handleEvent (numberInput, valueInput, choiceKrypto, response) {
			let crType = choiceKrypto.value;

			let crCost = parseFloat(response[crType]);

			// console.log(response[crType]);

			let f = crCost * parseFloat(numberInput.value);

			valueInput.value = String(f) + "$";
}