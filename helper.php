<?php
/**
* @package     SIJ.VideoFeed
* @subpackage  mod_videofeed
*
* @subpackage Modules
* @license    GNU/GPL, see LICENSE.md
 */

defined('_JEXEC') or die;

use Joomla\Utilities\ArrayHelper;

/**
 * Helper for mod_articlesfeed
 *
 * @since  1.6
 */
abstract class ModVideoFeedHelper
{
	/**
	 * Retrieve a list of videos
	 *
	 * @param   \Joomla\Registry\Registry  &$params  module parameters
	 *
	 * @return  mixed
	 *
	 * @since   1.6
	 */
	public static function getList(&$params)
	{
		$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UCtBQU-OZ4orbbv5_LgQR-gw";
		$xml = simplexml_load_file($url);
		return $xml;
	}
}
