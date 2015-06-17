function clearNotification(timeoutTime) {
	if (timeoutTime > 0) {
		setTimeout(
		function() {
			$("#notification").html("");
		}, timeoutTime);
	}else {
		$("#notification").html("");
	}
}

function cryptMessage(_name, _password, _message) {
	// Check if fields are filled in.
	if (_name != "" && _password != "" && _message != "") {
		// Successfull
		if (_name != _password) {
			var getMessage = localStorage.getItem("message_" + _name);
			if (getMessage == null) {
				// Encrypt
				var encryptedString = CryptoJS.AES.encrypt(_message, _name + "_" + _password);
				localStorage.setItem("message_" + _name, encryptedString);

				// Show success notification to user
				$("#form").hide();
				showNotification("Gegevens opgeslagen. Klik <a href=\"?page=encrypt\">hier</a> om een nieuw bericht op te maken.", "form_container", 0);
			}else {
				showNotification("Deze naam is helaas al ingebruik.", "notification", 5000);
			}
		}else {
			showNotification("Kies een veilig wachtwoord. Je naam mag niet hetzelfde zijn als je wachtwoord.", "notification", 5000);
		}
	}else {
		showNotification("Niet alle velden zijn juist ingevuld.", "notification", 5000);
	}
}

function showNotification(_notification, _divID, _timeoutTime) {
	$("#"+_divID+"").html("<p>"+ _notification +"</p>");
	clearNotification(_timeoutTime);
}

function decryptMessage(_message, _name, _password) {
	var decodedString = CryptoJS.AES.decrypt(_message, _name + "_" + _password);
	var _message = decodedString.toString(CryptoJS.enc.Utf8);
	if (_message != "") {
		$("#notification").html("<h1>Je bericht:</h1><p>"+ _message +"</p>");
	}else {
		showNotification("Geen bericht gevonden.", "notification", 5000);
	}
}