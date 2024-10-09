<!-- Aritmetik Operatorler -->
<?php
$num1=10;
$num2=2;

echo $num1. "**".$num2."=? <br>";
echo "sonuç:".$num1**$num2 . "<br>";
?>


<!-- Atama Opertorler -->
<?php
$num1=10;
$num2=2;

$num1-=$num2;
echo "sonuç=". $num1 ."<br>";
?>


<!-- Karsilastirma Opertorleri -->
<?php
$a = 10;
$b = 2;

// Eşittir
echo "Eşittir (==): ";
var_dump($a == $b); // Çıktı: bool(false)
echo "<br>";

// Aynı mı (değer ve veri tipi açısından)
echo "Aynı mı (===): ";
var_dump($a === $b); // Çıktı: bool(false)
echo "<br>";

// Eşit değil
echo "Eşit değil (!=): ";
var_dump($a != $b); // Çıktı: bool(true)
echo "<br>";

// Eşit değil
echo "Eşit değil (<>): ";
var_dump($a <> $b); // Çıktı: bool(true)
echo "<br>";

// Aynı değil (değer ve veri tipi açısından)
echo "Aynı değil (!==): ";
var_dump($a !== $b); // Çıktı: bool(true)
echo "<br>";

// Küçüktür
echo "Küçüktür (<): ";
var_dump($a < $b); // Çıktı: bool(false)
echo "<br>";

// Küçük veya eşittir
echo "Küçük veya eşittir (<=): ";
var_dump($a <= $b); // Çıktı: bool(false)
echo "<br>";

// Büyüktür
echo "Büyüktür (>): ";
var_dump($a > $b); // Çıktı: bool(true)
echo "<br>";

// Büyük veya eşittir
echo "Büyük veya eşittir (>=): ";
var_dump($a >= $b); // Çıktı: bool(true)
echo "<br>";

// Uzay gemisi operatörü (<=>)
echo "Uzay gemisi (<=>): ";
var_dump($a <=> $b); // Çıktı: int(1) (a > b olduğu için 1 döner)
echo "<br>";

// Mantıksal NOT operatörü
echo "Mantıksal NOT (!): ";
var_dump($a != !$b); // Çıktı: bool(true)
echo "<br>";

?>


