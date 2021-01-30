

<!DOCTYPE html>
<html lang="de">

	<head>
	<title>MitarbeiterHinzufuegen</title>
	<link href=style.css type=text/css rel=stylesheet> 
	<?php require ("Verbindungsaufbau.php") ?>
	</head>

<body>

<header class="header">
<img class="Logo2" src="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Bilder/auto.PNG">
<p class="LSchrift2"><strong>Autovermietung</strong></p>
</header>

<a href="javascript:history.back()">
<img id="closebtn" src="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Bilder/close.png">
</a>

<h1 style="margin-left: 10%"> Mitarbeiter hinzufuegen: </h1>

<div class="addform">
<center>
<form action="insert.php">
  <table>
    <tr><td>MitarbeiterID:</td><td><input name="mid" class="Eingabefelder"></tr>
    <tr><td>Nachname:</td><td><input name="nachname" class="Eingabefelder"></tr>
    <tr><td>Vorname:</td><td><input name="name" class="Eingabefelder"></tr>
    <tr><td>Aufgabe:</td><td><input name="aufgabe" class="Eingabefelder"></tr>
    <tr><td>Filialnummer:</td><td><input name="filiale" class="Eingabefelder"></tr>
    <tr><td>Telefonnummer:</td><td><input name="tlfnr" class="Eingabefelder"></tr>
    <tr><td></td><td><input type=submit style="background-color: white; font-size: 60%; padding: 2%; margin-top: 5%"></tr>
</form>
</center>
</div>


</body>
</html> 