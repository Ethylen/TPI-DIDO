<?php
/**
 * Include.php
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 25.05.2018
 * Time: 11:28
 */


/** ----------------------------
 * GetBD()
 * Created the 30.05.2018
 * Update time :
 * Create by TDO
 * Comment : Connexion to the BD
 * out : $connexion
 * -----------------------------
 */

function getBD() {
    //Connect to the server MySQL
    $connexion = new PDO ('mysql:host=localhost; dbname=webcosplay_db', 'admin', 'imadmin');
    // Return errors
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
}


/** ----------------------------
 * GetCosplayer()
 * Created the 30.05.2018
 * Update time :
 * Create by TDO
 * Comment : Profile Data
 * out : $resultat
 * -----------------------------
 */

function getCosplayer() {
    //Connect to the server MySQL
    $connexion = getBD();
    //Request definition
    $req = "SELECT * FROM cosplayers";

    $result = $connexion->query($req);
    return $result;
}

/** ----------------------------
 * GetCosplayer()
 * Created the 31.05.2018
 * Update time :
 * Create by TDO
 * Comment : Update profile
 * out : $connexion
 * -----------------------------
 */

function upDateProfile($post) {
    $connexion = getBD();
    $update = "UPDATE cosplayers set pseudo = '".$post['pseudo']."', statut = '".$post['statut']."', c_description = '".$post['description']."' WHERE id_cosplayer = 1";
    $up = $connexion->exec($update);
}