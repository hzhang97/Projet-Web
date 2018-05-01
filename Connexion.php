<?php

$db_handle=mysqli_connect("localhost","root","root");
$db_found=mysqli_select_db($db_handle,"LinkedInECE");
    if (!$db_found){
        echo "Base de données non trouvée";
    }

// mysqli_close($db_handle);
?>