window.onload = function() {
	setInterval(function(){
		var date = new Date();
		var displayTime = date.toLocaleTimeString();

		document.getElementById('currenttime').innerHTML = displayTime;
	}, 1000);	// Màj toutes les 1000 ms 
}

function displayProjet(ID) {
	i = 0;

	while (document.getElementsByClassName('SAE')[i] != null) {
		document.getElementsByClassName('SAE')[i].classList.remove('show');
		i++;
	}

	document.getElementById(ID).classList.add('show');
}

function hideBloc(ID) {
	document.getElementById(ID).classList.contains('show') ? document.getElementById(ID).classList.remove('show') : document.getElementById(ID).classList.add('show');
}

function showBloc(ID) {
	document.getElementById(ID).classList.add('show');
}

function setFullScreen() {
	if (document.fullscreenElement) {
		document.exitFullscreen();
	} else {
		document.documentElement.requestFullscreen();
	}
}

function closeWindow() {
	window.close();
}
