<?php

function __autoload($classname)
{
	$classfile = 'classes/'. strtolower($classname) .'.class.php';

	if (is_file($classfile))
	{
		require $classfile;
	}
}

$database = Database::getInstance();

var_dump($database->isConstructed());