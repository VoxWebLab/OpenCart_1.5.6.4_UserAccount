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
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
<div class="content">
	<table class="form">
		<tr>
			<td><?php echo $entry_newsletter; ?> &nbsp;</td>
			<td>
				<?php if ($newsletter) { ?>
				<input type="radio" name="newsletter" value="1" checked="checked" />
				<?php echo $text_yes; ?>&nbsp;
				<input type="radio" name="newsletter" value="0" />
				<?php echo $text_no; ?>
				<?php } else { ?>
				<input type="radio" name="newsletter" value="1" />
				<?php echo $text_yes; ?>&nbsp;
				<input type="radio" name="newsletter" value="0" checked="checked" />
				<?php echo $text_no; ?>
				<?php } ?>
			</td>
		</tr>
	</table>
</div>
<div class="buttons account-buttons">
	<div class="left"><a href="<?php echo $back; ?>" class="button"><i class="fal fa-chevron-left"></i><span><?php echo $button_back; ?></span></a></div>
	<div class="right"><input type="submit" value="Сохранить<?php //echo $button_continue; ?>" class="button" /></div>
</div>
</form>