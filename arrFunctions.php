
<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function arrFunc($arr, $val)
{
    $filteredArr = array_filter($arr);
    $randomizedArray = array_rand($filteredArr, $val);
    $result = array_map(function ($i) use ($filteredArr) {
        return $filteredArr[$i];
    }, $randomizedArray);
    return $result;
}

echo "<pre>";
print_r(arrFunc($planets, 2));
print_r(arrFunc($planets, 3));
print_r(arrFunc($planets, 2));
print_r(arrFunc($planets, 4));
print_r(arrFunc($planets, 5));
?>