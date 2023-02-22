<?php
class test
{
	public function __construct()
	{
		echo "constructor";
	}
	public function test()
	{
		echo "hello";
	}
	public function __destruct()
	{
		echo "destruct";
	}
}
	$obj=new test;
	echo "<br>";
	$obj->test();
	echo "<br>";

?>


//
constructor
hello
destruct
