//Validacija forme na stranici Knjige.html
function ValidirajKnjigu()
{
	var tekst=document.getElementById("InputKnjiga");
	var regexInput=/^([a-zA-Z0-9 ]+)$/i; 
	
	if(!regexInput.test(tekst.value))
	{
		document.getElementById("BtnKnjiga").disabled=true;
		document.getElementById("Input").innerHTML="Naziv se sastoji samo od alfanumerickih znakova";
		tekst.focus;
	}
	else
	{
		document.getElementById("BtnKnjiga").disabled=false;
		document.getElementById("Input").innerHTML="";
	}
}
function Validiraj()
{
	var _tekst=document.getElementById("InputKnjiga").value;
	
	if(_tekst.length<=0)
	{
		document.getElementById("BtnKnjiga").disabled=true;
		document.getElementById("Input").innerHTML="Popunite polje";
	}
	else
	{
		document.getElementById("BtnKnjiga").disabled=false;
		document.getElementById("Input").innerHTML="";
	}
}
//Validacija forme na stranici Onama.html
function ValidirajInput()
{
	var tekst=document.getElementById("TxtOnama");
	var regexInput=/^([a-zA-Z0-9 ]+)$/i; 
	
	if(!regexInput.test(tekst.value))
	{
		document.getElementById("BtnOnama").disabled=true;
		document.getElementById("InputOnama").innerHTML="Naziv se sastoji samo od alfanumerickih znakova";
		tekst.focus;
	}
	else
	{
		document.getElementById("BtnOnama").disabled=false;
		document.getElementById("InputOnama").innerHTML="";
	}
}
function ValidirajOnama()
{
	var _tekst=document.getElementById("TxtOnama").value;
	
	if(_tekst.length<=0)
	{
		document.getElementById("BtnOnama").disabled=true;
		document.getElementById("InputOnama").innerHTML="Popunite polje";
	}
	else
	{
		document.getElementById("BtnOnama").disabled=false;
		document.getElementById("InputOnama").innerHTML="";
	}
}
//Validacija forme na stranici Kontakt.html - ukoliko je neko od polja u neispravnom formatu, submit onemogućen
function ValidirajMail()
{
	var _mail=document.getElementById("txtMail");
	var _mailValue=document.getElementById("txtMail").value;
	var _regexMail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(!_regexMail.test(_mailValue))
	{
		document.getElementById("BtnKontakt").disabled=true;
		document.getElementById("mailLabel").innerHTML="E-mail u neispravnom formatu";
	}
	else
	{
		document.getElementById("BtnKontakt").disabled=false;
		document.getElementById("mailLabel").innerHTML="";
	}
}
function ValidirajDrzavu()
{
	var _kod=document.getElementById("txtDrzava");
	var _telefon=document.getElementById("txtTelefon");
	
	var regexInput=/^([a-zA-Z0-9 ]+)$/i;
	
	if(!regexInput.test(_kod.value))
	{
		document.getElementById("BtnKontakt").disabled=true;
		document.getElementById("drzavaLabel").innerHTML="Naziv države se sastoji samo od alfanumerickih znakova";
	}
	else
	{
		document.getElementById("BtnKontakt").disabled=false;
		document.getElementById("drzavaLabel").innerHTML="";
	}
}

function ValidirajTelefon()
{
	var _telefon=document.getElementById("txtTelefon");
	
	var regexInput=/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/; 
	
	if(!regexInput.test(_telefon.value))
	{
		document.getElementById("BtnKontakt").disabled=true;
		document.getElementById("telefonLabel").innerHTML="Neispravan format telefonskog broja";
	}
	else
	{
		document.getElementById("BtnKontakt").disabled=false;
		document.getElementById("telefonLabel").innerHTML="";
	}
	
}
function ValidirajPoruku()
{
	//poruka mora biti duža od 5 znakova
	var tekst=document.getElementById("txtPoruka");
	
	if(tekst.value.length < 5)
	{
		document.getElementById("BtnKontakt").disabled=true;
		document.getElementById("porukaLabel").innerHTML="Neispravan format telefonskog broja";
		tekst.focus;
	}
	else
	{
		document.getElementById("BtnKontakt").disabled=false;
		document.getElementById("porukaLabel").innerHTML="";
	}	
}
//Ako je neko od polja prazno, onemogućen submit
function ValidirajKontakt()
{
	var _mail=document.getElementById("txtMail").value;
	var _drzava=document.getElementById("txtDrzava").value;
	var _telefon=document.getElementById("txtTelefon").value;
	var _poruka=document.getElementById("txtPoruka").value;
	
	if(_mail.length<=0 || _drzava.length<=0 || _telefon.length<=0 || _poruka.length<=0)
	{
		document.getElementById("BtnKontakt").disabled=true;
		document.getElementById("btnLabel").innerHTML="Popunite sva polja";
	}
	else
	{
		document.getElementById("BtnKontakt").disabled=false;
		document.getElementById("btnLabel").innerHTML="";
	}	
}