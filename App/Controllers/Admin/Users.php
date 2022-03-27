<?php 

namespace App\Controllers\Admin;

/**
** User admin controllerr
** PHP version 5.4 + 
*/
class Users extends \Core\Controller{
    
    /**
    * Before filterr
    * @return void 
    */
    protected function before(){
        // Make sure an admin user is logged in for example 
        // return false;
    }

    /**
     * Show the index page 
     * 
     * @return void
     */
    public function indexAction(){
        echo 'User admin index';
    }
}