<?php
$a=25;
$b=50;
function test()
{
	$GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
}
test();
echo $c;
?>


//75
