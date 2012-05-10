<?php
class ControllerViewExamplePlugin extends Omeka_Plugin_Abstract
{
    protected $_filters = array(
        'admin_navigation_main', 
        'public_navigation_main', 
    );
    
    public function filterAdminNavigationMain($nav)
    {
        $nav['Controller View Example'] = uri('controller-view-example');
        return $nav;
    }
    
    public function filterPublicNavigationMain($nav)
    {
        $nav['Controller View Example'] = uri('controller-view-example');
        return $nav;
    }
}
