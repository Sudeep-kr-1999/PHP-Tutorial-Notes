<!-- very very important note  -->
<!-- note agr php files mein sirf php tag hai baaki kuch nhi to hume tag ko close krne ki zaroorat nhi hai  -->
<?php
echo "rules for creating variable in php <br>";
echo "Starts with a $ sign <br>";
echo "Cannot start with a number <br>";
echo "Must start with a letter or an underscore character <br>";
echo "Can only contain alphanumeric characters and underscores <br>";

// put "\" before variable name to treat is as a string not variable inside echo or print statement (when using double quote)
echo "Variables are case sensetive \$harry, \$hArray and \$Harry are different <br>";

$name = "Sudeeep";
$friend = "Rohan";

// it will print statement as it is without replacing with the value of the variables (when using single quote)
echo '$name ka friend $friend hai <br>';
print '$name ka friend $friend hai <br>';

?>

<!-- it serves as html so we can put anything outside the php tag -->
hello