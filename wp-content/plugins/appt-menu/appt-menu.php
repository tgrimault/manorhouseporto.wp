<?php
/*
Plugin Name: Appt-menu
Plugin URI: http://www.manorhouseporto.com
Description: Menu de selection des 4 Appartements pour Manor House Porto
Author: Tho as
Version: 1.0
Author URI: http://www.manorhouseporto.com
*/

add_shortcode( 'addmenu', 'addmenu_fct' );

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'apptmenu_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'apptmenu_remove' );

function apptmenu_install()
{
	/* Creates new database field */
	add_option("apptmenu_1_px_nuit_min", '60', '', 'yes');
	add_option("apptmenu_1_px_nuit_max", '90', '', 'yes');
	add_option("apptmenu_2_px_nuit_min", '60', '', 'yes');
	add_option("apptmenu_2_px_nuit_max", '105', '', 'yes');
	add_option("apptmenu_3_px_nuit_min", '60', '', 'yes');
	add_option("apptmenu_3_px_nuit_max", '105', '', 'yes');
	add_option("apptmenu_4_px_nuit_min", '--', '', 'yes');
	add_option("apptmenu_4_px_nuit_max", '--', '', 'yes');
	
	add_option("apptmenu_1_px_wk_min", '375', '', 'yes');
	add_option("apptmenu_1_px_wk_max", '565', '', 'yes');
	add_option("apptmenu_2_px_wk_min", '500', '', 'yes');
	add_option("apptmenu_2_px_wk_max", '660', '', 'yes');
	add_option("apptmenu_3_px_wk_min", '500', '', 'yes');
	add_option("apptmenu_3_px_wk_max", '660', '', 'yes');
	add_option("apptmenu_4_px_wk_min", '--', '', 'yes');
	add_option("apptmenu_4_px_wk_max", '--', '', 'yes');
	
	add_option("apptmenu_1_nb_cac", '2', '', 'yes');
	add_option("apptmenu_2_nb_cac", '2', '', 'yes');
	add_option("apptmenu_3_nb_cac", '3', '', 'yes');
	add_option("apptmenu_4_nb_cac", '--', '', 'yes');
	
	add_option("apptmenu_1_nb_pers", '5', '', 'yes');
	add_option("apptmenu_2_nb_pers", '4', '', 'yes');
	add_option("apptmenu_3_nb_pers", '7', '', 'yes');
	add_option("apptmenu_4_nb_pers", '--', '', 'yes');
	
	add_option("apptmenu_sejour_min", '3', '', 'yes');
}

function apptmenu_remove()
{
	delete_option('apptmenu_1_px_nuit_min');
	delete_option('apptmenu_1_px_nuit_max');
	delete_option('apptmenu_2_px_nuit_min');
	delete_option('apptmenu_2_px_nuit_max');
	delete_option('apptmenu_3_px_nuit_min');
	delete_option('apptmenu_3_px_nuit_max');
	delete_option('apptmenu_4_px_nuit_min');
	delete_option('apptmenu_4_px_nuit_max');
	
	delete_option('apptmenu_1_px_wk_min');
	delete_option('apptmenu_1_px_wk_max');
	delete_option('apptmenu_2_px_wk_min');
	delete_option('apptmenu_2_px_wk_max');
	delete_option('apptmenu_3_px_wk_min');
	delete_option('apptmenu_3_px_wk_max');
	delete_option('apptmenu_4_px_wk_min');
	delete_option('apptmenu_4_px_wk_max');
	
	delete_option('apptmenu_1_nb_cac');
	delete_option('apptmenu_2_nb_cac');
	delete_option('apptmenu_3_nb_cac');
	delete_option('apptmenu_4_nb_cac');
	
	delete_option('apptmenu_1_nb_pers');
	delete_option('apptmenu_2_nb_pers');
	delete_option('apptmenu_3_nb_pers');
	delete_option('apptmenu_4_nb_pers');
	
	delete_option('apptmenu_sejour_min');
}

