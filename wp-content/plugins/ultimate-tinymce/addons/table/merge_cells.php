<?php ob_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#table_dlg.merge_cells_title}</title>
	<?php
	include ('../../includes/tinymce_addon_scripts.php');
	?>
    <!--
	<script type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
	<script type="text/javascript" src="../../tinymce/mctabs.js"></script>
	<script type="text/javascript" src="../../tinymce/validate.js"></script>
    -->
	<script type="text/javascript" src="js/merge_cells.js"></script>
</head>
<body style="margin: 8px" role="application">
<form onSubmit="MergeCellsDialog.merge();return false;" action="#">
	<fieldset>
		<legend>{#table_dlg.merge_cells_title}</legend>
		<table role="presentation" border="0" cellpadding="0" cellspacing="3" width="100%">
			<tr>
				<td><label for="numcols">{#table_dlg.cols}</label>:</td>
				<td align="right"><input type="text" id="numcols" name="numcols" value="" class="number min1 mceFocus" style="width: 30px" aria-required="true" /></td>
			</tr>
			<tr>
				<td><label for="numrows">{#table_dlg.rows}</label>:</td>
				<td align="right"><input type="text" id="numrows" name="numrows" value="" class="number min1" style="width: 30px" aria-required="true" /></td>
			</tr>
		</table>
	</fieldset>

	<div class="mceActionPanel">
		<input type="submit" id="insert" name="insert" value="{#update}" />
		<input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
	</div>
</form>
</body>
</html>
