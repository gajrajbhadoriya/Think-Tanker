<?php

// Task-1

$array = [
	[
		"product_name" => "amit",
		"sku" => 123,
		"quantity" => 2,
		"image" => "image_name",
		"price" => "single quantity price"
	],[
		"product_name" => "amit",
		"sku" => 123,
		"quantity" => 1,
		"image" => "image_name",
		"price" => "single quantity price",
	],[
		"product_name" => "amit",
		"sku" => 123,
		"quantity" => 1,
		"image" => "image_name",
		"price" => "single quantity price",
	],[
		"product_name" => "amit",
		"sku" => 123,
		"quantity" => 1,
		"image" => "image_name",
		"price" => "single quantity price",
	],
	[
		"product_name" => "ketan",
		"sku" => 456,
		"quantity" => 8,
		"image" => "image_name",
		"price" => "single quantity price",
	],[
		"product_name" => "ketan",
		"sku" => 456,
		"quantity" => 1,
		"image" => "image_name",
		"price" => "single quantity price",
	]
    ];

$outputArray = [];

foreach($array as $values){
    $sku = $values["sku"];

    if (isset($outputArray[$sku])) {
        $outputArray[$sku]['quantity'] += $values['quantity'];
    } else {
        $outputArray[$sku] = $values;
    }
}

echo "<pre>";
echo "TASK-1: . <br>";
print_r($outputArray);
echo "</pre>";


// TASK-3

$ary = array(1, 2, 3, 4, 5);

$lastElement = array_pop($ary);
array_unshift($ary, $lastElement);

$output = implode(",", $ary);
echo "TASK-3 =>" . $output . "<br>";

// TASK-4

$ary = array (1,2,3,4,4,3,2,1,2,3,4);

$uniqueValue = array_unique($ary);

$output = implode("," , $uniqueValue);

echo "TASK-4 =>" . $output . "<br>";

// TASK-5

$a1=array(17,66,33);
$a2=array(77,33,66);

$result = [];
$count = 0;

for ($i = 0; $i < count($a1); $i++) {
    if ($a2[$i] > $a1[$i]) {#
		$count++;
        $result[$i] =  $count;
    }
}
echo "<pre>";
print_r($result);

// Task-6

$array = array(
    3 => 'meet',
    5 => 'deepak',
    12 => 'acaxscas'
);  

$key = array_search('deepak', $array);

echo "TASK-6=>" . $array[$key] ."<br>";

// TASK-7

$x = array(1, 2, 3, 4, 5);

$arraySearch = array_search(3, $x);

unset($x[$arraySearch]);

$output = implode("," , $x);

echo "TASK-7=> " . $output . "<br>";

//TASk-8

$a = array(1,2,3);
$b = array(4,5,6);

$mergeArray = array_merge($a, $b);

$output = implode("," , $mergeArray);

echo "TASK-8=> " . $output . "<br>";

// Missing Number Example

$array = [1,2,3,4,2,6,4,7];

$newArray = range(1, max($array));

$missingValue = array_diff($newArray, $array);

echo "TASK MISSING VALUE: ";
print_r($missingValue);

// TASK-2

$str1 = "Meet";
$str2 = "Vivek";

$output = "";
$length = 5;

for($i = 0; $i < $length; $i++){
	if($i < strlen($str1)){
		$output .= $str1[$i];
	}
	if($i < strlen($str2)){
		$output .= $str2[$i];
	}
}
echo "TASK-2=> " . $output . "<br>";



