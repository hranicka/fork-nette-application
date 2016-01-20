<?php

/**
 * Test: Nette\Application\Routers\Route with optional sequence precedence.
 */

use Nette\Application\Routers\Route;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.php';


$route = new Route('[<one>/][<two>]', array(
));

testRouteIn($route, '/one', 'querypresenter', array(
	'one' => 'one',
	'two' => NULL,
	'test' => 'testvalue',
), '/one/?test=testvalue&presenter=querypresenter');

$route = new Route('[<one>/]<two>', array(
	'two' => NULL,
));

testRouteIn($route, '/one', 'querypresenter', array(
	'one' => 'one',
	'two' => NULL,
	'test' => 'testvalue',
), '/one/?test=testvalue&presenter=querypresenter');