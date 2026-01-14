<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefon = htmlspecialchars($_POST['telefon']);
    $zprava = htmlspecialchars($_POST['zprava']);

    $prijemce = "tvuj-email@seznam.cz"; // SEM DOPLŇ SVŮJ EMAIL
    $predmet = "Nová schůzka z portfolia od: $jmeno $prijmeni";
    
    $telo_emailu = "Jméno: $jmeno $prijmeni\n";
    $telo_emailu .= "Email: $email\n";
    $telo_emailu .= "Telefon: $telefon\n\n";
    $telo_emailu .= "Zpráva:\n$zprava";

    $hlavicky = "From: $email";

    if (mail($prijemce, $predmet, $telo_emailu, $hlavicky)) {
        echo "Děkuji! Vaše žádost o schůzku byla odeslána.";
    } else {
        echo "Omlouváme se, ale zprávu se nepodařilo odeslat.";
    }
}
?>