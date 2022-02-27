<?php
echo "this is about for each loops in php programming <br>";
$arr = array("bananas", "apples", "Harpic", "Bread");
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

// basic syntax foreach loop 

// for objects 
// foreach ($variable as $key => $value) {
//     # code...
// }


// for array foreach loops 
foreach ($arr as $value) {
    echo $value . "<br>";
}
