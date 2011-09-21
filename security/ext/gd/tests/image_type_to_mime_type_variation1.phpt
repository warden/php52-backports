--TEST--
Test image_type_to_mime_type() function : usage variations  - Pass different data types as imagetype
--FILE--
<?php
/* Prototype  : string image_type_to_mime_type(int imagetype)
 * Description: Get Mime-Type for image-type returned by getimagesize, exif_read_data, exif_thumbnail, exif_imagetype 
 * Source code: ext/standard/image.c
 */

echo "*** Testing image_type_to_mime_type() : usage variations ***\n";

error_reporting(E_ALL ^ E_NOTICE);

//get an unset variable
$unset_var = 10;
unset ($unset_var);

class MyClass
{
  function __toString() {
    return "MyClass";
  }
}

//array of values to iterate over
$values = array(

      // float data
      100.5,
      -100.5,
      100.1234567e10,
      100.7654321E-10,
      .5,

      // array data
      array(),
      array('color' => 'red', 'item' => 'pen'),

      // null data
      NULL,
      null,

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // string data
      "string",
      'string',

      // object data
      new MyClass(),

      // undefined data
      @$undefined_var,

      // unset data
      @$unset_var,
);

// loop through each element of the array for imagetype
$iterator = 1;
foreach($values as $value) {
      echo "\n-- Iteration $iterator --\n";
      var_dump( image_type_to_mime_type($value) );
      $iterator++;
};
?>
===DONE===
--EXPECTF--
*** Testing image_type_to_mime_type() : usage variations ***

-- Iteration 1 --
string(24) "application/octet-stream"

-- Iteration 2 --
string(24) "application/octet-stream"

-- Iteration 3 --
string(24) "application/octet-stream"

-- Iteration 4 --
string(24) "application/octet-stream"

-- Iteration 5 --
string(24) "application/octet-stream"

-- Iteration 6 --
string(24) "application/octet-stream"

-- Iteration 7 --
string(9) "image/gif"

-- Iteration 8 --
string(24) "application/octet-stream"

-- Iteration 9 --
string(24) "application/octet-stream"

-- Iteration 10 --
string(9) "image/gif"

-- Iteration 11 --
string(24) "application/octet-stream"

-- Iteration 12 --
string(9) "image/gif"

-- Iteration 13 --
string(24) "application/octet-stream"

-- Iteration 14 --
string(24) "application/octet-stream"

-- Iteration 15 --
string(24) "application/octet-stream"

-- Iteration 16 --
string(24) "application/octet-stream"

-- Iteration 17 --
string(24) "application/octet-stream"

-- Iteration 18 --
string(9) "image/gif"

-- Iteration 19 --
string(24) "application/octet-stream"

-- Iteration 20 --
string(24) "application/octet-stream"
===DONE===