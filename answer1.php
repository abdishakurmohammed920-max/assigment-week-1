<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$a =10;
$b=25;
$c=15;

if( $a > $b && $a > $c ){
    $greatest = $a;

} elseif ($b > $a  && $b > $c){
    $greatest =$c;
    } else {
        $greatest =c;
    }

if ($a < $b && $a < $c){
    $smallest = $a;

} elseif ($b< $a && $b < $c){
$smallest = $b;
} else {
    $smallest =$c;
}

echo "greatest number: " . $greatest . "<br>";
echo " smalest number :"  .$smallest;
?>

<?php

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5";
} elseif ($num % 3 == 0) {
    echo "The number is divisible by 3";
} elseif ($num % 5 == 0) {
    echo "The number is divisible by 5";
} else {
    echo "The number is divisible by neither 3 nor 5";
}



$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5";
} elseif ($num % 3 == 0) {
    echo "The number is divisible by 3";
} elseif ($num % 5 == 0) {
    echo "The number is divisible by 5";
} else {
    echo "The number is divisible by neither 3 nor 5.  <br>";
}
  echo "<br>";
 
for ($i= 2; $i<= 20; $i++){
    if($i %2 != 0){
        echo $i . " ";
    }
}

    echo "<br>";

 
for($i=35; $i >= 7; $i--){
    if($i % 2 ==0){
        echo $i ." ";
    }
} 

echo "<br>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }

}

echo "<br>";

$num = 12345;
$reverse = 0;

while ($num > 0) {

    $digit = $num % 10;

    $reverse = ($reverse * 10) + $digit;

    $num = (int)($num / 10);
}

echo "Reverse: " . $reverse;


echo "<br>";
$a = 8;
$b = 12;

$max = ($a > $b) ? $a : $b;

while (true) {

    if ($max % $a == 0 && $max % $b == 0) {
        $lcm = $max;
        break;
    }

    $max++;
}

echo "LCM: " . $lcm;

echo "<br>";

$a = 18;
$b = 24;

$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {

    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }

}

echo "HCF: " . $hcf;


echo "<br>";


   echo "multabliction table ";
echo "<table border='1'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>" . ($i * $j) . "</td>";

    }

    echo "</tr>";
}

echo "</table>";






?>
</body>
</html>