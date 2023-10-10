<?php
    $wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
    $tekst = "www.google.pl";
    if(preg_match($wzorzec,$tekst,$matches))
        echo "znaleziono link: ".$matches[0];
    else
        echo "nie znaleziono linku <br>";
?>