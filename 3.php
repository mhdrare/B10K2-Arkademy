<?php 

function gambar($value)
{
	$two = 2;
	for ($i=1; $i <= $value ; $i++) { 
		for ($j=1; $j <= $value ; $j++) { 
			if ($j < $two || $j > $two*$two) {
				echo " + ";
			} else {
				if ($i == 3) {
					echo " + ";
				} else {
					echo " = ";
				}
			}
		}
		echo PHP_EOL;
	}
}
echo "--- panjang ---" . PHP_EOL;
echo gambar(5);

 ?>