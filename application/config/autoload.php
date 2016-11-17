<?php
function __autoload($className)
{
	//$className = str_replace("\\", "/", $className);
	// echo $className;
	// die();
	// echo "<br>";
	// echo ROOT."/".$className;
	//$className = ROOT."/".$className;
	//include_once($className);
	
	$searchArray = array(
			'application/model/',
			'application/components/',
			'application/core/',
			'application/controllers/'
		);

	foreach($searchArray as $search)
	{		
		$search = ROOT ."/". $search . $className . '.php';
		if(is_file($search))
		{
			include_once $search;
			// echo $search;
			// echo "<br>";
			// echo "<br>";
			// echo "<br>";
			// echo "<br>";
		}else{
			// echo $search;
			// echo "<br>";
		}
	}
	// if($className == 'Model'){
	// 	die();
	// }
	
}
// function myAutoload($classname) {
//     $filename = $classname .".php";
//     // $filename = str_replace("\\", '/', $filename);
//     // require_once $_SERVER['DOCUMENT_ROOT']."/".$filename;
//     include_once($filename);
// }

// // регистрируем загрузчик
// spl_autoload_register('myAutoload');

