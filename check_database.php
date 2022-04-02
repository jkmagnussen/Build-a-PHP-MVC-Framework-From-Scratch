<?php

include "config.php";

/**
 * Check the database connection details are ok.
 *
 * *** Temporary script that should be deleted before putting live! ***
 *
 * PHP version 5.4
 */

/**
 * Database connection data
 */

/**
 * Create a connection
 */

$con = new PDO('mysql:host='.DB_HOST.'dbname='.DB_NAME.'port=80', DB_USER, DB_PASS);

/**
 * Check the connection
 */
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully, connection data are ok.";
}