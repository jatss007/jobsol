<?php

    setcookie("Hiring",NULL, time()-3600, '/', $_SERVER['SERVER_NAME'] );

    $_SESSION['image']="";
    $_SESSION['firstname']="";
    header("Location: ../../index.php");

    


?>
