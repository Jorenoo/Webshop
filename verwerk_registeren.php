<?php
$Voornaam = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Wachtwoord = $_POST['wachtwoord1'];
$email = $_POST['e-mail'];
$telefoon = $_POST['telefoon'];
$straatnaam = $_POST['straat'];
$plaats = $_POST['plaats'];
$postcode = $_POST['postcode'];
$Naam = $Voornaam . ' ' . $Lastname;
include 'Connectie.php';

$vraag = "INSERT INTO klant( Naam, Wachtwoord, Email, Nummer, Straat, Plaats, Postcode ) Values('" .$Naam."' , '" .$Wachtwoord."' , '" .$email."' , '" .$telefoon."' , '" .$straatnaam."' , '" .$plaats."' , '" .$postcode."')";
$resultaat = $conn->query($vraag);


if ( $resultaat == false )
{
   echo "Fout in insert-query of toevoegen niet gelukt!";
}
else
?>