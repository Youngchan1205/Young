function validateUsername(user_name){
	 new Ajax.Request( "my_recipes_check.php", 
  { 
    method: "get", 
    parameters: {name:user_name},
    onSuccess: displaynames
  } );
}

function displaynames(ajax){
      $("msgbox").innerHTML = ajax.responseText;
}