<?php

/**
 * Test: Nette\Application\Routers\Route with ArrayParams
 */

use Nette\Application\Routers\Route;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.php';


$route = new Route(' ? arr=<arr>', array(
	'presenter' => 'Default',
	'arr' => '',
));

testRouteIn($route, '/?arr[1]=1&arr[2]=2', 'Default', array(
	'arr' => array(
		1 => '1',
		2 => '2',
	),
	'test' => 'testvalue',
), '/?test=testvalue&arr%5B1%5D=1&arr%5B2%5D=2');