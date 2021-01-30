<!DOCTYPE html>
<html lang="de">

	<head>
	<title> Angestellte-Autovermietung </title>
	<link href=style.css type=text/css rel=stylesheet> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

<body>

<header class="header">
<img class="Logo" src="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Bilder/auto.PNG">
<p class="LSchrift"><strong>Autovermietung</strong></p>
<nav style="margin-left: 30%">

<ul>
<li>Auftraege</li>
<li>Fahrzeuge</li>
<li><a href="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Filiale.php">Filialen</a></li>
<li>Kunden</li>
<li>Angestellte</li>
</ul>

</nav>
</header>


<h1> Angestellte: </h1>


<div>
<a href="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/NeuerAngestellter.php">
<img id="add" src="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Bilder/add.svg">
</a>
</div>


<div id="t">
<span class="table">
<center>
<?php
require "Verbindungsaufbau.php"; 
$result = mysqli_query($link,"SELECT * FROM Angestellter");
if (!$result) { echo 'Konnte Abfrage nicht ausführen: ' . mysql_error();exit;}
print "<table border='1'; cellspacing='0'; width='50%'> <tr> <th>ID</th><th>Nachname</th><th>Vorname</th><th>Aufgabe</th><th>Filialnummer</th><th>TelefonNr</th></tr>";
while ($row = mysqli_fetch_row($result)) {
print "<tr>";
foreach ($row as $f) print " <td align='center'>$f</td> ";
print "</tr>";
}
print "</table>";
?>
<center>
</span>
</div>

</body>
</html>