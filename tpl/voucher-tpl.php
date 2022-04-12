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
<h2>Покупка подарочного сертификата</h2>
<p><?php echo $text_description; ?></p>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	<div class="form voucher-form">
		<div class="to-name">
			<label><span class="required">*</span> <?php echo $entry_to_name; ?></label>
			
			<input type="text" name="to_name" value="<?php echo $to_name; ?>" />
			<?php if ($error_to_name) { ?>
			<span class="error"><?php echo $error_to_name; ?></span>
			<?php } ?>
		</div>
		<div class="to-mail">
			<label><span class="required">*</span> <?php echo $entry_to_email; ?></label>
			
			<input type="text" name="to_email" value="<?php echo $to_email; ?>" />
			<?php if ($error_to_email) { ?>
			<span class="error"><?php echo $error_to_email; ?></span>
			<?php } ?>
		</div>
		<div class="from-name">
			<label><span class="required">*</span> <?php echo $entry_from_name; ?></label>
			
			<input type="text" name="from_name" value="<?php echo $from_name; ?>" />
			<?php if ($error_from_name) { ?>
			<span class="error"><?php echo $error_from_name; ?></span>
			<?php } ?>
		</div>
		<div class="frmo-mail">
			<label><span class="required">*</span> <?php echo $entry_from_email; ?></label>
			
			<input type="text" name="from_email" value="<?php echo $from_email; ?>" />
			<?php if ($error_from_email) { ?>
			<span class="error"><?php echo $error_from_email; ?></span>
			<?php } ?>
		</div>
		<div class="voucher-info">
			<div class="voucher-message">
				<label><?php echo $entry_message; ?></label>
				
				<textarea name="message" cols="40" rows="5"><?php echo $message; ?></textarea>
			</div>
			<div class="voucher-theme">
				<label><span class="required">*</span> <?php echo $entry_theme; ?></label>
				
				<?php foreach ($voucher_themes as $voucher_theme) { ?>
				<div class="voucher-theme-box">
					<?php if ($voucher_theme['voucher_theme_id'] == $voucher_theme_id) { ?>
					<input type="radio" name="voucher_theme_id" value="<?php echo $voucher_theme['voucher_theme_id']; ?>" id="voucher-<?php echo $voucher_theme['voucher_theme_id']; ?>" checked="checked" />
					<label for="voucher-<?php echo $voucher_theme['voucher_theme_id']; ?>"><?php echo $voucher_theme['name']; ?></label>
					<?php } else { ?>
					<input type="radio" name="voucher_theme_id" value="<?php echo $voucher_theme['voucher_theme_id']; ?>" id="voucher-<?php echo $voucher_theme['voucher_theme_id']; ?>" />
					<label for="voucher-<?php echo $voucher_theme['voucher_theme_id']; ?>"><?php echo $voucher_theme['name']; ?></label>
					<?php } ?>
				</div>
				<?php } ?>
				
				<?php if ($error_theme) { ?>
				<span class="error"><?php echo $error_theme; ?></span>
				<?php } ?>
			</div>
		</div>
		<div class="voucher-amount">
			<label><span class="required">*</span> <?php echo $entry_amount; ?></label>
			
			<input type="text" name="amount" value="<?php echo $amount; ?>" size="5" />
			<?php if ($error_amount) { ?>
			<span class="error"><?php echo $error_amount; ?></span>
			<?php } ?>
		</div>
	</div>
	
	<div class="buttons">
		<div class="right">
			<?php if ($agree) { ?>
			<input type="checkbox" name="agree" value="1" checked="checked" /> 
			<?php } else { ?>
			<input type="checkbox" name="agree" value="1" /> 
			<?php } ?>
			<?php echo $text_agree; ?>
			<input type="submit" value="<?php echo $button_continue; ?>" class="button" />
		</div>
	</div>
</form>