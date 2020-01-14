<?php
class Autoloader
{
	static function register()
	{
		spl_autoload_register(array('Autoloader','Autoload'));
	}

	static function Autoload($class_name,$name = '')
	{
		$class_name = str_replace('\\', '/', $class_name);
		$name = explode('/',$class_name);
		$name = end($name);
		if(strpos($name,'PHPExcel')!==0)
		{
					require  $class_name . '.php' ;
		}

	}
}
