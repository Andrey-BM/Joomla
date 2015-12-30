<?php
defined('_JEXEC') or die;
?>
<?php foreach ($news as $item) : ?>
	<li><?php echo $item->title;?></li>
	<li><?php echo $item->data;?></li>
<?php endforeach; ?>