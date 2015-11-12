<?php
/**
 *	The module class file of X Framework.
 *
 *	Standing on a giant's shoulders, and share the freedom.
 */

/**
 * The base class of module.
 * 
 * @package X Framework
 */
class module
{
	/**
	 *	Hellow world!
	 */
	public function getModule()
	{
		return 'M';
	}
	/**
	 *	Hellow world! ,getData.
	 */
	public function getData()
	{
		return array('title'=>'X Framework', 'content'=>':),Hellow World!');
	}
}