function addmenu_fct()
{
	echo '<a href="/apartment-1/"><div class="appt">
			<div class="photo_appt"><img src="/wp-content/plugins/appt-menu/appt1.jpg" width="200" height="150" alt="appt1" /></div>
			<div class="desc_appt">
			<h2>Apartment #1</h2>
			<p>Top floor (2nd)</p>
			<h3>Bedrooms : '.get_option('apptmenu_1_nb_cac').'</h3>
			<h3>Number of guests : '.get_option('apptmenu_1_nb_pers').'</h3>
			<h3>Bathrooms : 1</h3>
			<h3>Rates (Euros)</h3>
			<p>per night: €'.get_option('apptmenu_1_px_nuit_min').' - €'.get_option('apptmenu_1_px_nuit_max').'</p>
			<p>per week: €'.get_option('apptmenu_1_px_wk_min').' - €'.get_option('apptmenu_1_px_wk_max').'</p>
			<p>inimum stay (nights): '.get_option('apptmenu_sejour_min').'</p></div></div></a>
			
			<a href="/apartment-2/"><div class="appt">
			<div class="photo_appt"><img src="/wp-content/plugins/appt-menu/appt2.jpg" width="200" height="150" alt="appt1" /></div>
			<div class="desc_appt">
			<h2>Apartment #2</h2>
			<p>1st floor</p>
			<h3>Bedrooms : '.get_option('apptmenu_2_nb_cac').'</h3>
			<h3>Number of guests : '.get_option('apptmenu_2_nb_pers').'</h3>
			<h3>Bathrooms : 1</h3>
			<h3>Rates (Euros)</h3>
			<p>per night: €'.get_option('apptmenu_2_px_nuit_min').' - €'.get_option('apptmenu_2_px_nuit_max').'</p>
			<p>per week: €'.get_option('apptmenu_2_px_wk_min').' - €'.get_option('apptmenu_2_px_wk_max').'</p>
			<p>Minimum stay (nights): '.get_option('apptmenu_sejour_min').'</p></div></div></a>
			
			<a href="/apartment-3/"><div class="appt">
			<div class="photo_appt"><img src="/wp-content/plugins/appt-menu/appt3.jpg" width="200" height="150" alt="appt1" /></div>		
			<div class="desc_appt">
			<h2>Apartment #3</h2>
			<p>Ground level</p>
			<p>40m2 private terrace</p>
			<h3>Bedrooms : '.get_option('apptmenu_3_nb_cac').'</h3>
			<h3>Number of guests : '.get_option('apptmenu_3_nb_pers').'</h3>
			<h3>Bathrooms : 1</h3>
			<h3>Rates (Euros)</h3>
			<p>per night: €'.get_option('apptmenu_3_px_nuit_min').' - €'.get_option('apptmenu_3_px_nuit_max').'</p>
			<p>per week: €'.get_option('apptmenu_3_px_wk_min').' - €'.get_option('apptmenu_3_px_wk_max').'</p>
			<p>Minimum stay (nights): '.get_option('apptmenu_sejour_min').'</p>
			</div></div></a>
			
			<a href="/apartment-4/"><div class="appt">
			<div class="photo_appt"><img src="/wp-content/plugins/appt-menu/appt4.jpg" width="200" height="150" alt="appt1" /></div>
			<div class="desc_appt">
			<h2>Apartment #4</h2>
			<p>Garden level</p>
			<p>Private garden</p>
			<h3>Bedrooms : '.get_option('apptmenu_4_nb_cac').'</h3>
			<h3>Number of guests : '.get_option('apptmenu_4_nb_pers').'</h3>
			<h3>Bathrooms : --</h3>
			<h3>Rates (Euros)</h3>
			<p>per night: €'.get_option('apptmenu_4_px_nuit_min').' - €'.get_option('apptmenu_4_px_nuit_max').'</p>
			<p>per week: €'.get_option('apptmenu_4_px_wk_min').' - €'.get_option('apptmenu_4_px_wk_max').'</p>
			<p>Minimum stay (nights): '.get_option('apptmenu_sejour_min').'</p>
			</div></div></a>';
	}	
	
