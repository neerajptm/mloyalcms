function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8 || key == 32);
  };

  function alphanumOnly(event) {
    var key = event.keyCode;
    
    return ((key >= 65 && key <= 90) || (key == 8 || key == 32) || (key > 95 && key < 106) || (key >= 48 && key <= 57));
  };

  function mlcmsvalidate(){
    if (document.mloyalcmslogin.uid.value == "") {
        document.getElementById("uid_error").innerHTML="User id is required";
        return (false);
    } 
    else {
        document.getElementById("uid_error").innerHTML="";
    }

    if (document.mloyalcmslogin.pwd.value == "") {
        document.getElementById("pwd_error").innerHTML="Password is required";
        return (false);
    } 
    else {
        document.getElementById("pwd_error").innerHTML="";
    }

    
  }