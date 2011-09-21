--TEST--
Test variations in usage of asin()
--INI--
precision = 10
--FILE--
<?php
/* 
 * proto float asin(float number)
 * Function is implemented in ext/standard/math.c
*/ 


//Test asin with a different input values

$values = array(23,
		-23,
		2.345e1,
		-2.345e1,
		0x17,
		027,
		"23",
		"23.45",
		"2.345e1",
		"nonsense",				
		"1000",
		"1000ABC",
		null,
		true,
		false);	

for ($i = 0; $i < count($values); $i++) {
	$res = asin($values[$i]);
	var_dump($res);
}

?>
--EXPECT--
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(0)
float(NAN)
float(NAN)
float(0)
float(1.570796327)
float(0)
