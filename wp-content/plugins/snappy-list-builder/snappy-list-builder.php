<?php 
/**
 * Plugin Name: Snappy list builder
 * Plugin URI: http://www.triggerfish.se
 * Description: Description text that tell you about my plugin
 * Version: 1.0
 * Author: Tomas Luhed Lindahl
 * Author URI: http://www.triggerfish.se
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: snappy-list-builder
 */

 /* !0. TABLE OF CONTENTS */
 /*
	1. HOOKS
	2. SHORTCODES
	3. FILTERS
	4. EXTERNAL SCRIPTS
	5. ACTIONS
	6. HELPERS
	7. CUSTOM POST TYPES
	8. ADMIN PAGE
	9. SETTINGS

	*/

	/* !2.  SHORTCODES */

function slb_form( $args, $content="" ) {

	// setup our output variable = the form html
	$output = '
		<div class="slb">
			<form id="slb_form" name="slb_form" class="slb-form" method="post">
				<p class=""slb-input-container">
					<label>You name </label> <br />
					<input type="text" name="slb_fname" placeholder="First name" />
					<input type="text" name="slb_lname" placeholder="Last name" />
				</p>
				<p class=""slb-input-container">
				<label>Your Email </label> <br />
				<input type="email" name="slb_email" placeholder="Your email address" />
				</p>
				
				<p class=""slb-input-container">
				
				<input type="submit" name="slb_submit" value="Sign Me Up />
				</p>

			</form>
		</div>
	';

	//return html
	return $output;
}