<?php ob_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#imgmap.title}</title>
    <?php
	include ('../../includes/tinymce_addon_scripts.php');
	?>
    <!--
	<script language="javascript" type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
    -->
	<!--[if gte IE 6]>
	<script language="javascript" type="text/javascript" src="jscripts/excanvas.js"></script>
	<![endif]-->
	<script language="javascript" type="text/javascript" src="jscripts/imgmap_packed.js"></script>
	<script language="javascript" type="text/javascript" src="jscripts/functions.js"></script>
	<link rel="stylesheet" href="css/imgmap.css" type="text/css"/>
	<meta http-equiv="imagetoolbar" content="no"/>
</head>
<body id="imgmap" onLoad="delayedLoad()">
	<form id="img_area_form">
		<fieldset>
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">Image map areas</a>
			</legend>
			<div style="border-bottom: solid 1px #efefef">
			<table cellspacing="0" width="100%">
			<tr>
			<td width="110">
			<div id="button_container">
				<!-- buttons come here -->
				<img src="images/add.gif" onClick="myimgmap.addNewArea()" alt="Add new area" title="Add new area"/>
				<img src="images/delete.gif" onClick="myimgmap.removeArea(myimgmap.currentid)" alt="Delete selected area" title="Delete selected area"/>
				<img src="images/html.gif" onClick="gui_htmlShow()" alt="Get image map HTML" title="Get image map HTML"/>
			</div>
			</td>
			<td>
				<label for="dd_zoom">Zoom</label>:
				<select onChange="gui_zoom(this)" id="dd_zoom">
				<option value='0.25'>25%</option>
				<option value='0.5'>50%</option>
				<option value='1' selected="1">100%</option>
				<option value='2'>200%</option>
				<option value='3'>300%</option>
				</select>
			</td>
			<td align="right" width="50%">
				<input type="checkbox" id="bb" onClick="toggleBoundingBox(this)"/><label for="bb">bounding box</label>&nbsp;
				<select onChange="changelabeling(this)">
				<option value=''>No labeling</option>
				<option value='%n' selected='1'>Label with numbers</option>
				<option value='%a'>Label with alt text</option>
				<option value='%h'>Label with href</option>
				<option value='%c'>Label with coords</option>
				</select>
			</td>
			</tr>
			</table>			
			</div>
			<div id="form_container" style="clear: both;">
			<!-- form elements come here -->
		 	</div>
		</fieldset>
		<fieldset>
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">Image</a>
			</legend>
			<div id="pic_container">
			</div>			
		</fieldset>
		<fieldset>
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">Status</a>
			</legend>
			<div id="status_container"></div>
		</fieldset>
		<fieldset id="fieldset_html" class="fieldset_off">
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">Code</a>
			</legend>
			<div>
			<textarea id="html_container" xstyle="float: left; clear: left;"></textarea></div>
		</fieldset>

		<div class="mceActionPanel">
			<div style="float: left">
				<input type="button" id="insert" name="update" value="{#update}" onClick="updateAction();" />
			</div>

			<div style="float: right">
				<input type="button" id="remove" class="button" style="background-position: 0px 0!important;" name="remove" value="{#imgmap.remove}" onClick="removeAction();" />
				<input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="cancelAction();" />
			</div>
		</div>
		
	</form>


<script type="text/javascript">

function delayedLoad() {
	//alert(tinymce.isWebKit);
	// Changed by Josh Lobe to make work in the webkits.  Old init follows: tinyMCEPopup.onInit.add(init);
	if (tinymce.isIE || tinymce.isWebKit) {
	tinyMCEPopup.onInit.add(init());
	}
	else {
	tinyMCEPopup.onInit.add(init());
	}
}


</script>

</body>
</html>