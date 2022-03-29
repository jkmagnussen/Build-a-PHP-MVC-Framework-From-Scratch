<?php 

namespace App\Controllers;

use \Core\View;

/** 
 * Home controller 
 * 
 * PHP version 5.4 + 
 */

class Home extends \Core\Controller{

    /** 
     * Before filter
     * 
     * @return void
     */
    protected function before(){
        // echo "(before)";
        // return false;
    }

    /** After filter 
     * 
     * @return void
     */
    protected function after(){
        // echo "(after)";
    }
     /** 
      * Show the index page 
      * @return void 
      */
      public function indexAction(){
        //   echo 'Hello from the index action in the Home controller!';

        //   View::render('Home/index.php', [
        //       'name' => 'Dave',
        //       'colours' => ['red', 'green', 'blue']
        //   ]);

        View::renderTemplate('Home/index.html', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
      }

      /** 
      * Show the add new page
      * @return void 
      */
      public function addNewAction(){
          echo 'Hello from the addNew action in the Posts controller!';
      }
 }