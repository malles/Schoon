<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<?php if ($item) : ?>
	<div id="item-<?php echo $item->alias; ?>" class="uk-panel">
	<?php if ($this->renderer->pathExists('item/'.$item->type)) : ?>

		<?php echo $this->renderer->render('item.'.$item->type.'.teaser', array('view' => $this, 'item' => $item)); ?>

	<?php else : ?>

		<?php echo $this->renderer->render('item.teaser', array('view' => $this, 'item' => $item)); ?>

	<?php endif; ?>

	</div>
<?php endif; ?>

