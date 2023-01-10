<?php
class A
{
	public function test()
	{
		echo "this is test method";
		echo"<br>";
	}
}
class B extends A
{
	public function beta()
	{
		echo "hello";
	}
}
	$obj=new B;
	$obj->test();
	$obj->beta();
?>
