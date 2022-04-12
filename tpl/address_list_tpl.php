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
<h2><?php echo $text_address_book; ?></h2>
<?php foreach ($addresses as $result) {?>
<div class="content account-address">
	<div class="account-address-box">
		<?php echo $result['address']; ?>
	</div>
	<div class="account-address-action account-address-buttons">
		<a href="<?php echo $result['update']; ?>" class="button btn-edit"><i class="fal fa-pen"></i><span>Изменить</span><?php //echo $button_edit; ?></a>
		<a href="<?php echo $result['delete']; ?>" class="button btn-delete" title="Удалить"><i class="fal fa-trash-alt"></i><?php //echo $button_delete; ?></a>
	</div>
</div>
<?php } ?>
<div class="buttons account-buttons">
	<div class="left"><a href="<?php echo $back; ?>" class="button"><i class="fal fa-chevron-left"></i><span><?php echo $button_back; ?></span></a></div>
	<div class="right"><a href="<?php echo $insert; ?>" class="button"><i class="fal fa-address-card"></i><span><?php echo $button_new_address; ?></span></a></div>
</div>