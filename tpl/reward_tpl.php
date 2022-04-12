<?php 
// OpenCart 1.5.6.4 Account pages 
// template: default
// tested with Bootstrap 3
//
// by Kirill Korolev 
// voxweblab.com
// 2022.04.12 (Юра, прости, мы всё просрали)
//
// insert following in the content DIV ?>
<div id="rewards-header">
	<h2><?php echo $text_total; ?> <?php echo $total; ?></h2>
</div>
<div class="rewards-body">
	<div id="rewards-legend">
		<div class="date"><?php echo $column_date_added; ?></div>
		<div class="order">Заказ<?php //echo $column_description; ?></div>
		<div class="points"><?php echo $column_points; ?></div>
	</div>
	<?php if ($rewards) { ?>
	<?php foreach ($rewards  as $reward) { ?>
	<div class="rewards-list">
		<div class="date"><?php echo $reward['date_added']; ?></div>
		<div class="order">
			<?php if ($reward['order_id']) { ?>
			<a href="<?php echo $reward['href']; ?>"><?php echo $reward['description']; ?></a>
			<?php } else { ?>
			<?php echo $reward['description']; ?>
			<?php } ?>
		</div>
		<div class="points"><?php echo $reward['points']; ?></div>
	</div>
	<?php } ?>
	<?php } else { ?>
	<div class="rewards-list">
		<div class="empty"><?php echo $text_empty; ?></div>
	</div>
	<?php } ?>
</div>
<div class="pagination"><?php echo $pagination; ?></div>
<div class="buttons account-buttons">
	<div class="left"><a href="<?php echo $continue; ?>" class="button"><i class="fal fa-chevron-left"></i><span>Назад<?php //echo $button_back; ?></span></a></div>
</div>