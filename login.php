<?php
session_start();
include 'connectie.php';

$inlognaam = $_POST['e-mail'];
$wachtwoord = $_POST['Wachtwoord'];

$vraag = " SELECT * FROM  klant WHERE Email='" .$inlognaam. "' AND Wachtwoord= '" .$wachtwoord. "' ";

$resultaat = $conn->query($vraag);

if ($resultaat -> num_rows > 0)
{
    
    $rij = $resultaat ->fetch_assoc();

    $_SESSION['telefoonummer'] = $rij['Nummer'];
    $_SESSION['naam'] = $rij ['Naam'];
    $_SESSION['email'] = $rij ['Email'];
    $_SESSION['plaats'] = $rij ['Plaats'];
    $_SESSION['postcode'] = $rij ['Postcode'];
    $_SESSION['straat'] = $rij ['Straat'];
    header('Location: /php/Webshop/Index.php');
}
    else 
    {
        echo 'We hebben geen match!';
    }

?>