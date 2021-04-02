<!DOCTYPE html>
<html>
<body>

<?php 

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array = [2, 3, 4, 6, 7, 9, 11, 20];

echo "Even:\n";
print_r(array_filter($array, "even"));

?>

</body>
</html>
