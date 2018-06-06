<?php
/**
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 05.06.2018
 * Time: 15:45
 */

$titre = 'Web Cosplayers - Profile edition';
ob_start();
?>

<div id="content-block">
    <p><?php echo $_GET['idprofile'];?></p>
<?php if (!isset($_GET['login'])){
$_SESSION['login'] = $_GET['idprofile']; ?>
<div class="alert style-2 fade in" role="alert">
    <div class="alert-title">Connexion</div>
    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.
</div>
<?php }else { ?>
    <div class="alert style-2 fade in" role="alert">
        <div class="alert-title">Deconnexion</div>
        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
        culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
        expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
        quod maxime.
    </div>
    <?php
    session_destroy();
    }
    ?>
</div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
