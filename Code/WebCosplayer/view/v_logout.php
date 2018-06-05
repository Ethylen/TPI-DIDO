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

<div class="alert style-2 fade in" role="alert">
    <div class="alert-title">Message title here</div>
    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.
</div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
