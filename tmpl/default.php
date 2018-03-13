<?php
/**
 * @package     SIJ.VideoFeed
 * @subpackage  mod_videofeed
 *
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.md
 *
 * The URL references to youtube://, this will open the Youtube app on mobile phones for a better experience.
 */

defined('_JEXEC') or die;
?>
<div class="videofeed <?php echo $moduleclass_sfx; ?>">
	<div class="videofeed-title" style="background-color: <?PHP echo $color; ?>">
		<span class="icon icon-play" aria-hidden="true"></span> <?PHP echo $module->title; ?>
	</div>
	<div class="custom-row">
			<?PHP
			$i = -1;
			foreach($list->entry as $entry) {
				if (++$i == $count) break;

			?>
			<div class="custom-col-3 custom-col-12-sm">
				<div class="row-content">
					<a href="https://www.youtube.com/watch?v=<?php echo substr($entry->id, 9); ?>" data-lity>
						<img src="https://i.ytimg.com/vi/<?php print substr($entry->id, 9); ?>/mqdefault.jpg"/>
						<h3><?php echo $entry->title; ?></h3>
						<h4><?php echo ($entry->author->name); ?></h4>
					</a>
				</div>
			</div>
			<?PHP } ?>
	</div>
</div>
