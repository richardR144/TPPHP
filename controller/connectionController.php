<?php require_once('../config/config.php');?>
<?php require_once('../view/connexion.php');?>

<?php
function logUser() {
    session_start();
    $_SESSION['username'] = $_POST['username']; 
    }

function redirectToAdmin() {
     header("location: http://localhost/TpPHP/view/connexion.php");?>
    
    <?php }?>
     




