function inscript() {
    document.getElementById("text").style.display = "none";
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var date = document.getElementById("date").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var city = document.getElementById("city").value;
    
    if((id.length == 0)||(name.length == 0)||(surname.length == 0)||(date.length == 0)||(email.length == 0)||(password.length == 0)||(city.length == 0)) {
        document.getElementById("text").innerHTML = "Veuillez remplir tous les champs";
        return ;
    } 
    else if (verifdate(date)==false){
            document.getElementById("text").innerHTML = "date de naissance incorrect";
            return ;
             }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var resp = xmlhttp.responseText;
                document.getElementById("text").innerHTML = resp;
            }
        };
        xmlhttp.open("GET","http://localhost:8888/Inscription.php?a=" + id + "&&b=" + name + "&&c=" + surname + "&&d=" + date + "&&e=" + email + "&&f=" + password + "&&g=" + city,true);
        xmlhttp.send();    
    }   
}

function upload(){
    
}


function verifdate(d){
    if (d.length!=10){
        return false;
    }
    else {
        var a = d.substr(0, 4);
        var m = d.substr(5, 2);
        var j = d.substr(8, 2);
        if ((a<new Date().getFullYear())&&(m>0)&&(m<13)&&(j>0)&&(j<32)){
            return true;
        }
        else if ((d.substr(4, 1)=="-")&&(d.substr(7,1))){
            return true;
        }
        else {return false;}
    }
}



function inscrire(){
    document.getElementById("text").style.display = "block";
    upload();
    if (document.getElementById("text").innerHTML=="mot de passe correct"){
        window.open("Accueil.html","_self"); 
    }
}
