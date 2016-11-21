function DropDown()
{
	var _item = document.getElementById("DropDownId");
    _item.classList.toggle("show");
}

window.onclick = function(e) {
  
  if (!e.target.matches(".DropBtn"))
  {
 	  var _item = document.getElementsByClassName("DropDownItem");
      for (var i = 0; i < _item.length; i++)
	  {
         var _idiNa = _item[i];
         if (_idiNa.classList.contains("show")) 
		 {
          _idiNa.classList.remove("show");
         }
      }
   }
}