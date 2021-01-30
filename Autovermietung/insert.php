<!DOCTYPE html>
<html lang="de">

	<head>
	<title> AngestelltenHinzufügen</title>
	<link href=style.css type=text/css rel=stylesheet> 
	<meta http-equiv="refresh" content="1; URL=Angestellte.php">
	</head>

<body>

<div class="header">
</div>

<!-- Neuer Angestellter -->
<?php
require "Verbindungsaufbau.php";
$mid=strip_tags($_GET["mid"]);
$nname=strip_tags($_GET["nachname"]);
$name=strip_tags($_GET["name"]);
$aufg=strip_tags($_GET["aufgabe"]);
$fn=strip_tags($_GET["filiale"]);
$tn=strip_tags($_GET["tlfnr"]);
$sql="INSERT INTO Angestellter (MID, Name, Vorname, Aufgabe, FNummer, TelefonNr) VALUES ('$mid','$nname','$name','$aufg','$fn','$tn')";
print "$sql"; 
$dbeintrag = mysqli_query($link,$sql); 
?>

<!-- Neue Filiale --> 
<?php
require "Verbindungsaufbau.php";
$fnummer=strip_tags($_GET["fnummer"]);
$bezeichnung=strip_tags($_GET["bezeichnung"]);
$tlfnr=strip_tags($_GET["tlfNr"]);
$plz=strip_tags($_GET["plz"]);
$land=strip_tags($_GET["land"]);
$stadt=strip_tags($_GET["stadt"]);
$strasse=strip_tags($_GET["strasse"]);
$hausnummer=strip_tags($_GET["hn"]);

$sql1="INSERT INTO Standort (PLZ, Land, Stadt, Strasse, Hausnummer) VALUES ('$plz', '$land','$stadt','$strasse','$hausnummer')";
print "$sql1";
$sql2="INSERT INTO Filiale (FNummer, Bezeichnung, TelefonNr, PLZ) VALUES ('$fnummer','$bezeichnung','$tlfnr','$plz')";
print "$sql2"; 
$dbeintrags = mysqli_query($link,$sql1); 
$dbeintragf = mysqli_query($link,$sql2); 
?>

</body>
</html>
