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
    $req = "SELECT profile_id, pseudo, statut, sn1, sn2, sn3, c_description, cosplayer_image, country_name FROM countries INNER JOIN cosplayers ON id_country = fk_country";
    $result = $connexion->query($req);
    return $result;
}

/** ----------------------------
 * GetCosplayer2()
 * Created the 06.06.2018
 * Update time :
 * Create by TDO
 * Comment : Profile Data
 * out : $resultat
 * -----------------------------
 */

function getCosplayer2($post) {
    //Connect to the server MySQL
    $connexion = getBD();
    //Request definition
    $req = "SELECT * FROM cosplayers WHERE profile_id = '".$post."'";

    $resultt = $connexion->query($req);
    return $resultt;
}

/** ----------------------------
 * GetCountry()
 * Created the 06.06.2018
 * Update time :
 * Create by TDO
 * Comment : Country data
 * out : $cc
 * -----------------------------
 */

function getCountry() {
    //Connect to the server MySQL
    $connexion = getBD();
    //Request definition
    $req = "SELECT * FROM countries";

    $cc = $connexion->query($req);
    return $cc;
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