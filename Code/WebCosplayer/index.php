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

            case 'v_profile':
                profile();
                break;

            case 'v_profile_edit':
                profil_edit();
                break;

            case 'v_wip':
                wip();
                break;

            case 'v_cos':
                add_cos();
                break;

            case 'v_cos2':
                add_cos2();
                break;

            case 'v_cos3':
                add_cos3();
                break;

            case 'v_cos4':
                add_cos4();
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