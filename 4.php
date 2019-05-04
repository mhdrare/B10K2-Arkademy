<?php 

error_reporting(0);

$data1 = [['m','u','h','a','d'],['f','i','s','l']];
$data2 = [['m','u','h','a','d'],['f','a','i','s','l'],['a','k','b','r']];

function sortData($data)
{
	$arrayLength = count($data);
	sort($data);
	for ($i=0; $i < $arrayLength ; $i++) { 
		sort($data[$i]);
	}
	return $data;
}

echo json_encode(sortData($data1)) . PHP_EOL;
echo json_encode(sortData($data2));

 ?>