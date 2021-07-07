<?php

class FiftenCapEditor
{
    private $rolesToEdit;
    private $capsToRemove;

    public function __construct($roles, $caps)
    {
        $this->rolesToEdit = $roles;
        $this->capsToRemove = $caps;
    }

    public function removeCapabilities()
    {
        foreach($this->rolesToEdit as $roleName){
            $role = get_role($roleName);
            foreach($this->capsToRemove as $cap){
                $role->remove_cap($cap);
            }
        }
    }

    public function restoreCapabilities()
    {
        foreach($this->rolesToEdit as $roleName){
            $role = get_role($roleName);
            foreach($this->capsToRemove as $cap){
                $role->add_cap($cap);
            }
        }
    }
}

function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context ) {
 
    if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, array(
        '1510-setup-plugin/1510-setup.php',
        // 'woocommerce/woocommerce.php'
    )))
        unset( $actions['deactivate'] );
    return $actions;
}

add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 4 );