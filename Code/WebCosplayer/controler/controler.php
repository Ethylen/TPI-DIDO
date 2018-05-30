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
    $result = getCosplayer();
    require 'view/v_profile.php';
}

//Profile Edit
function profil_edit() {
    $result = getCosplayer();
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

//Add an event
function add_event() {
    require 'view/v_add_event.php';
}
function add_event2() {
    require 'view/v_add_event2.php';
}

//Add WIP
function add_wip() {
    require 'view/v_add_wip.php';
}
function add_wip2() {
    require 'view/v_add_wip2.php';
}


?>