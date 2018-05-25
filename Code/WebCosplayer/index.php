<?php
/**
 * index.php
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 25.05.2018
 * Time: 10:55
 */

session_start();
require 'controler/controler.php';

try {
    if (isset($_GET['action'])) {
        //action to do
        $action = $_GET['action'];

        switch ($action) {
            case 'v_explore':
                explore();
                break;

            case 'v_gallery':
                gallery();
                break;

            default:
                throw new Exception("Invalid Action");
                break;
        }
    }
    else {
        home(); //Display home by default
    }
} catch (Exception $e) {
    error($e->getMessage());
}

?>