function login() {  
  
    var username = document.getElementById("username");  
    var pass = document.getElementById("password");  
  
    if (username.value == "") {  
  
        alert("Please enter a username");  
        return false;
  
    } else if (pass.value  == "") {  
  
        alert("Please enter a password");
        return false;  
  
    }  else {  
        return true;
  
    }  
}  
function register() {

    var username = document.getElementById("username");
    var pass = document.getElementById("regpassword");
   	var confirmpassword=document.getElementById("regconfirmpassword");
   	
   	console.log(pass.value);
   	console.log(confirmpassword.value);
    if (username.value === "") {

        alert("Please enter user name");
        return false;

    } else if (pass.value  === "") {

        alert("Please enter password");
        return false;

    } else if(confirmpassword.value  !== pass.value){

        alert("Your confirm password is not correct");
        return false;

    }else{  
        return true;
    }
}

function displayLogin() {  
	var div=document.getElementById("logindiv");
	div.style.display="block";

}

function hideLogin() {  
	var div=document.getElementById("logindiv");
	div.style.display="none";

}
function displayRegister() {  
	var div=document.getElementById("registerdiv");
	div.style.display="block";

}

function hideRegister(){
	var div=document.getElementById("registerdiv");
	div.style.display="none";
}