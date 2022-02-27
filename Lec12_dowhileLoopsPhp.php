<?php
echo "this is about do while loops in php programming <br>";

// note:-----do while loop at least one time run krega definitely you cannot stop it to run at least once 
$i = 0;

// syntax
// do{
//     some lines of code to execute......
// }while(condition);

// note:------ semi-color after while is must else it will show error
do {
    echo "the number is " . $i . "<br>";
    $i++;
} while ($i < 10);
