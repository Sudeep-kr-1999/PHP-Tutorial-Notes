<?php
echo "Data types in php programming <br>";
$name = "Harry";
$income = 200;

// php data types 
/*
    1. String
    2. Integer
    3. Float
    4. Boolean
    5. Object
    6. Array
    7. NULL
    */

// String - sequence of characters 
$name = "Sudeep";
$friend = "Rohan";
echo "$name friend is $friend <br>";

// it will print statement as it is without replacing it with the variable value 
echo '$name ka friend $friend hai <br>';
print '$name ka friend $friend hai <br>';



// Integer data types : it is the non decimal number 
$income = 455;
$debts = -655;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";



// Float : it is a decimal point numbers 
$income = 344.5;
$debts = -854.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean : can be either true or false 
$x = true;
$y = false;
echo $x;
echo "<br>";
echo $y;
echo "<br>";
// note:-------- for true echo will return 1 and for false echo will return blank string 

// var_dump() function :-- it take the variable and print the type and value of the variable   
echo var_dump($x); //bool(true)
echo "<br>";
echo var_dump($y); //bool(false)
echo "<br>";


// Object : instance of classes 
// Employee is a class -----> harry can be a object 


// Array  : used to store multiple values in a single variable 
$friends = array("Rohan", "Shubham", "Skillf", "Larry");

// we cannot echo array directly because we cannot convert it to the string directly so we should use var_dump() 
// to show the output 
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

// NULL Data types 
$name = NULL;
echo $name; // it will print a blank string 
echo "<br>";
echo var_dump($name);
echo "<br>";
