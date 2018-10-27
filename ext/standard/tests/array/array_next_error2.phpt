--TEST--
next - ensure we cannot pass a temporary
--FILE--
<?php
function f() {
    return array(1, 2);
}
var_dump(next(array(1, 2)));
?>
--EXPECTF--
Fatal error: Only variables can be passed by reference in %s on line %d
