<h1>Security - Bericht ophalen</h1>
<p>Vul hieronder uw naam en wachtwoord in om een bericht terug uit de database te halen die u eerder heeft opgeslagen.</p>

<table width="100%">
	<tr>
		<td>Naam:</td>
		<td><input type="text" placeholder="naam" id="name" /></td>
	</tr>
	<tr>
		<td>Wachtwoord</td>
		<td><input type="password" placeholder="wachtwoord" id="password" /></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" id="get">Haal bericht op</button></td>
	</tr>
</table>

<div id="notification">
</div>

<script type="text/javascript">
	$("#get").on("click", function(){
		var _name 		= $("#name").val();
		var _password 	= $("#password").val();
		if (_name !== "" && _password !== "") {
			var _message = localStorage.getItem("message_" + _name);
			if (_message !== "" && _message !== null) {
				// decrypt message
				decryptMessage(_message, _name, _password);
				clearNotification(10000);
			}else {
				// No message found
				showNotification("Je naam en wachtwoord kwamen niet overeen of er is geen bericht gevonden.", "notification", 5000);
			}
		}else {
			showNotification("Je naam en wachtwoord kwamen niet overeen of er is geen bericht gevonden.", "notification", 5000);
		}
	});
</script>

