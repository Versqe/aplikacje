WYSZUKIWANIE ADRESU EMAIL
<?php
    $wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
    $tekst = "nazwa.maila@gmail.com";
    if(preg_match($wzorzec,$tekst))
        echo "znaleziono email<br>";
    else
        echo "nie znaleziono emaila <br>";
?>
