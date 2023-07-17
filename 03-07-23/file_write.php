<?php
$str1 = "Meet";
$str2 = "Vivek";

$output = "";
$length = max(strlen($str1), strlen($str2));

for ($i = 0; $i < $length; $i++) {
    if ($i < strlen($str1)) {
        $output .= $str1[$i];
    }
    if ($i < strlen($str2)) {
        $output .= $str2[$i];
    }
}

echo $output . "<br>";
////////////////////////////////
$ary = array(1, 2, 3, 4, 5);

$lastElement = array_pop($ary);
array_unshift($ary, $lastElement);

$output = implode(",", $ary);
echo $output . "<br>";
/////////////////////////////////
$ary = array(1, 2, 3, 4, 4, 3, 2, 1, 2, 3, 4);

$uniqueArray = array_unique($ary);

$output = implode(",", $uniqueArray);
echo $output . "<br>";
/////////////////////////////////

$a1 = array(17, 66, 33);
$a2 = array(77, 33, 66);

$matches = array_intersect($a1, $a2);
$keys = array_keys($matches);

foreach ($keys as $key) {
    echo "[" . $key . "] => " . ($key + 1) . "<br>";
}

///////////////////////////////////

$array = array(
    3 => 'meet',
    5 => 'deepak',
    12 => 'acaxscas'
);  

$key = array_search('deepak', $array);

if ($key !== false) {
    echo $array[$key] ."<br>";
}

//////////////////////////////////////

$x = array(1, 2, 3, 4, 5);

$keyToRemove = array_search(3, $x);
if ($keyToRemove !== false) {
    unset($x[$keyToRemove]);
}

$output = implode(",", $x);
echo $output . "<br>";

////////////////////////////////////////////

$a = array(1, 2, 3);
$b = array(4, 5, 6);

$output = array_merge($a, $b);
$outputString = implode(",", $output);
echo $outputString;

$result = array();
$count = 0;

for ($i = 0; $i < count($a1); $i++) {
    if ($a2[$i] > $a1[$i]) {
        $result[] = "[" . $i . "] => " . ++$count;
    }
}

foreach ($result as $value) {
    echo $value . "\n";
}

?>