<?php
/**
 *	The router class file of X Framework.
 *
 *	Standing on a giant's shoulders, and share the freedom.
 */

/* Set systemRoot */
//$systemRoot = '';                                                                 // User can define the systemRoot manually.
if(!isset($systemRoot))  $systemRoot = dirname(__FILE__) . '/system/';              // Not set, use  www/system as default.
if(!is_dir($systemRoot)) $systemRoot = dirname(dirname(__FILE__)) . '/system/';     // Last, try ../system.
if(!is_dir($systemRoot)) die('system not found! Please check it.');                 // Die.

/* Load the framework. */
$frameworkRoot = $systemRoot . 'xf/';

include $frameworkRoot . 'router.php';
include $frameworkRoot . 'control.php';
include $frameworkRoot . 'module.php';
include $frameworkRoot . 'helper.php';



/**
 * Hellow World
 */
class index extends control
{
	public function hellowWorld()
	{ 
		$r = new router();
		$c = new control();
		$m = new module();
		$h = new helper();
	}
}

//$i = new index();
//$hellowWorld = $i->hellowWorld();
		$r = new router();
		$c = new control();
		$m = new module();
		$h = new helper();

		$data = $m->getData();
		echo "<h1>" . $data['title'] . "</h1>";
		echo "<h1>" . $data['content'] . "</h1>";