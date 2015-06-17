# Security eindopdracht
Deze tool maakt het mogelijk om doormiddel van LocalStorage berichten versleuteld op te slaan. Hierbij heb ik gebruik gemaakt van het crypto-js framework van Google. Daarnaast wordt gebruik gemaakt van HTML (pagina opmaak), CSS (styles) & JQuery (notifications).

# Notifications
Bovenaan functions/main.js vind je twee notifications classes. Deze worden overal gebruikt om korte berichten naar gebruikers te sturen. Dit is makkelijk aangezien hierdoor een wijziging maar op één plek hoeft te gebeuren en je vaak gebruik maakt van messages.

# Encrypt
Als eerste dient de gebruiker een naam + wachtwoord op te geven. De naam mag nog niet gebruikt zijn aangezien anders het bericht niet meer opgehaald worden (wordt het bericht overschreven). Daarnaast wordt ook gecontroleerd of de naam niet hetzelfde is als het wachtwoord (onveilig) & of alle velden juist zijn ingevuld. Dit alles wordt gedaan in de cryptMessage() functie in functions/main.js.

Daarna wordt een encryptedString aangemaakt d.m.v. (CryptoJS.AES.encrypt(BERICHT, NAAM + "_" + WACHTWOORD);).
Slaagt het proces, dan ontvangt de gebruiker hier bericht van.

# Decrypt
Zodra een gebruiker een bericht opvraagt wordt eerst gecontroleerd of zowel de naam als het wachtwoord kloppen. Mits dit het geval is en er een bericht wordt gevonden d.m.v. deze combinatie wordt het bericht getoond op de pagina.
