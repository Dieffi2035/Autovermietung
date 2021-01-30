

<!DOCTYPE html>
<html lang="de">

	<head>
	<title>FilialeHinzufuegen</title>
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

<h1 style="margin-left: 10%"> Filiale hinzufuegen: </h1>

<div class="addform">
<center>
<form action="insert.php">
  <table>
    <tr><td>Filialnummer:</td><td><input type="number" name="fnummer" class="Eingabefelder"></tr>
    <tr><td>Bezeichnung:</td><td><input name="bezeichnung" class="Eingabefelder"></tr>
    <tr><td>Telefonnummer:</td><td><input name="tlfNr" class="Eingabefelder"></tr>
    <tr><td>PLZ:</td><td><input name="plz" class="Eingabefelder"></tr>
    <tr><td>Land:</td><td><input name="land" class="Eingabefelder"></tr>
    <tr><td>Stadt:</td><td><input name="stadt" class="Eingabefelder"></tr>
    <tr><td>Straﬂe:</td><td><input name="strasse" class="Eingabefelder"></tr>
    <tr><td>Hausnummer:</td><td><input name="hn" class="Eingabefelder"></tr>
    <tr><td></td><td><input type=submit style="background-color: white; font-size: 60%; padding: 2%; margin-top: 5%"></tr>
</form>
</center>
</div>


</body>
</html> 