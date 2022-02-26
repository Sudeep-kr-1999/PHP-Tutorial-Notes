<?php
echo "this is about string function in php programming";
echo "<br>";
$name = "Harry is a good boy <br>";
echo $name;
echo "<br>";

// note: ----"." operator is used for concatenation here in php 

// strlen(): return the length of the string 
echo "the length of my string is : " . strlen($name);
echo "<br>";

// str_word_count(): return the word count in the string 
echo "the number of words in the string is  : " . str_word_count($name);
echo "<br>";

// strrev(): it will reverse the string in php 
echo "the reversed string is : " . strrev($name);
echo "<br>";

// strpos(): it will find the position of the first occurence of the substring in the string 
echo "the position of \"is\" in the string is : " . strpos($name, "is", 0);
echo "<br>";

// str_replace(search,replace,subject): this will replace all the search string with the replace string in the subject string 
echo str_replace("Harry", "Rohan", $name);
echo "<br>";

// str_repeat(string,times) : it will repeat the given string to number of times specified 
echo str_repeat($name, 10);
echo "<br>";

// note:------ <pre> tag hume jitne spaces diye hai saare spaces ke saath print krne ko allow krta hai jo ki by default 1 hota h 
echo "<pre>";

// from right (end of string)
echo rtrim("         this is a good boy          ");
echo "<br>";

// from left(beginning of the string )
echo ltrim("         this is a good boy          ");
echo "<br>";

// from both (beginning and the end of the string )
echo trim("         this is a good boy          ");
echo "<br>";
echo "</pre>";
