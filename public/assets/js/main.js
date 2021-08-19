var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent;

var frases = 'crear nuevo usuario | consultar usuario'


var textError = document.querySelector('.error');

var campoNom = document.querySelector('#input_nom');
var campoDes = document.querySelector('#input_des');
var campoCar = document.querySelector('#input_car');
var campoCos = document.querySelector('#input_cos');
var campoTie = document.querySelector('#input_tie');


var escuchaNom = document.querySelector('#start_nom');
var escuchaDes = document.querySelector('#start_des');
var escuchaCar = document.querySelector('#start_car');
var escuchaCos = document.querySelector('#start_cos');
var escuchaTie = document.querySelector('#start_tie');

var activo = false;

function inicioNom(){
	
	
	if(activo){
		escuchaNom.src = "{{ asset('assets/images/mic.gif') }}";
		activo = false;
	}
	else{
		escuchaNom.src = "{{ asset('assets/images/mic-animate.gif') }}";
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function(event){

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if(resultadoEscucha != ''){
				console.log('correcto');
				campoNom.value=resultadoEscucha;
			}
			else{
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}
			
			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function() {
		reconocimiento.stop();
		escuchaNom.src = '{{ asset("assets/images/mic.gif") }}';
		activo = false;
	}
	reconocimiento.onerror = function(event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' +event.error);
	}
}

function inicioDes(){
	
	
	if(activo){
		escuchaDes.src = 'assets/images/mic.gif';
		activo = false;
	}
	else{
		escuchaDes.src = 'assets/images/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function(event){

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if(resultadoEscucha != ''){
				console.log('correcto');
				campoApe.value=resultadoEscucha;
			}
			else{
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}
			
			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function() {
		reconocimiento.stop();
		escuchaDes.src = 'assets/images/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function(event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' +event.error);
	}
}

function inicioCar(){
	
	
	if(activo){
		escuchaCar.src = 'assets/images/mic.gif';
		activo = false;
	}
	else{
		escuchaCar.src = 'assets/images/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function(event){

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if(resultadoEscucha != ''){
				console.log('correcto');
				campoCar.value=resultadoEscucha;
			}
			else{
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}
			
			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function() {
		reconocimiento.stop();
		escuchaCar.src = 'assets/images/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function(event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' +event.error);
	}
}

function inicioCos(){
	
	
	if(activo){
		escuchaCos.src = 'assets/images/mic.gif';
		activo = false;
	}
	else{
		escuchaCos.src = 'assets/images/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function(event){

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if(resultadoEscucha != ''){
				console.log('correcto');
				campoCos.value=resultadoEscucha;
			}
			else{
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}
			
			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function() {
		reconocimiento.stop();
		escuchaCos.src = 'assets/images/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function(event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' +event.error);
	}
}

function inicioTie(){
	
	if(activo){
		escuchaTie.src = 'assets/images/mic.gif';
		activo = false;
	}
	else{
		escuchaTie.src = 'assets/images/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function(event){

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if(resultadoEscucha != ''){
				console.log('correcto');
				campoTie.value=resultadoEscucha;
			}
			else{
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}
			
			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function() {
		reconocimiento.stop();
		escuchaTie.src = 'assets/images/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function(event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' +event.error);
	}
}

escuchaNom.addEventListener('click', inicioNom);
escuchaDes.addEventListener('click', inicioDes);
escuchaCar.addEventListener('click', inicioCar);
escuchaCos.addEventListener('click', inicioCos);
escuchaTie.addEventListener('click', inicioTie);