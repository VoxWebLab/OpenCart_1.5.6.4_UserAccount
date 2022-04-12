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
<h2><?php echo $heading_title; ?></h2>
<?php if ($orders) { ?>
<?php foreach ($orders as $order) { ?>
<div class="order-list">
	<div class="order-id"><b><?php echo $text_order_id; ?></b> <a href="<?php echo $order['href']; ?>">#<?php echo $order['order_id']; ?></a></div>
	<div class="order-status"><b><?php echo $text_status; ?></b> <?php echo $order['status']; ?></div>
	<div class="order-info">
		<div>
			<b><?php echo $text_date_added; ?></b> <?php echo $order['date_added']; ?><br />
			<b><?php echo $text_customer; ?></b> <?php echo $order['name']; ?><br />
		</div>
		<div>
			<b><?php echo $text_products; ?></b> <?php echo $order['products']; ?><br />
			<b><?php echo $text_total; ?></b> <?php echo $order['total']; ?>
		</div>
	</div>
	<div class="order-action">
		<a href="<?php echo $order['href']; ?>" class="button btn-edit"><i class="fal fa-file-alt"></i><span>Просмотр</span></a>
		<a href="<?php echo $order['reorder']; ?>" class="button btn-edit"><i class="fal fa-redo"></i><span>Повторить</span></a>
	</div>
</div>
<?php } ?>
<div class="pagination"><?php echo $pagination; ?></div>
<?php } else { ?>
<div class="content"><?php echo $text_empty; ?></div>
<?php } ?>
<div class="buttons account-buttons">
	<div class="left"><a href="<?php echo $continue; ?>" class="button"><i class="fal fa-chevron-left"></i><span>Назад<?php //echo $button_continue; ?></span></a></div>
</div>