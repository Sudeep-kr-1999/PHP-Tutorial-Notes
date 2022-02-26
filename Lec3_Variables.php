<?php
// php keywords are not case sensetive  
// note : "\n" donot have any effect in php 
echo "this is about variable in php programming \n hello";

// php variables are case sensetive : variables are the containers for storing information 
// Starts with $
$name = "Sudeep";
$income = 2000;

echo "$name$income";
echo "$name$income";
echo "this guy with name : $name has the income of $income";

// print statement it will return 1 and can have only one argument at a time
print "hello";
print($name);
print "$name";

// print donot take multiple parameter 
// print($name,$income);
print("this is $name and $income");

print("$name$income");

print "$name$income";

// not allowed 
// print "{$name$income}";

// echo and print are more or less the same. They are both used to output data to the screen.

// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
