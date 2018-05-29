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

//Gallery
function gallery() {
    require 'view/v_gallery.php';
}

//Profile
function profile() {
    require 'view/v_profile.php';
}

//Profile Edit
function profil_edit() {
    require 'view/v_profile_edit.php';
}

//WIP
function wip() {
    require 'view/v_wip.php';
}

//choose cosplay or gallery
function add_cos(){
    require 'view/v_add_cos.php';
}
function add_cos2() {
    require 'view/v_add_cos2.php';
}
function add_cos3(){
    require 'view/v_add_cos3.php';
}
function add_cos4(){
    require 'view/v_add_cos4.php';
}

?>