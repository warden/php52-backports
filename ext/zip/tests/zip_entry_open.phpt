--TEST--
zip_entry_open() function
--SKIPIF--
<?php
/* $Id: zip_entry_open.phpt 222773 2006-11-03 16:46:19Z pajoye $ */
if(!extension_loaded('zip')) die('skip');
?>
--FILE--
<?php
$zip    = zip_open(dirname(__FILE__)."/test_procedural.zip");
$entry  = zip_read($zip);
echo zip_entry_open($zip, $entry, "r") ? "OK" : "Failure";
zip_entry_close($entry);
zip_close($zip);

?>
--EXPECT--
OK
