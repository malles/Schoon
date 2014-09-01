<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// init vars
$params = $item->getParams('site');

/* set media alignment */
$align = ($this->checkPosition('media')) ? $params->get('template.teaseritem_media_alignment') : '';

?>
<?php if ($this->checkPosition('meta')) : ?>
	<div class="uk-badge uk-panel-badge">
		<?php echo $this->renderPosition('meta'); ?>
	</div>
<?php endif; ?>

<?php if ($this->checkPosition('title')) : ?>
<h1 class="uk-panel-title">
	<?php echo $this->renderPosition('title'); ?>
</h1>
<?php endif; ?>
<?php if ($this->checkPosition('subtitle')) : ?>
	<p class="uk-article-lead">
		<?php echo $this->renderPosition('subtitle'); ?>
	</p>
<?php endif; ?>
<div class="uk-grid" data-uk-grid-margin="">
	<div class="uk-width-medium-1-3 uk-text-center">
		<?php echo $this->renderPosition('media', array('style' => 'uikit_block')); ?>
	</div>
	<div class="uk-width-medium-2-3">
		<?php if ($this->checkPosition('content')) : ?>
			<?php echo $this->renderPosition('content'); ?>
		<?php endif; ?>

	</div>
</div>



<?php if ($align == "bottom") : ?>
	<?php echo $this->renderPosition('media', array('style' => 'uikit_block')); ?>
<?php endif; ?>

<?php if ($this->checkPosition('links')) : ?>
<ul class="uk-subnav uk-subnav-line uk-text-right">
	<?php echo $this->renderPosition('links', array('style' => 'uikit_subnav')); ?>
</ul>
<?php endif;