if ( is_admin() )
{
	/* Call the html code */
	add_action('admin_menu', 'apptmenu_admin_menu');
	
	function apptmenu_admin_menu() 
	{
		add_options_page('Appt-Menu Options', 'Appt-Menu', 'edit_published_pages', 'apptmenu_px', 'appt_html_page');
		add_action( 'admin_init', 'register_mysettings' );
	}
	
	function register_mysettings()
	{
		register_setting('apptmenuoptions-group', 'apptmenu_1_px_nuit_min');
		register_setting('apptmenuoptions-group', 'apptmenu_1_px_nuit_max');
		register_setting('apptmenuoptions-group', 'apptmenu_2_px_nuit_min');
		register_setting('apptmenuoptions-group', 'apptmenu_2_px_nuit_max');
		register_setting('apptmenuoptions-group', 'apptmenu_3_px_nuit_min');
		register_setting('apptmenuoptions-group', 'apptmenu_3_px_nuit_max');	
		register_setting('apptmenuoptions-group', 'apptmenu_4_px_nuit_min');
		register_setting('apptmenuoptions-group', 'apptmenu_4_px_nuit_max');
		
		register_setting('apptmenuoptions-group', 'apptmenu_1_px_wk_min');
		register_setting('apptmenuoptions-group', 'apptmenu_1_px_wk_max');
		register_setting('apptmenuoptions-group', 'apptmenu_2_px_wk_min');
		register_setting('apptmenuoptions-group', 'apptmenu_2_px_wk_max');
		register_setting('apptmenuoptions-group', 'apptmenu_3_px_wk_min');
		register_setting('apptmenuoptions-group', 'apptmenu_3_px_wk_max');	
		register_setting('apptmenuoptions-group', 'apptmenu_4_px_wk_min');
		register_setting('apptmenuoptions-group', 'apptmenu_4_px_wk_max');
		
		register_setting('apptmenuoptions-group', 'apptmenu_1_nb_cac');	
		register_setting('apptmenuoptions-group', 'apptmenu_2_nb_cac');	
		register_setting('apptmenuoptions-group', 'apptmenu_3_nb_cac');	
		register_setting('apptmenuoptions-group', 'apptmenu_4_nb_cac');	
		
		register_setting('apptmenuoptions-group', 'apptmenu_1_nb_pers');
		register_setting('apptmenuoptions-group', 'apptmenu_2_nb_pers');
		register_setting('apptmenuoptions-group', 'apptmenu_3_nb_pers');
		register_setting('apptmenuoptions-group', 'apptmenu_4_nb_pers');	
		
		register_setting('apptmenuoptions-group', 'apptmenu_sejour_min');	
	}
}

