<?php

// Problem 1: Greatest and Smallest Number

$num1 = 25;
$num2 = 10;
$num3 = 18;

if ($num1 >= $num2 && $num1 >= $num3) {
    $greatest = $num1;
}
elseif ($num2 >= $num1 && $num2 >= $num3) {
    $greatest = $num2;
}
else {
    $greatest = $num3;
}

if ($num1 <= $num2 && $num1 <= $num3) {
    $smallest = $num1;
}
elseif ($num2 <= $num1 && $num2 <= $num3) {
    $smallest = $num2;
}
else {
    $smallest = $num3;
}

echo "<h2>Problem 1</h2>";
echo "Greatest number: " . $greatest . "<br>";
echo "Smallest number: " . $smallest;

echo "<hr>";


// Problem 2: Divisible by 3, 5, Both or None

$num = 15;

echo "<h2>Problem 2</h2>";

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5.";
}
elseif ($num % 3 == 0) {
    echo "The number is divisible by 3.";
}
elseif ($num % 5 == 0) {
    echo "The number is divisible by 5.";
}
else {
    echo "The number is divisible by neither 3 nor 5.";
}

echo "<hr>";


// Problem 3: Odd Numbers from 2 to 20

echo "<h2>Problem 3</h2>";

echo "Odd numbers from 2 to 20:<br>";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// Even numbers from 35 to 7

echo "Even numbers from 35 to 7:<br>";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<hr>";


// Problem 4: Divisible by 2 and 5

echo "<h2>Problem 4</h2>";

echo "Numbers divisible by both 2 and 5 from 50 to 2:<br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

echo "<hr>";


// Problem 5: Reverse of a Number

$num = 12345;
$reverse = 0;
$temp = $num;

while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = (int)($temp / 10);
}

echo "<h2>Problem 5</h2>";
echo "Original number: " . $num . "<br>";
echo "Reverse number: " . $reverse;

echo "<hr>";


// Problem 6: LCM of Two Numbers


$num1 = 8;
$num2 = 12;

if ($num1 > $num2) {
    $lcm = $num1;
}
else {
    $lcm = $num2;
}

while (true) {
    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }
    $lcm++;
}

echo "<h2>Problem 6</h2>";
echo "First number: " . $num1 . "<br>";
echo "Second number: " . $num2 . "<br>";
echo "LCM: " . $lcm;

echo "<hr>";


// Problem 7: HCF of Two Numbers


$num1 = 18;
$num2 = 24;

$hcf = 1;

if ($num1 < $num2) {
    $small = $num1;
}
else {
    $small = $num2;
}

for ($i = 1; $i <= $small; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "<h2>Problem 7</h2>";
echo "First number: " . $num1 . "<br>";
echo "Second number: " . $num2 . "<br>";
echo "HCF: " . $hcf;

echo "<hr>";



// Problem 8: Multiplication Table

// echo "<h2>Problem 8</h2>";

// echo "<table border='1' cellpadding='5'>";

// for ($i = 1; $i <= 12; $i++) {

//     echo "<tr>";

//     for ($j = 1; $j <= 12; $j++) {
//         echo "<td>" . ($i * $j) . "</td>";
//     }

//     echo "</tr>";
// }

// echo "</table>";

// echo "<hr>";


// ========================================
// Problem 8: Multiplication Table
// ========================================

echo "<h2>Problem 8</h2>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";

echo "<caption><b>Multiplication Table</b></caption>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<hr>";


// Problem 9: Prime or Non-Prime

$num = 17;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
}
else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

echo "<h2>Problem 9</h2>";

if ($isPrime) {
    echo $num . " is a prime number.";
}
else {
    echo $num . " is a non-prime number.";
}

echo "<hr>";


// Problem 10: Prime Numbers from 10 to 50

echo "<h2>Problem 10</h2>";

echo "Prime numbers from 10 to 50:<br>";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    if ($num <= 1) {
        $isPrime = false;
    }
    else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}

?>
```