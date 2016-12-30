function Pretraga(_rezultat)
 {
	 //Pretraga naslova knjige

    if (_rezultat.length == 0) 
	{ 
        document.getElementById("suggLabel").innerHTML = "";
        return;
    }
	else 
	{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
				{
                document.getElementById("suggLabel").innerHTML = this.responseText;
				
                }
        };
        xmlhttp.open("POST", "Prijedlog.php?q=" + _rezultat, true);
        xmlhttp.send();
    }
	
	//Pretraga autora
	if (_rezultat.length == 0) 
	{ 
        document.getElementById("suggLabel2").innerHTML = "";
        return;
    }
	else 
	{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
				{
                document.getElementById("suggLabel2").innerHTML = this.responseText;	
                }
        };
        xmlhttp.open("POST", "Prijedlog2.php?q=" + _rezultat, true);
        xmlhttp.send();
    }
	
}
function Pretrazi()
{
   var _naslov = document.getElementById( 'suggLabel' );
   var _autor = document.getElementById( 'suggLabel2' );
   var pomN = _naslov.textContent;
   var pomA = _autor.textContent;
   var rez = pomN.concat(pomA);
   
   alert( rez );
   
   
}