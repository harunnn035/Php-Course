<?php


//While
$a = 0;

while ($a <= 10) {
    echo "$a . merhaba <br/>";
    $a++;
}

//İç İçe While

$a = 1;
$b = 1;

while ($a <= 10) {
    // echo $a . "";

    while ($b <= 10) {
        // echo "$a x $b = " . $a * $b . "";
        echo $a . ' '.  $b . " ";
        echo "<br>";
        $b++;
    }
    
    $b = 1;
    $a++;
}



//Do-While
