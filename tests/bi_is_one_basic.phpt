--TEST--
bi_is_one
--FILE--
<?php
var_dump(bi_is_one('00001'));
var_dump(bi_is_one('2'));
?>
--EXPECT--
int(1)
int(0)