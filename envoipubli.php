<?php
    $text = $_REQUEST["t"];

	$db_handle=mysqli_connect("localhost","root","root");
	$db_found=mysqli_select_db($db_handle,"LinkedInECE");

    $date = date("Y-m-d");
    $heure = date("H:i:s");
    if ($db_found){	
        
        $sql="INSERT INTO publication (id_ut,titre_p,date_p,heure_p) VALUES (108410,'".$text."','".$date."','".$heure."')";
//       $sql="INSERT INTO publication (id_ut,titre_p,date_p,heure_p) VALUES (".$_SESSION["id"].",'".$text."','".$date."','".$heure."')";
        
        if (mysqli_query($db_handle, $sql)) {
            echo "envoye"; 
        } else {
             echo "Error";
        }            
    }
	else {echo "Base de donnÃ©es non trouvÃ©es";}
    mysqli_close($db_handle);

?>
