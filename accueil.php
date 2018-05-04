<?php session_start(); ?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Bienvenue à l'ECE !</title>
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
				#nav2 
                {
                    margin:0px;
                    padding:10px;
                    position:absolute;
                    left:350px;
                    top:370px;
                }
				#nav2 li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav2 
                {
                    color:#000;
                    background:#EDEDED;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    
                    text-decoration:none;
                    font:"Georgia";
                    font-size:x-large;
                }
				
				#nav3 
                {
                    margin:0px;
                    padding:10px;
                    position:absolute;
                    left:550px;
                    top:370px;
                }
				#nav3 li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav3 
                {
                    color:#000;
                    background:#EDEDED;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    
                    text-decoration:none;
                    font:"Georgia";
                    font-size:x-large;
                }
				
				#nav4 
                {
                    margin:0px;
                    padding:10px;
                    position:absolute;
                    left:750px;
                    top:370px;
                }
				#nav4 li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav4 
                {
                    color:#000;
                    background:#EDEDED;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    
                    text-decoration:none;
                    font:"Georgia";
                    font-size:x-large;
                }
				
				#nav5 
                {
                    margin:0px;
                    padding:10px;
                    position:relative;
					left:270px;
					
                }
				#nav5 li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav5
                {
                    color:#000;
                    background:#EDEDED;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    
                    text-decoration:none;
                    font:"Georgia";
                    font-size:x-large;
                }
				
				#nav6
                {
                    margin:0px;
                    padding:10px;
                    position:relative;
					left:370px;
                    
                }
				#nav6 li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav6 
                {
                    color:#000;
                    background:#EDEDED;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    
                    text-decoration:none;
                    font:"Georgia";
                    font-size:x-large;
                }
				
				#nav7
                {
                    margin:0px;
                    padding:10px;
                    position:relative;
					left:470px;
					
                    
                }
				#nav7 li 
                {
                    display:inline;
                    padding:0;
                    margin-right:0;
                }
                #nav7 
                {
                    color:#000;
                    background:#EDEDED;
                    padding:10px 30px 10px 30px;
                    float:left;
                    width:auto;
                    
					
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
				
				
				
				
				
                #container2
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height: auto;
                    font:"Georgia";
                    font-size: 35px;
                    overflow: hidden;
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top: 100px;
                }
				
		
				
				#container1
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height:250px;
                    font:"Georgia";
                    font-size: 30px;
                 
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top: 100px;
                }
				
				#container3
                {
                    margin-left: auto;
                    margin-right: auto;
                    width: 1250px;
                    height: auto;
                    font:"Georgia";
                    font-size: 35px;
                    
					position:relative;
					overflow: hidden;
					
                    background: #C0C0C0;
                    border-right:10px solid #C0C0C0;
                    margin-top: 100px;
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
                    <li id="nav-home"><a href="#">Accueil</a></li>
                    <li id="nav-friends"><a href="#">Réseau</a></li>
                    <li id="nav-job"><a href="emplois.html">Emplois</a></li>
                    <li id="nav-mail"><a href="messagerie.html">Messagerie</a></li>
                    <li id="nav-notif"><a href="#">Notifications</a></li>
                    <li id="nav-me"><a href="#">Vous</a></li>
                </ul>
                
            </div>
        </head>
        <body>
		
			<div id="container1">
		
				<center>
				Partagez une photo, un article, une vidéo ou une idée...
				</center> <br>
				<form>			
				<center>
				<TEXTAREA name="texte" rows=5 cols=100> </TEXTAREA>
				</center>
				</form>	
				
				<ul id="nav2">
                    <li id="nav2-publier"><a href="#">Publier</a></li>
				</ul>
				<ul id="nav3">
                    <li id="nav3-photo"><a href="#">Photo</a></li>
				</ul>
				<ul id="nav4">
                    <li id="nav4-vidéo"><a href="#">Vidéo</a></li>
				</ul>
			
			</div>
            <div id="container2">
                <ul id="fil d'actualité">
                Fil d'actualités
                <?php 
                    $bdd=mysqli_connect('localhost', 'root', 'root', 'LinkedInECE');
                    $reponse = mysqli_query ($bdd,"SELECT titre_p, date_p,heure_p FROM publication WHERE id_ut IN (108410) ORDER BY date_p DESC");
                    /*SELECT id_cont FROM a_un_contact A, utilisateur U WHERE A.id = ".$SESSION["id"]."*/
                    while($donnees=$reponse->fetch_array())
                    {
                        echo $donnees['titre_p'];
                        echo '<br/>';
                        echo $donnees['date_p'];
                        echo '<br/>';
                        echo $donnees['heure_p'];
                        echo '<br/><br/>';
                    }
                ?>
				</ul>
				<div id="container3">
					<ul id="nav5">
						<li id="nav5-jaime"><a href="#">J'aime</a></li>
					</ul>
					<ul id="nav6">
						<li id="nav6-commenter"><a href="#">Commenter</a></li>
					</ul>
					<ul id="nav7">
						<li id="nav7-partager"><a href="#">Partager</a></li>
					</ul>
				</div>
				
            </div>
			
			
			
			
			
        </body>
</html>