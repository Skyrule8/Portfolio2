var email = document.getElementById('mail');
var mess = document.getElementById('message');
var sujet = document.getElementById('subject');
var nom = document.getElementById("Nom");

function test()
{
	if(mess.value!="" & sujet.value!="" & nom.value!="")
	{
		document.location.href = "mailto:loickthorel1999@gmail.com?subject=" + sujet.value + '&body=' + "Message de : " + nom.value + "%0D%0A" + mess.value ;
	}
	else
	{
		window.alert("Veuillez remplir les différents champs !");
	}
	if(sujet="bretagne")
	{
		alert("C'est vrai que c'est un beau pays");
	}
}
