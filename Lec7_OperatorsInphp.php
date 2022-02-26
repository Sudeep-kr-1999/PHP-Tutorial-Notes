<?php
echo "it is about operators in php programing <br>";
// 1.Arithmetic operators 
// 2.Assignment operators
// 3.Comparison operators 
// 4.Logical operators 

// 1.Arithmetic operators 
$a = 45;
$b = 8;
echo "the value of a+b : " . ($a + $b) . "<br>";
echo "the value of a-b : " . ($a - $b) . "<br>";
echo "the value of a*b : " . ($a * $b) . "<br>";
echo "the value of a/b : " . ($a / $b) . "<br>";
echo "the value of a%b : " . ($a % $b) . "<br>";
echo "the value of a**b : " . ($a ** $b) . "<br>";


// 2.Assignment operators
$x = $a;
echo "for x the value is  : " . $x . "<br>";
$x += 6;
echo "for \$x+=6 the value is  : " . $x . "<br>";
$x -= 6;
echo "for \$x-=6 the value is  : " . $x . "<br>";
$x *= 6;
echo "for \$x*=6 the value is  : " . $x . "<br>";
$x /= 6;
echo "for \$x/=6 the value is  : " . $x . "<br>";
$x %= 6;
echo "for \$x%=6 the value is  : " . $x . "<br>";

// 3.Comparison operators 
$x = 7;
$y = 9;
// note: --- ',' is also used to concat the statement
echo "for \$x==\$y, the result is : ";
echo var_dump($x == $y);
echo "<br>";

echo "for \$x>\$y, the result is : ";
echo var_dump($x > $y);
echo "<br>";

echo "for \$x<\$y, the result is : ";
echo var_dump($x < $y);
echo "<br>";

// it is not equal to operator
echo "for \$x<>\$y, the result is : ";
echo var_dump($x <> $y);
echo "<br>";

echo "for \$x<=\$y, the result is : ";
echo var_dump($x <= $y);
echo "<br>";

echo "for \$x>=\$y, the result is : ";
echo var_dump($x >= $y);
echo "<br>";

// 4.Logical operators 
$m = true;
$n = false;

// and is also called "&&"
echo "for \$m &&\$n, the result is : ";
echo var_dump($m && $n);
echo "<br>";
echo "for \$m and \$n, the result is : ";
echo var_dump($m and $n);
echo "<br>";

// or is also called "||"
echo "for \$m || \$n, the result is : ";
echo var_dump($m || $n);
echo "<br>";
echo "for \$m or \$n, the result is : ";
echo var_dump($m or $n);
echo "<br>";

// "!" operator : ans ko reverse krke return kr deta hai 
echo "for !\$m, the result is : ";
echo var_dump(!$m);
echo "<br>";
