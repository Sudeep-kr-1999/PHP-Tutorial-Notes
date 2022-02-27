<?php
echo "this is about switch case statement in php programming <br>";
$age = 12;
// note:-------- in switch case koi bhi case agr match ho gya to uske baad ke saare statement tb tk chalege jb tk usko break
// nhi mil jaata isliye hum har case ke baad break lagate hai taaki wo required case ko chalane ke baad exit ho jaaye
switch ($age) {
    case 12:
        echo "you are 12 years old <br>";
        break;
    case 45:
        echo "you are 45 years old <br>";
        break;
    case 56:
        echo "you are 56 years old boy <br>";
        break;
    default:
        echo "you age is weird <br>";
        break;
}
