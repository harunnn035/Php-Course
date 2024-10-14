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
$a=5;
echo " While Döngüsü";	
while ($a < 6) {
    echo "Number less than 6 $a <br/>";
    $a++;
}
echo "Do-While Döngüsü";
do{
    echo "Number less than 6 $a <br/>";
    $a++;

}while ($a< 10);

echo "Number greater than 6 $a" ;