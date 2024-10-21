<?php


//While
echo "While <br/> ";
$a = 0;

while ($a <= 10) {
    echo "$a . merhaba <br/> ";
    $a++;   
}

//İç İçe While
echo "<br/> İç İçe While <br/> ";
$a = 1;
$b = 1;

while ($a <= 10) {
    // echo $a . "";

    while ($b <= 10) {
        // echo "$a x $b = " . $a * $b . "";
        echo $a . ' ' .  $b . " ";
        echo "<br> <br/>";
        $b++;
    }

    $b = 1;
    $a++;
}



//Do-While
$a =5;
echo " While Döngüsü <br/> ";
while ($a < 6) {
    echo "sayı 6'dan küçük sayi=$a <br/>";
    $a++;
}
echo "sayı 6'dan büyük sayi=$a <br/> <br/>";




$a=10;
echo "Do While Döngüsü <br/>";
do{
    echo "sayı 6'dan küçük sayi=$a <br/>";
    $a++;
}while ($a<6);
echo "sayı 6'dan büyük sayi=$a <br/> ";

//For

echo "<br/> For Döngüsü <br/>";
for($a=0; $a<=10; $a++){
    echo "sayı=$a <br/>";
}



echo "<br/> Diziler İle For Döngüsü <br/>";

$name=["ahmet","mehemt","arda","can","cancan","kadr","besr","harn"];
for($a=0; $a < count($name); $a++){
    echo "name=$name[$a] <br/> ";
}


?>