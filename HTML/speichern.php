<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Geschichte</title>
<link rel="stylesheet" href="../Styles/CSS/styles.css" type="text/css">
<link rel="stylesheet" href="../Styles/CSS/styles_blinken.css" type="text/css">
<link rel="stylesheet" href="../Styles/CSS/styles_carousel.css" type="text/css">
<link rel="stylesheet" href="../Styles/CSS/styles_dropdown.css" type="text/css">
<link rel="stylesheet" href="../Styles/CSS/styles_flipp_vertical.css" type="text/css">
<link rel="stylesheet" href="../Styles/CSS/styles_tabelle.css" type="text/css">
<link rel="stylesheet" href="../Styles/CSS/styles_textwelle.css" type="text/css">
</head>
<body>
 <div id="center">
  <div id="logo_name">
    <table class="middle">
     <tr>
      <td><img class="logo-size" src="../Images/Logo.png" alt="Ups, unser Logo konnte nicht geladen werden"></td>
     </tr>
    </table>
  </div> <!-- Ende logo_name -->

 <div id="navigation">
   <table class="nav">
    <tr>
     <td class="nav_active"><a href="index.html">Startseite</a></td>
     <td class="nav"><a href="sortiment.html">Sortiment</a></td>
     <td class="nav"><div class="dropdown">
                      <span>Filialen</span>
                       <div class="dropdown-content">
                        <p><a href="Filiale/amtsfreiheit7_karte.html">Karte</a></p>
                        <div class="dropdown-filiale">
                            <span>Filialen</span>
                             <div class="dropdown-content_rechts">
                              <p><a href="Filiale/amtsfreiheit7.html">Amtsfreiheit 7</a></p>
                              <p><a href="Filiale/k&ouml;nigsberger.html">K&ouml;nigsberger Str. 6</a></p>
                              <p><a href="Filiale/schulweg9.html">Schulweg 9</a></p>
                             </div> <!-- Ende dropdown-content -->
                            </div> <!-- Ende dropdown -->
                       </div> <!-- Ende dropdown-content -->
                     </div> <!-- Ende dropdown --> </td>
     <td class="nav"><div class="dropdown">
                      <span>&Uuml;ber Uns</span>
                       <div class="dropdown-content">
                        <p><a href="geschichte.html">Geschichte</a></p>
                        <p><a href="philosophie.html">Philosophie</a></p>
                       </div> <!-- Ende dropdown-content -->
                     </div> <!-- Ende dropdown --> </td>
     <td class="nav"><a href="impressum.html">Kontakt</a></td>
    </tr>
   </table>
  </div> <!-- Ende navigation -->

  <div id="main">
   <div id="inhalt">
    <h2 class="&uuml;ber_uns">Ergebnis des Gewinnspiels</h2>
    <p class="formatcenter">
    <?PHP
 /* Variabeln */
 $i = 0;
 $Antwort1 = $_POST["frage1"];
 $Antwort2 = $_POST["frage2"];
 $Antwort3 = $_POST["frage3"];
 $Antwort4 = $_POST["frage4"];
 $Antwort5 = $_POST["frage5"];

 $Anrede = $_POST["Anrede"];
 $Name = $_POST["Name"];
 $Nachname = $_POST["Nachname"];
 $E_Mail = $_POST["EMail"];
 $Telefon = $_POST["Telefon"];
 $Straße = $_POST["Straße"];
 $PLZ = $_POST["PLZ"];
 $Lieblingsprodukt = $_POST["Lieblingsprodukt"];

 $Kategorien = $_POST["Kategorien"];
 /* Ende Variabeln */


 /* Fragen */
 if ($Antwort1 == "frage1_richtig")
 {
  echo "Antwort 1: richtig";
  $i = $i + 1;
 }
 else { echo "Antwort 1: falsch"; }
 echo "<br>";
 if ($Antwort2 == "frage2_richtig")
 {
  echo "Antwort 2: richtig";
  $i = $i + 1;
 }
 else { echo "Antwort 2: falsch"; }
 echo "<br>";
 if ($Antwort3 == "frage3_richtig")
 {
  echo "Antwort 3: richtig";
  $i = $i + 1;
 }
 else { echo "Antwort 3: falsch"; }
 echo "<br>";
 if ($Antwort4 == "frage4_richtig")
 {
  echo "Antwort 4: richtig";
  $i = $i + 1;
 }
 else { echo "Antwort 4: falsch"; }
 echo "<br>";
 if ($Antwort5 == "frage5_richtig")
 {
  echo "Antwort 5: richtig";
  $i = $i + 1;
 }
 else { echo "Antwort 5: falsch"; }
 echo "<br><br>";
 /* Ende Fragen */

 /* 'E-Mail' */
 if ($i == 5)
 {
  echo "Herzlichen Gl&uuml;ckwunsch!<br>";
  if ($Anrede == "Frau") { echo "Sehr geehrte ".$Anrede." ".$Nachname.", "; }
  else if ($Anrede == "Herr") { echo "Sehr geehrter ".$Anrede." ".$Nachname.", "; }
  echo "Sie haben 5 von 5 m&ouml;glichen Antworten richtig!<br>";
  echo "Ihr Gutschein wird demn&auml;chst mit der Post geliefert!<br>";
  echo "Vielen Dank f&uuml;r Ihre Teilnahme!";
 }
 else
 {
  echo "Vielen Dank f&uuml;r Ihre Teilnahme!<br>";
  if ($Anrede == "Frau") { echo "Sehr geehrte ".$Anrede." ".$Nachname.", "; }
  else if ($Anrede == "Herr") { echo "Sehr geehrter ".$Anrede." ".$Nachname.", "; }
  echo "es tut uns leid Ihnen mitteilen zu m&uuml;ssen, dass Sie nicht Gewonnen haben.<br>";
  echo "Sie haben leider nur ".$i." von 5 m&ouml;glichen Antworten richtig!";
 }
 echo "<br><br>";
 /* Ende 'E-Mail' */

 /* Eingekaufte Kategorien */
 if (!empty($_POST["Kategorien"]) AND $_POST["Kategorien"] == "Brot")
 {
  $Brot = "true";
  echo $Anrede." ".$Nachname.", vielen Dank, das Sie uns mittgeteilt haben, das Sie regelm&auml;&szlig;ig aus der Kategorie Brot kaufen.";
 }
 else { $Brot = "false"; }

 if (!empty($_POST["Kategorien"]) AND $_POST["Kategorien"] == "Kleingebäck")
 {
  $Kleingebäck = "true";
  echo $Anrede." ".$Nachname.", vielen Dank, das Sie uns mittgeteilt haben, das Sie regelm&auml;&szlig;ig aus der Kategorie Kleingebäck kaufen.";
 }
 else { $Kleingebäck = "false"; }

 if (!empty($_POST["Kategorien"]) AND $_POST["Kategorien"] == "Feine Backwaren")
 {
  $FeineBackwaren = "true";
  echo $Anrede." ".$Nachname.", vielen Dank, das Sie uns mittgeteilt haben, das Sie regelm&auml;&szlig;ig aus der Kategorie Feine Backwaren kaufen.";
 }
 else { $FeineBackwaren = "false"; }

 if (!empty($_POST["Kategorien"]) AND $_POST["Kategorien"] == "Schokolade")
 {
  $Schokolade = "true";
  echo $Anrede." ".$Nachname.", vielen Dank, das Sie uns mittgeteilt haben, das Sie regelm&auml;&szlig;ig aus der Kategorie Schokolade kaufen.";
 }
 else { $Schokolade = "false"; }
 /* Ende Eingekaufte Kategorien */


 /* Datenbank eingabe */
 $dbh = new PDO('mysql:host=localhost;dbname=buchwald', 'root','');
 $einfügen = $dbh->prepare("INSERT INTO kunde(kunde.Anrede, kunde.Vorname, kunde.Nachname, kunde.Telefonnummer, kunde.E-Mail, kunde.PLZ, kunde.Straße, kunde.f. Lieblingsprodukt_ID) VALUES ();");
 $einfügen->execute(array($Brot));
 $dbh = null;
 /* Ende Datenbank eingabe */
?></p>
   </div> <!-- Ende inhalt -->
  </div> <!-- Ende main -->

  <div id="info">
   <table class="info">
    <tr><td>Amtsfreiheit 7</td></tr>
    <tr><td>29439 L&uuml;chow</td></tr>
    <tr><td>Email: <a href='mailto:buchenwald@gmx.de'>buchwald@gmx.de</a> </td></tr>
    <tr><td><a href="impressum.html">Impressum</a></td></tr>
   </table>
  </div> <!-- Ende info -->

  <div id="copyright">
   <table class="copyright">
    <tr>
     <td>Copyright &copy; 2020 - Buchwald</td>
    </tr>
   </table>
  </div> <!-- Ende copyright -->
 </div> <!-- Ende center -->
</body>
</html>