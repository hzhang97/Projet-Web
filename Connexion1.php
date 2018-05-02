<?php
    $email = $_REQUEST["q"];
    $password = $_REQUEST["p"];
	$db_handle=mysqli_connect("localhost","root","root");
	$db_found=mysqli_select_db($db_handle,"LinkedInECE");
    if ($db_found)
	{	
        
		$sql="SELECT password FROM utilisateur WHERE email='".$email."'";
		$result = mysqli_query($db_handle,$sql);
        if (mysql_num_rows($result)>1){echo "Cet email est déjà utilisé par un autre utilisateur, veuillez entrez un autre email";};
        else {
            while($row = mysqli_fetch_array($result)) {
                if ($row[0]==password){
                    echo "mot de passe correct";
                }
                else{
                    echo "mot de passe incorrect";
                }
            }
        }
    }
	else {echo "Base de données non trouvées";}

    mysqli_close($db_handle);
?>