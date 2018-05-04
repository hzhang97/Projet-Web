<?php
    $email = $_REQUEST["q"];
    $password = $_REQUEST["p"];
    $res = 0;
	$db_handle=mysqli_connect("localhost","root","root");
	$db_found=mysqli_select_db($db_handle,"LinkedInECE");
    
    if ($db_found)
	{	
        
		$sql="SELECT password,id_u,statut FROM utilisateur WHERE email='".$email."'";
		$result = mysqli_query($db_handle,$sql);
        if (mysqli_num_rows($result)==0){
            echo "Cet email est incorrect, veuillez entrez un autre email";
        }
        else {
            while($row = mysqli_fetch_array($result)) {
                if ($row["password"]!=$password){
                    echo "mot de passe incorrect";
                }
                else {
                    echo "mot de passe correct"; 
                    $_SESSION["id"]= $row["id_u"];
                    $_SESSION["statut"]= $row["statut"];
                }
            }
        }
    }
	else {echo "Base de données non trouvées";}
    mysqli_close($db_handle);
?>