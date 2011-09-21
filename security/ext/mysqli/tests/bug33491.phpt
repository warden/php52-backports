--TEST--
Bug #33491 (extended mysqli class crashes when result is not object)
--INI--
error_reporting=4095
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php

class DB extends mysqli
{
  public function query_single($query) {
    $result = parent::query($query);
    $result->fetch_row(); // <- Here be crash
  }
}

require_once dirname(__FILE__)."/connect.inc";

// Segfault when using the DB class which extends mysqli
$DB = new DB($host, $user, $passwd, '');
$DB->query_single('SELECT DATE()');

?>
--EXPECTF--
Fatal error: Call to a member function fetch_row() on a non-object in %sbug33491.php on line %d
