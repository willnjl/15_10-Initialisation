<?php
   /**
   * Plugin Name: 15-10 Initialisation
   * Plugin URI: 
   * description:  A Plugin For managing user roles in 1510 recruitment sites
   * Version: 1.2
   * Author: Will @ Fifteenten
   * Author URI: fifteenten.co.uk
   * License: GPL2
   */


// require_once(__DIR__ . "/ConsultantRole.php");
// require_once(__DIR__ . "/Customization.php");
require_once(__DIR__ . "/XmlFeed.php");




function fiften_setup_activate()
{

}
function fiften_setup_deactivate()
{

}

register_activation_hook( __FILE__, 'fiften_setup_activate' );
register_deactivation_hook( __FILE__, 'fiften_setup_deactivate' );