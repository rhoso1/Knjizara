function ValidacijaTelefon()
{
	var _telefon = document.getElementById("telefon");
	  var telefonRegEx = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{3}$/;
	   if(!telefonRegEx.test(telefon.value))
	   {
		   _telefon.style.backgroundColor = #cc0000;       
          }
		  else
		  {
			  _telefon.style.backgroundColor = #ffffff;
		  }
}
function ValidacijaAutor()
{
    var _autor = document.getElementById("autor").value;
	if(_autor.length > 20)
	{
          _autor.style.backgroundColor = #cc0000;
		  document.getElementById("demoAutor").innerHTML = "Naziv autora ne može biti duži od 20 znakova.";
    }
	else
	{
		_autor.style.backgroundColor = #ffffff;
	}
}
function ValidacijaNaziv()
{  
   var _naziv = document.getElementById("naziv").value;
   if(_naziv.length > 30)
	{
          _naziv.style.backgroundColor = #cc0000;
		  document.getElementById("demoNaziv").innerHTML = "Naziv novosti ne može biti duži od 30 znakova.";
    }
	else
	{
		_naziv.style.backgroundColor = #ffffff;
	}
}
function ValidacijaNovost()
{	
	var _novost = document.getElementById("novost").value;
	var novostRegex = /[^a-z0-9]/;
	if (!novostRegex.test( _novost ))
		{
          _novost.style.backgroundColor = #cc0000;
		  document.getElementById("demoNovost").innerHTML = "Novost može sadržavati samo alfanumeričke znakove.";
        }
	else
	{
		_novost.style.backgroundColor = #ffffff;
	}
}