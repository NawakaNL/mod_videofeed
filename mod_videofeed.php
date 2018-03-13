<?php
/**
 * @package     SIJ.ArticlesFeed
 * @subpackage  mod_articlesfeed
 *
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.md
 */

defined('_JEXEC') or die;

// Include the latest functions only once
JLoader::register('ModVideoFeedHelper', __DIR__ . '/helper.php');

$channelId = $params->get('channel');

$list            = ModVideoFeedHelper::getList($channelId, $params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$color = $params->get('color');
$count = $params->get('count');

// Load JQuery Framework in default mode
JHtml::_('jquery.framework', false);

// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_videofeed/tmpl/style.css');

// Add Lity
$document->addStyleSheet(JUri::base().'modules/mod_videofeed/vendor/lity/lity.min.css');
$document->addScript(JUri::base().'modules/mod_videofeed/vendor/lity/lity.min.js');

require JModuleHelper::getLayoutPath('mod_videofeed', $params->get('layout', 'default'));
