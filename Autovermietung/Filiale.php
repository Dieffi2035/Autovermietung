<!DOCTYPE html>
<html lang="de">

	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">	
	<title> Filialen </title>
	<link href=style.css type=text/css rel=stylesheet>  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

<body>

<header class="header">
<img class="Logo" src="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Bilder/auto.PNG">
<p class="LSchrift"><strong>Autovermietung</strong></p>
<nav style="margin-left: 30%">
<ul>
<li>Auftr‰ge</li>
<li>Fahrzeuge</li>
<li><strong>Filialen</strong></li>
<li>Kunden</li>
<li><a href="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Angestellte.php">Angestellte</a></li>

</ul>
</nav>
</header>


<h1> Filialen: </h1>


<div>
<a href="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/NeueFiliale.php">
<img id="add" src="http://fbwallinone.th-brandenburg.de/~string/Autovermietung/Bilder/add.svg">
</a>
</div>


<div id="t">
<span class="table" style="font-size: 170%">
<center>
<?php
require "Verbindungsaufbau.php"; 
$result = mysqli_query($link,"Select Filiale.FNummer, Filiale.Bezeichnung, Filiale.TelefonNr,  Standort.* From Filiale
inner join Standort on Filiale.PLZ=Standort.PLZ");
if (!$result) { echo 'Konnte Abfrage nicht ausf√ºhren: ' . mysql_error();exit;}
print "<table border='1'; cellspacing='0'; width='50%'> <tr><th>Filialnummer</th><th>Bezeichnung</th><th>Telefonnummer</th><th>PLZ</th><th>Land</th><th>Stadt</th><th>Straﬂe</th><th>Hausnummer</th></tr>";
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