function appt_html_page() {
?>
    <div class="wrap">
    <h2>Appt-menu Options</h2>
    
    <form method="post" action="options.php">
    <?php 
		settings_fields( 'apptmenuoptions-group' ); 
		do_settings_fields( 'appt-menu admin page', 'apptmenuoptions-group' ); 
	?>
    
     <!-- Configuration des Appartements : nombre de chambres -->
    <table width="510">
    <tr valign="top">
        <th>Durée minimum du séjour (nuits)</th>
        <td width="120">
        	<input name="apptmenu_sejour_min" type="text" id="apptmenu_sejour_min" value="<?php echo get_option('apptmenu_sejour_min'); ?>" />
        </td>
    </tr>
    </table>
    
    <!-- Prix minimum et maximum par nuit et par Appartement -->
    <table width="510">
    <tr>
    <th width="300">Prix par nuit</th><th>Minimum</th><th>Maximum</th>
    </tr>
    <tr valign="top">
        <th>Appt #1</th>
        <td width="120">
        	<input name="apptmenu_1_px_nuit_min" type="text" id="apptmenu_1_px_nuit_min" value="<?php echo get_option('apptmenu_1_px_nuit_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_1_px_nuit_max" type="text" id="apptmenu_1_px_nuit_max" value="<?php echo get_option('apptmenu_1_px_nuit_max'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #2</th>
        <td width="120">
        	<input name="apptmenu_2_px_nuit_min" type="text" id="apptmenu_2_px_nuit_min" value="<?php echo get_option('apptmenu_2_px_nuit_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_2_px_nuit_max" type="text" id="apptmenu_2_px_nuit_max" value="<?php echo get_option('apptmenu_2_px_nuit_max'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #3</th>
        <td width="120">
        	<input name="apptmenu_3_px_nuit_min" type="text" id="apptmenu_3_px_nuit_min" value="<?php echo get_option('apptmenu_3_px_nuit_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_3_px_nuit_max" type="text" id="apptmenu_3_px_nuit_max" value="<?php echo get_option('apptmenu_3_px_nuit_max'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #4</th>
        <td width="120">
        	<input name="apptmenu_4_px_nuit_min" type="text" id="apptmenu_4_px_nuit_min" value="<?php echo get_option('apptmenu_4_px_nuit_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_4_px_nuit_max" type="text" id="apptmenu_4_px_nuit_max" value="<?php echo get_option('apptmenu_4_px_nuit_max'); ?>" />
        </td>
    </tr>
    </table>
    
    <!-- Prix minimum et maximum par semaine et par Appartement -->
    <table width="510">
    <tr>
    <th width="300">Prix par semaine</th><th>Minimum</th><th>Maximum</th>
    </tr>
    <tr valign="top">
        <th>Appt #1</th>
        <td width="120">
        	<input name="apptmenu_1_px_wk_min" type="text" id="apptmenu_1_px_wk_min" value="<?php echo get_option('apptmenu_1_px_wk_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_1_px_wk_max" type="text" id="apptmenu_1_px_wk_max" value="<?php echo get_option('apptmenu_1_px_wk_max'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #2</th>
        <td width="120">
        	<input name="apptmenu_2_px_wk_min" type="text" id="apptmenu_2_px_wk_min" value="<?php echo get_option('apptmenu_2_px_wk_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_2_px_wk_max" type="text" id="apptmenu_2_px_wk_max" value="<?php echo get_option('apptmenu_2_px_wk_max'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #3</th>
        <td width="120">
        	<input name="apptmenu_3_px_wk_min" type="text" id="apptmenu_3_px_wk_min" value="<?php echo get_option('apptmenu_3_px_wk_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_3_px_wk_max" type="text" id="apptmenu_3_px_wk_max" value="<?php echo get_option('apptmenu_3_px_wk_max'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #4</th>
        <td width="120">
        	<input name="apptmenu_4_px_wk_min" type="text" id="apptmenu_4_px_wk_min" value="<?php echo get_option('apptmenu_4_px_wk_min'); ?>" />
        </td>
        <td width="120">
        	<input name="apptmenu_4_px_wk_max" type="text" id="apptmenu_4_px_wk_max" value="<?php echo get_option('apptmenu_4_px_wk_max'); ?>" />
        </td>
    </tr>
    </table>
    
    <!-- Configuration des Appartements : nombre de chambres -->
    <table width="510">
    <tr><th>Appartement</th><th>Nombre de chambres</th>
    </tr>
    <tr valign="top">
        <th>Appt #1</th>
        <td width="120">
        	<input name="apptmenu_1_nb_cac" type="text" id="apptmenu_1_nb_cac" value="<?php echo get_option('apptmenu_1_nb_cac'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #2</th>
        <td width="120">
        	<input name="apptmenu_2_nb_cac" type="text" id="apptmenu_2_nb_cac" value="<?php echo get_option('apptmenu_2_nb_cac'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #3</th>
        <td width="120">
        	<input name="apptmenu_3_nb_cac" type="text" id="apptmenu_3_nb_cac" value="<?php echo get_option('apptmenu_3_nb_cac'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #4</th>
        <td width="120">
        	<input name="apptmenu_4_nb_cac" type="text" id="apptmenu_4_nb_cac" value="<?php echo get_option('apptmenu_4_nb_cac'); ?>" />
        </td>
    </tr>
    </table>
     
	<!-- Configuration des Appartements : nombre maximum de personnes -->     
    <table width="510">
    <tr><th>Appartement</th><th>Nombre maximum de personnes</th>
    </tr>
    <tr valign="top">
        <th>Appt #1</th>
        <td width="120">
        	<input name="apptmenu_1_nb_pers" type="text" id="apptmenu_1_nb_pers" value="<?php echo get_option('apptmenu_1_nb_pers'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #2</th>
        <td width="120">
        	<input name="apptmenu_2_nb_pers" type="text" id="apptmenu_2_nb_pers" value="<?php echo get_option('apptmenu_2_nb_pers'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #3</th>
        <td width="120">
        	<input name="apptmenu_3_nb_pers" type="text" id="apptmenu_3_nb_pers" value="<?php echo get_option('apptmenu_3_nb_pers'); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th>Appt #4</th>
        <td width="120">
        	<input name="apptmenu_4_nb_pers" type="text" id="apptmenu_4_nb_pers" value="<?php echo get_option('apptmenu_4_nb_pers'); ?>" />
        </td>
    </tr>
    </table>
     
    <p>
    	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
    
    </form>
    </div>
<?php
}
?>