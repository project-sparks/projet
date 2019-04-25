document.getElementById("ajouter").style.display='none';
document.getElementById("verifier").style.display='block';


function verif(){
var reference = document.getElementById("Ref").value;
var duree = document.getElementById("Durée").value;
var Prix = document.getElementById("Prix").value;
var descr = document.getElementById("descr").value;


if ((reference=="") || (duree=="") || (Prix=="") || (descr=="")) {
	alert("veuillez Remplir tous les champs");
	return
}
else if ((duree<=0) || (Prix<=0)){
		console.log("negative");
		alert("Parametre ne peut pas etre negatif");
		return
	}
else{
	console.log("valider");
	alert("sucées");
	document.getElementById("verifier").style.display='none';
document.getElementById("ajouter").style.display='block';
}

/*
var nom;
nom = log1.substring(0,log1.indexOf("."))
console.log(nom);

var prenom;
prenom = log1.substring(log1.indexOf(".")+1,log1.indexOf("@"));
console.log(prenom);


console.log(pass);
//console.log(f.mail.value);


alert("Bienvenue " + prenom +" "+ nom);
window.location="sondage.html";
}*/

}