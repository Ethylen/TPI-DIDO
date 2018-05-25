<?php
/**
 * controler.php
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 25.05.2018
 * Time: 11:12
 */

require 'model/model.php';

//Home
function home() {
    require 'view/v_home.php';
}

//Explore
function explore() {
    require 'view/v_explore.php';
}

?>