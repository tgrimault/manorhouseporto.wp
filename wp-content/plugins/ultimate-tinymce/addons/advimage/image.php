<?php ob_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#advimage_dlg.dialog_title}</title>
    <?php
	include ('../../includes/tinymce_addon_scripts.php');
	?>
    <!--
	<script type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
	<script type="text/javascript" src="../../tinymce/mctabs.js"></script>
	<script type="text/javascript" src="../../tinymce/form_utils.js"></script>
	<script type="text/javascript" src="../../tinymce/validate.js"></script>
	<script type="text/javascript" src="../../tinymce/editable_selects.js"></script>
    -->
	<script type="text/javascript" src="js/image.js"></script>
	<link href="css/advimage.css" rel="stylesheet" type="text/css" />
</head>
<body id="advimage" style="display: none" role="application" aria-labelledby="app_title">
	<span id="app_title" style="display:none">{#advimage_dlg.dialog_title}</span>
	<form onSubmit="ImageDialog.insert();return false;" action="#"> 
		<div class="tabs">
			<ul>
				<li id="general_tab" class="current" aria-controls="general_panel"><span><a href="javascript:mcTabs.displayTab('general_tab','general_panel');" onMouseDown="return false;">{#advimage_dlg.tab_general}</a></span></li>
				<li id="appearance_tab" aria-controls="appearance_panel"><span><a href="javascript:mcTabs.displayTab('appearance_tab','appearance_panel');" onMouseDown="return false;">{#advimage_dlg.tab_appearance}</a></span></li>
				<li id="advanced_tab" aria-controls="advanced_panel"><span><a href="javascript:mcTabs.displayTab('advanced_tab','advanced_panel');" onMouseDown="return false;">{#advimage_dlg.tab_advanced}</a></span></li>
			</ul>
		</div>

		<div class="panel_wrapper">
			<div id="general_panel" class="panel current">
				<fieldset>
						<legend>{#advimage_dlg.general}</legend>

						<table role="presentation" class="properties">
							<tr>
								<td class="column1"><label id="srclabel" for="src">{#advimage_dlg.src}</label></td>
								<td colspan="2"><table role="presentation" border="0" cellspacing="0" cellpadding="0">
									<tr> 
										<td><input name="src" type="text" id="src" value="" class="mceFocus" onChange="ImageDialog.showPreviewImage(this.value);" aria-required="true" /></td> 
										<td id="srcbrowsercontainer">&nbsp;</td>
									</tr>
								</table></td>
							</tr>
							<tr>
								<td><label for="src_list">{#advimage_dlg.image_list}</label></td>
								<td><select id="src_list" name="src_list" onChange="document.getElementById('src').value=this.options[this.selectedIndex].value;document.getElementById('alt').value=this.options[this.selectedIndex].text;document.getElementById('title').value=this.options[this.selectedIndex].text;ImageDialog.showPreviewImage(this.options[this.selectedIndex].value);"><option value=""></option></select></td>
							</tr>
							<tr> 
								<td class="column1"><label id="altlabel" for="alt">{#advimage_dlg.alt}</label></td> 
								<td colspan="2"><input id="alt" name="alt" type="text" value="" /></td> 
							</tr> 
							<tr> 
								<td class="column1"><label id="titlelabel" for="title">{#advimage_dlg.title}</label></td> 
								<td colspan="2"><input id="title" name="title" type="text" value="" /></td> 
							</tr>
						</table>
				</fieldset>

				<fieldset>
					<legend>{#advimage_dlg.preview}</legend>
					<div id="prev"></div>
				</fieldset>
			</div>

			<div id="appearance_panel" class="panel">
				<fieldset>
					<legend>{#advimage_dlg.tab_appearance}</legend>

					<table role="presentation" border="0" cellpadding="4" cellspacing="0">
						<tr> 
							<td class="column1"><label id="alignlabel" for="align">{#advimage_dlg.align}</label></td> 
							<td><select id="align" name="align" onChange="ImageDialog.updateStyle('align');ImageDialog.changeAppearance();"> 
									<option value="">{#not_set}</option> 
									<option value="baseline">{#advimage_dlg.align_baseline}</option>
									<option value="top">{#advimage_dlg.align_top}</option>
									<option value="middle">{#advimage_dlg.align_middle}</option>
									<option value="bottom">{#advimage_dlg.align_bottom}</option>
									<option value="text-top">{#advimage_dlg.align_texttop}</option>
									<option value="text-bottom">{#advimage_dlg.align_textbottom}</option>
									<option value="left">{#advimage_dlg.align_left}</option>
									<option value="right">{#advimage_dlg.align_right}</option>
								</select> 
							</td>
							<td rowspan="6" valign="top">
								<div class="alignPreview">
									<img id="alignSampleImg" src="img/sample.gif" alt="{#advimage_dlg.example_img}" />
									Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam
									nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Loreum ipsum
									edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
									erat volutpat.
								</div>
							</td>
						</tr>

						<tr role="group" aria-labelledby="widthlabel">
							<td class="column1"><label id="widthlabel" for="width">{#advimage_dlg.dimensions}</label></td>
							<td class="nowrap">
								<span style="display:none" id="width_voiceLabel">{#advimage_dlg.width}</span>
								<input name="width" type="text" id="width" value="" size="5" maxlength="5" class="size" onChange="ImageDialog.changeHeight();" aria-labelledby="width_voiceLabel" /> x 
								<span style="display:none" id="height_voiceLabel">{#advimage_dlg.height}</span>
								<input name="height" type="text" id="height" value="" size="5" maxlength="5" class="size" onChange="ImageDialog.changeWidth();" aria-labelledby="height_voiceLabel" /> px
							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td><table role="presentation" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td><input id="constrain" type="checkbox" name="constrain" class="checkbox" /></td>
										<td><label id="constrainlabel" for="constrain">{#advimage_dlg.constrain_proportions}</label></td>
									</tr>
								</table></td>
						</tr>

						<tr>
							<td class="column1"><label id="vspacelabel" for="vspace">{#advimage_dlg.vspace}</label></td> 
							<td><input name="vspace" type="text" id="vspace" value="" size="3" maxlength="3" class="number" onChange="ImageDialog.updateStyle('vspace');ImageDialog.changeAppearance();" onBlur="ImageDialog.updateStyle('vspace');ImageDialog.changeAppearance();" />
							</td>
						</tr>

						<tr> 
							<td class="column1"><label id="hspacelabel" for="hspace">{#advimage_dlg.hspace}</label></td> 
							<td><input name="hspace" type="text" id="hspace" value="" size="3" maxlength="3" class="number" onChange="ImageDialog.updateStyle('hspace');ImageDialog.changeAppearance();" onBlur="ImageDialog.updateStyle('hspace');ImageDialog.changeAppearance();" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="borderlabel" for="border">{#advimage_dlg.border}</label></td> 
							<td><input id="border" name="border" type="text" value="" size="3" maxlength="3" class="number" onChange="ImageDialog.updateStyle('border');ImageDialog.changeAppearance();" onBlur="ImageDialog.updateStyle('border');ImageDialog.changeAppearance();" /></td> 
						</tr>

						<tr>
							<td><label for="class_list">{#class_name}</label></td>
							<td colspan="2"><select id="class_list" name="class_list" class="mceEditableSelect"><option value=""></option></select></td>
						</tr>

						<tr>
							<td class="column1"><label id="stylelabel" for="style">{#advimage_dlg.style}</label></td> 
							<td colspan="2"><input id="style" name="style" type="text" value="" onChange="ImageDialog.changeAppearance();" /></td> 
						</tr>

						<!-- <tr>
							<td class="column1"><label id="classeslabel" for="classes">{#advimage_dlg.classes}</label></td> 
							<td colspan="2"><input id="classes" name="classes" type="text" value="" onchange="selectByValue(this.form,'classlist',this.value,true);" /></td> 
						</tr> -->
					</table>
				</fieldset>
			</div>

			<div id="advanced_panel" class="panel">
				<fieldset>
					<legend>{#advimage_dlg.swap_image}</legend>

					<input type="checkbox" id="onmousemovecheck" name="onmousemovecheck" class="checkbox" onClick="ImageDialog.setSwapImage(this.checked);" aria-controls="onmouseoversrc onmouseoutsrc" />
					<label id="onmousemovechecklabel" for="onmousemovecheck">{#advimage_dlg.alt_image}</label>

					<table role="presentation" border="0" cellpadding="4" cellspacing="0" width="100%">
							<tr>
								<td class="column1"><label id="onmouseoversrclabel" for="onmouseoversrc">{#advimage_dlg.mouseover}</label></td> 
								<td><table role="presentation" border="0" cellspacing="0" cellpadding="0"> 
									<tr> 
										<td><input id="onmouseoversrc" name="onmouseoversrc" type="text" value="" /></td> 
										<td id="onmouseoversrccontainer">&nbsp;</td>
									</tr>
								</table></td>
							</tr>
							<tr>
								<td><label for="over_list">{#advimage_dlg.image_list}</label></td>
								<td><select id="over_list" name="over_list" onChange="document.getElementById('onmouseoversrc').value=this.options[this.selectedIndex].value;"><option value=""></option></select></td>
							</tr>
							<tr> 
								<td class="column1"><label id="onmouseoutsrclabel" for="onmouseoutsrc">{#advimage_dlg.mouseout}</label></td> 
								<td class="column2"><table role="presentation" border="0" cellspacing="0" cellpadding="0"> 
									<tr> 
										<td><input id="onmouseoutsrc" name="onmouseoutsrc" type="text" value="" /></td> 
										<td id="onmouseoutsrccontainer">&nbsp;</td>
									</tr> 
								</table></td> 
							</tr>
							<tr>
								<td><label for="out_list">{#advimage_dlg.image_list}</label></td>
								<td><select id="out_list" name="out_list" onChange="document.getElementById('onmouseoutsrc').value=this.options[this.selectedIndex].value;"><option value=""></option></select></td>
							</tr>
					</table>
				</fieldset>

				<fieldset>
					<legend>{#advimage_dlg.misc}</legend>

					<table role="presentation" border="0" cellpadding="4" cellspacing="0">
						<tr>
							<td class="column1"><label id="idlabel" for="id">{#advimage_dlg.id}</label></td> 
							<td><input id="id" name="id" type="text" value="" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="dirlabel" for="dir">{#advimage_dlg.langdir}</label></td> 
							<td>
								<select id="dir" name="dir" onChange="ImageDialog.changeAppearance();"> 
										<option value="">{#not_set}</option> 
										<option value="ltr">{#advimage_dlg.ltr}</option> 
										<option value="rtl">{#advimage_dlg.rtl}</option> 
								</select>
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="langlabel" for="lang">{#advimage_dlg.langcode}</label></td> 
							<td>
								<input id="lang" name="lang" type="text" value="" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="usemaplabel" for="usemap">{#advimage_dlg.map}</label></td> 
							<td>
								<input id="usemap" name="usemap" type="text" value="" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="longdesclabel" for="longdesc">{#advimage_dlg.long_desc}</label></td>
							<td><table role="presentation" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td><input id="longdesc" name="longdesc" type="text" value="" /></td>
										<td id="longdesccontainer">&nbsp;</td>
									</tr>
							</table></td> 
						</tr>
					</table>
				</fieldset>
			</div>
		</div>

		<div class="mceActionPanel">
			<input type="submit" id="insert" name="insert" value="{#insert}" />
			<input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
		</div>
	</form>
</body> 
</html> 