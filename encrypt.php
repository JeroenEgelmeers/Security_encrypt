<h1>Security - Bericht opslaan</h1>
<p>Hieronder is het mogelijk om versleuteld gegevens op te slaan. Doormiddel van uw naam en wachtwoord is het mogelijk om het bericht weer uit te lezen op ieder gewenst moment.</p>

<div id="form_container">
<table width="100%" id="form">
	<tr>
		<td>Uw naam</td>
		<td><input type="text" placeholder="Naam" id="name" /></td>
	</tr>
	<tr>
		<td>Uw wachtwoord</td>
		<td><input type="password" placeholder="Wachtwoord" id="password" /></td>
	</tr>
	<tr>
		<td>Geheime tekst</td>
		<td><textarea placeholder="Uw geheime tekst" id="message"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" id="save">Sla bericht op</button></td>
	</tr>
</table>
</div>

<div id="notification">
</div>

<script type="text/javascript">
	$("#save").on("click", function(){
		cryptMessage($("#name").val(), $("#password").val(), $("#message").val());
	});
</script>