--TEST--
Test rsort() function : usage variations - mixed array
--FILE--
<?php
/* Prototype  : bool rsort(array &$array_arg [, int $sort_flags])
 * Description: Sort an array in reverse order 
 * Source code: ext/standard/array.c
 */

/*
 * Pass rsort() an array of different data types to test behaviour
 */

echo "*** Testing rsort() : variation ***\n";

// mixed value array
$mixed_values = array (
  array(), 
  array( array(33, -5, 6), 
         array(11), 
         array(22, -55), 
         array() 
        ),
  -4, "4", 4.00, "b", "5", -2, -2.0, -2.98989, "-.9", "True", "",
  NULL, "ab", "abcd", 0.0, -0, "abcd\x00abcd\x00abcd", '', true, false
);

echo "\n-- Sort flag = default --\n";
$temp_array = $mixed_values;
var_dump(rsort($temp_array) );
var_dump($temp_array);

echo "\n-- Sort flag = SORT_REGULAR --\n";
$temp_array = $mixed_values;
var_dump(rsort($temp_array, SORT_REGULAR) );
var_dump($temp_array);

echo "Done";
?>
--EXPECTF--
*** Testing rsort() : variation ***

-- Sort flag = default --
bool(true)
array(22) {
  [0]=>
  array(4) {
    [0]=>
    array(3) {
      [0]=>
      int(33)
      [1]=>
      int(-5)
      [2]=>
      int(6)
    }
    [1]=>
    array(1) {
      [0]=>
      int(11)
    }
    [2]=>
    array(2) {
      [0]=>
      int(22)
      [1]=>
      int(-55)
    }
    [3]=>
    array(0) {
    }
  }
  [1]=>
  array(0) {
  }
  [2]=>
  string(1) "b"
  [3]=>
  string(14) "abcd abcd abcd"
  [4]=>
  string(4) "abcd"
  [5]=>
  string(2) "ab"
  [6]=>
  string(4) "True"
  [7]=>
  string(1) "5"
  [8]=>
  bool(true)
  [9]=>
  string(1) "4"
  [10]=>
  float(4)
  [11]=>
  float(0)
  [12]=>
  int(0)
  [13]=>
  string(3) "-.9"
  [14]=>
  string(0) ""
  [15]=>
  string(0) ""
  [16]=>
  int(-2)
  [17]=>
  float(-2)
  [18]=>
  float(-2.98989)
  [19]=>
  int(-4)
  [20]=>
  bool(false)
  [21]=>
  NULL
}

-- Sort flag = SORT_REGULAR --
bool(true)
array(22) {
  [0]=>
  array(4) {
    [0]=>
    array(3) {
      [0]=>
      int(33)
      [1]=>
      int(-5)
      [2]=>
      int(6)
    }
    [1]=>
    array(1) {
      [0]=>
      int(11)
    }
    [2]=>
    array(2) {
      [0]=>
      int(22)
      [1]=>
      int(-55)
    }
    [3]=>
    array(0) {
    }
  }
  [1]=>
  array(0) {
  }
  [2]=>
  string(1) "b"
  [3]=>
  string(14) "abcd abcd abcd"
  [4]=>
  string(4) "abcd"
  [5]=>
  string(2) "ab"
  [6]=>
  string(4) "True"
  [7]=>
  string(1) "5"
  [8]=>
  bool(true)
  [9]=>
  string(1) "4"
  [10]=>
  float(4)
  [11]=>
  float(0)
  [12]=>
  int(0)
  [13]=>
  string(3) "-.9"
  [14]=>
  string(0) ""
  [15]=>
  string(0) ""
  [16]=>
  int(-2)
  [17]=>
  float(-2)
  [18]=>
  float(-2.98989)
  [19]=>
  int(-4)
  [20]=>
  bool(false)
  [21]=>
  NULL
}
Done