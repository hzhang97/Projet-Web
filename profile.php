<?php session_start(); ?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Profil</title>
            <style>
                #topbar
                {
                    width:100%;
                    padding:10px;
                    height:70px;
                    border:2px;
                    justify-content: space-around;
                    background-color:#ABCDF0;
                }
                #nav 
                {
                    margin:0px;
                    padding:10px;
                    position:absolute;
                    right:10px;
                    top:15px;
                }
                #nav li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav a:link, #nav a:visited 
                {
                    color:#000;
                    background:#C0C0C0;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    border-right:10px solid #C0C0C0;
                    text-decoration:none;
                    font:"Georgia";
                    font-size:x-large;
                }
                #search
                {
                    display:inline;
                    position:absolute;
                    left:20px;
                    top:8px;
                    font:"Georgia";
                    font-size:x-large
                }
                #button
                {
                    width:15px;
                    height:5px;
                    position:absolute;
                    left:280px;
                    top:20px;
                }
				#button2
				{   width:100px;
                    height:40px;
                    position:absolute;
                    left:1150px;
                    top:130px;
				}
                #container1
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height:300px;
                    font:"Georgia";
                    font-size: 35px;
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top:50px;
                    padding-top: 3px;
                    padding-bottom: 3px;
                }
				#container2
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height:auto;
                    font:"Georgia";
                    font-size: 35px;
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top: 50px;
                    padding-top: 3px;
                    padding-bottom: 3px;
                }
				#container3
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height:auto;
                    font:"Georgia";
                    font-size: 35px;
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top: 50px;
                    padding-top: 3px;
                    padding-bottom: 3px;
                }
				#container4
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height: auto;
                    font:"Georgia";
                    font-size: 35px;
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top: 50px;
                    padding-top: 3px;
                    padding-bottom: 3px;
                }
                #infos
                {
                    font: "Georgia";
                    font-size: 30px;
                    text-align: center;
                }
                #contenu_exp
                {
                    font-size:20px;
                    text-align:center;
                }
                #contenu_for
                {
                    font-size:20px;
                    text-align:center;
                }
                #publications2
                {
                    font-size:20px;
                    text-align:left;
                }
            </style>
        </head>
        <head>
            <div id="topbar">
                <ul id="search" method="post">
                    <input name="saisie" type="text" placeholder="Rechercher..." required/>
                </ul>
                <ul id="button">
                    <input type="submit" value="OK !" />
                </ul>
                <ul id="nav">
                    <li id="nav-home"><a href="accueil.php">Accueil</a></li>
                    <li id="nav-friends"><a href="reseau.html">Réseau</a></li>
                    <li id="nav-job"><a href="emplois.html">Emplois</a></li>
                    <li id="nav-mail"><a href="messagerie.html">Messagerie</a></li>
                    <li id="nav-notif"><a href="notif.html">Notifications</a></li>
                    <li id="nav-me"><a href="profile.php">Vous</a></li>
                </ul>
                
            </div>
        </head>
        <body>
			<div id="container1">
                <center>
                    <img  src="<?php
                        /* Connexion à la BDD */
                        $bdd=mysqli_connect('localhost', 'root', 'root', 'LinkedInECE');
                        /* Création d'une requête */
                        $reponse = mysqli_query ($bdd,"SELECT image_profil FROM utilisateur WHERE id_u=108410");
                        /* Affichage du résultat de la requête */
                        while($donnees=$reponse->fetch_array())
                        {
                            echo $donnees['image_profil'];
                        }
                    ?>" alt="Smiley face" width="150" height="150"/>
                </center>
                <ul id="button2">
                    <button onclick="modif()" height=auto>Modifier profil</button>
                </ul>
                <ul id="infos">
                    <?php
                        /* Connexion à la BDD */
                        $bdd=mysqli_connect('localhost', 'root', 'root', 'LinkedInECE');
                        /* Création d'une requête */
                        $reponse = mysqli_query ($bdd,"SELECT * FROM utilisateur WHERE id_u=108410");
                        /* Affichage du résultat de la requête */
                        while($donnees=$reponse->fetch_array())
                        {
                            echo $donnees['prenom_u'];
                            echo ' ';
                            echo $donnees['nom_u'];
                            echo '<br/>';
                            echo 'Étudiant - ECE ';
                            echo $donnees['ville'];
                            echo '<br/>';
                            echo $donnees['ville'];
                        }
                    ?>
                </ul>
                <script>
                    function modif(){
                        window.open("modif_infos.html","_self"); 
                    }
                </script>
            </div>
            <div id="container2">
                <ul id="expériences">
				    Expériences:
                    <ul id="contenu_exp">
                    <?php
                        /* Connexion à la BDD */
                        $bdd=mysqli_connect('localhost', 'root', 'root', 'LinkedInECE');
                        /* Création d'une requête */
                        $reponse = mysqli_query ($bdd,"SELECT * FROM parametres WHERE id_u=108410 AND  param='stage' ORDER BY date_deb DESC");
                        /* Affichage du résultat de la requête */
                        while($donnees=$reponse->fetch_array())
                        {
                            echo $donnees['valeur'];
                            echo '<br/>';
                            echo $donnees['etablissement'];
                            echo '<br/>';
                            echo $donnees['date_deb'];
                            echo ' - ';
                            echo $donnees['date_fin'];
                            echo '<br/>';
                            echo $donnees['lieu'];
                            echo '<br/>';
                            echo '<br/>';
                        }
                    ?>
                    </ul>
				</ul>
            </div>
			<div id="container3">
                <ul id="formations">
				    Formations:
                    <ul id="contenu_for">
                    <?php
                        /* Connexion à la BDD */
                        $bdd=mysqli_connect('localhost', 'root', 'root', 'LinkedInECE');
                        /* Création d'une requête */
                        $reponse = mysqli_query ($bdd,"SELECT * FROM parametres WHERE id_u=108410 AND  param='formation' ORDER BY date_deb DESC");
                        /* Affichage du résultat de la requête */
                        while($donnees=$reponse->fetch_array())
                        {
                            echo $donnees['valeur'];
                            echo '<br/>';
                            echo $donnees['etablissement'];
                            echo '<br/>';
                            echo $donnees['date_deb'];
                            echo ' - ';
                            echo $donnees['date_fin'];
                            echo '<br/>';
                            echo $donnees['lieu'];
                            echo '<br/>';
                            echo '<br/>';
                        }
                    ?>
                    </ul>
				</ul>
			</div>
			<div id="container4">
                <ul id="publications">
				    Vos dernières publications:
                    <ul id="publications2">
                    <?php
                        /* Connexion à la BDD */
                        $bdd=mysqli_connect('localhost', 'root', 'root', 'LinkedInECE');
                        /* Création d'une requête */
                        $reponse = mysqli_query ($bdd,"SELECT * FROM publication WHERE id_ut=108410 ORDER BY date_p DESC LIMIT 4");
                        /* Affichage du résultat de la requête */
                        while($donnees=$reponse->fetch_array())
                        {
                            echo '<br>';
                            echo $donnees['titre_p'];
                            echo '<br>';
                            echo '<br>';
                            echo 'le ';
                            echo $donnees['date_p'];
                            echo ' à ';
                            echo $donnees['heure_p'];
                            echo '<br>';
                            echo '<br>';
                        }
                        ?>
                    </ul>
				</ul>
            </div>
        </body>
</html> 