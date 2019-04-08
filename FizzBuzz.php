<?php

for($i=1;$i<=100;$i++) {
	$fizzOrBuzz = false;
	if ($i % 3 == 0) {
		echo "Fizz";
		$fizzOrBuzz = true;
	}
	if ($i % 5 == 0) {
		echo "Buzz";
		$fizzOrBuzz = true;
	}
	if (! $fizzOrBuzz) {
		echo $i;
	}
	echo PHP_EOL;
}