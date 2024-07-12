<?php
if ($_Session['username'] != "richard") {
    header("location: http://localhost/TpPHP/view/connexion.php");?>
<?php }?>

<?php file_put_contents('../articles.txt', '')