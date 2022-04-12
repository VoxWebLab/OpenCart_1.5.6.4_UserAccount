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
<h2><?php echo $text_order_detail; ?></h2>

<div class="order-header">
	<div class="order-details">
		<?php if ($invoice_no) { ?>
		<b><?php echo $text_invoice_no; ?></b> <?php echo $invoice_no; ?><br />
		<?php } ?>
		<b><?php echo $text_order_id; ?></b> #<?php echo $order_id; ?><br />
		<b><?php echo $text_date_added; ?></b> <?php echo $date_added; ?></td>
	</div>
	<div class="order-methods">
		<?php if ($payment_method) { ?>
		<b><?php echo $text_payment_method; ?></b> <?php echo $payment_method; ?><br />
		<?php } ?>
		<?php if ($shipping_method) { ?>
		<b><?php echo $text_shipping_method; ?></b> <?php echo $shipping_method; ?>
		<?php } ?>
	</div>
</div>

<div class="order-address">
	<div class="order-payment-address">
		<?php echo $text_payment_address; ?>
		
		<?php echo $payment_address; ?>
	</div>
	<div class="order-shipping-address">
		<?php if ($shipping_address) { ?>
		<?php echo $text_shipping_address; ?>
		<?php } ?>
		
		<?php if ($shipping_address) { ?>
		<?php echo $shipping_address; ?>
		<?php } ?>
	</div>
</div>

<div class="order-products">
	<div id="order-products-header">
		<h2>Состав заказа</h2>
	</div>
	<div id="order-products-legend">
		<div class="name"><?php echo $column_name; ?></div>
		<div class="model"><?php echo $column_model; ?></div>
		<div class="quantity"><?php echo $column_quantity; ?></div>
		<div class="price"><?php echo $column_price; ?></div>
		<div class="total"><?php echo $column_total; ?></div>
	</div>

	<?php foreach ($products as $product) { ?>
	<div class="order-products-list">
		<div class="name">
			<?php echo $product['name']; ?>
			<?php foreach ($product['option'] as $option) { ?>
			<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
			<?php } ?>
		</div>
		<div class="model"><?php echo $product['model']; ?></div>
		<div class="quantity"><?php echo $product['quantity']; ?></div>
		<div class="price"><?php echo $product['price']; ?></div>
		<div class="total"><?php echo $product['total']; ?></div>
	</div>
	<?php  } ?>
	
	<?php foreach ($vouchers as $voucher) { ?>
	<div class="order-products-list order-products-voucher">
		<div class="voucher"><?php echo $voucher['description']; ?></div>
		<div class="price"><?php echo $voucher['amount']; ?></div>
		<div class="total"><?php echo $voucher['amount']; ?></div>
	</div>
	<?php  } ?>

	<?php foreach ($totals as $total) { ?>
	<div class="order-products-total">
		<div class="title"><?php echo $total['title']; ?>:</div>
		<div class="total"><?php echo $total['text']; ?></div>
	</div>
	<?php  } ?>
</div>

<?php if ($comment) { ?>
<div class="order-comment">
	<h2><?php echo $text_comment; ?></h2>
	<div><?php echo $comment; ?></div>
</div>
<?php } ?>

<div class="order-history">
	<div id="order-history-header">
		<h2><?php echo $text_history; ?></h2>
	</div>
	<div id="order-history-legend">
		<div class="date"><?php echo $column_date_added; ?></div>
		<div class="status"><?php echo $column_status; ?></div>
		<div class="comment"><?php echo $column_comment; ?></div>
	</div>
	<?php foreach ($histories as $history) { ?>
	<div class="order-history-list">
		<div class="date"><?php echo $history['date_added']; ?></div>
		<div class="status"><?php echo $history['status']; ?></div>
		<div class="comment"><?php echo $history['comment']; ?></div>
	</div>
	<?php } ?>
</div>

<div class="buttons account-buttons">
	<div class="left"><a href="<?php echo $continue; ?>" class="button"><i class="fal fa-chevron-left"></i><span>Назад</span></a></div>
	<?php /* <div class="right"><a href="<?php echo $continue; ?>" class="button"><?php echo $button_continue; ?></a></div> */ ?>
</div>