<?php
/**
 *	The helper class file of X Framework.
 *
 *	Standing on a giant's shoulders, and share the freedom.
 */

/**
 * The base class of helper.
 * 
 * @package X Framework
 */
class helper
{
	/**
	 * Hellow world
	 */
	public function getHelper()
	{
		return 'H';
	}
	/**
	 * Debug
	 */
	public function debug($data)
	{
		echo "<pre>:(debug:/n"; print_r($data);
	}
}