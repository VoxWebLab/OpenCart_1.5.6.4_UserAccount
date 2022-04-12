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
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
<div id="reset-password-header">
	<h2>Введите новый пароль<?php //echo $text_password; ?></h2>
</div>
<div class="reset-password">
	<div class="reset-password-box">
		<div class="name"><span class="required">*</span> <?php echo $entry_password; ?></div>
		<div class="pass">
			<input type="password" name="password" value="<?php echo $password; ?>" />
			<?php if ($error_password) { ?>
			<span class="error"><?php echo $error_password; ?></span>
			<?php } ?>
		</div>
	</div>
	<div class="reset-password-box">
		<div class="name"><span class="required">*</span> <?php echo $entry_confirm; ?></div>
		<div class="pass">
			<input type="password" name="confirm" value="<?php echo $confirm; ?>" />
			<?php if ($error_confirm) { ?>
			<span class="error"><?php echo $error_confirm; ?></span>
			<?php } ?>
		</div>
	</div>
</div>
<div class="buttons account-buttons">
	<div class="left"><a href="<?php echo $back; ?>" class="button"><i class="fal fa-chevron-left"></i><span><?php echo $button_back; ?></span></a></div>
	<div class="right"><input type="submit" value="Сохранить<?php //echo $button_continue; ?>" class="button btn-primary button_oc btn" /></div>
</div>
</form>