<?php
    $id = $_REQUEST["a"];
    $name = $_REQUEST["b"];
    $surname = $_REQUEST["c"];
    $date = $_REQUEST["d"];
    $email = $_REQUEST["e"];
    $password = $_REQUEST["f"];
    $city = $_REQUEST["g"];

	$db_handle=mysqli_connect("localhost","root","root");
	$db_found=mysqli_select_db($db_handle,"LinkedInECE");
    if ($db_found){	
		$sql="SELECT id_u,email FROM utilisateur";
		$result = mysqli_query($db_handle,$sql);
        var i=1;
        while(($data = mysqli_fetch_array($result))&&(i==1)) {
            if ($data["id_u"] == $id){
                echo "identifiant déjà utilisé";
                i=0;
            }
            else{
                if ($data["email"] == $email){
                    echo "email déjà utilisé";
                    i=0;
                }
            }
        }
        if (i==1){
            $sql="INSERT INTO utilisateur (id_u,nom_u,prenom_u,d_naissance,email,password,statut,ville) VALUES (".$id.",'".$name."','".$surname."',".$date.",'".$email."','".$password."','utilisateur','".$city."')";
            mysqli_query($db_handle,$sql);
            echo "Inscription enregistrée"
        }
    }
	else {echo "Base de données non trouvées";}

    mysqli_close($db_handle);s
?>