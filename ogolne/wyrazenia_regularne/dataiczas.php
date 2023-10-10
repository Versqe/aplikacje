DATA
<?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
?>
 
CZAS
<?php
    echo "The time is " . date("h:i:sa");
?>

DATA Z GODZINĄ
<?php
    $d=mktime(11,14,51,8,12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>