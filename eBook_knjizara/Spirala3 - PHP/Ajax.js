function AjaxFunkcija()
{
  var _ajax = new XMLHttpRequest();
 
 _ajax.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
	{
      document.getElementById("ajax").innerHTML = this.responseText;
    }
  };
  _ajax.open("GET", "AjaxInformacije.txt", true);
  _ajax.send();

  }