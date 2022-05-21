<?php
    session_start();
    include("../config.php");
    //include("scripts/userdata.php");
    
    if (!isset($_SESSION['username'])){
        
        $Message = "You cannot reach this page unless logged in :(";
        header("Location: welcome.php?Message=" . urlencode($Message));

    }
    
?>