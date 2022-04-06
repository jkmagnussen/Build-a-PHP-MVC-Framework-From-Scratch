<?php 

namespace Core;

use PDO;

include "../config.php";

/** Base Model
 * 
 * PHP version 5.4 +
 */
abstract class Model{

    /** 
     * Get the PDO database connection
     * @return mixed
     */
    protected static function getDB(){
    static $db = null;

    if ($db === null) {
        
            $db = new PDO('mysql:host='.DB_HOST.'dbname='.DB_NAME.'port=80', DB_USER, DB_PASS);
            
        
    }
    return $db;
    }
}