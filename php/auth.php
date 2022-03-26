<?php 
    if( !isset($_SESSION['UserId']) ){
        header('Location: ../signin.php');  
    }
?>