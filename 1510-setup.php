<?php
   /**
   * Plugin Name: 1510-setup
   * Plugin URI: 
   * description:  A Plugin For managing user roles in 1510 recruitment sites
   * Version: 1.2
   * Author: Will @ Fifteenten
   * Author URI: fifteenten.co.uk
   * License: GPL2
   */


// require_once(__DIR__ . "/ConsultantRole.php");
// require_once(__DIR__ . "/Customization.php");
require_once(__DIR__ . "/Capabilities.php");


function fiften_setup_activate()
{
   $rolesToEdit = array(
      'administrator', 'editor', 'author'
   );
   $capsToRemove = array(
      'install_plugins', 'edit_plugins'
   );
   $editor = new FiftenCapEditor($rolesToEdit, $capsToRemove);
   $editor->removeCapabilities();
  
}
function fiften_setup_deactivate()
{
   $rolesToEdit = array(
      'administrator', 'editor', 'author'
   );
   $capsToRemove = array(
      'install_plugins', 'edit_plugins'
   );
   $editor = new FiftenCapEditor($rolesToEdit, $capsToRemove);
   $editor->restoreCapabilities();
}

register_activation_hook( __FILE__, 'fiften_setup_activate' );
register_deactivation_hook( __FILE__, 'fiften_setup_deactivate' );