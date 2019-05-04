<?php

function generateRandomString($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function cetak($value)
{
	for ($i=1; $i <= $value ; $i++) {
		if (generateRandomString() == generateRandomString()) {
		 	echo generateRandomString() . PHP_EOL;
		} else {
			echo generateRandomString() . PHP_EOL;
		}
	}
}

echo cetak(4);

?>