<?php
class ExamplePlugin extends Omeka_Plugin_Abstract
{
    protected $_filters = array(
        'admin_navigation_main', 
    );
    
    public function filterAdminNavigationMain($nav)
    {
        $nav['Example'] = uri('example');
        return $nav;
    }
}
