function login() {  
  
    var username = document.getElementById("username");  
    var pass = document.getElementById("password");  
  
    if (username.value == "") {  
  
        alert("Please enter a username");  
  
    } else if (pass.value  == "") {  
  
        alert("Please enter a password");  
  
    } else if(username.value == "alex" && pass.value == "123456"){  
  
        window.location.href="welcome.html";  
  
    } else {  
  
        alert("Please enter the correct username and password!")  
  
    }  
}  
function register() {

    var username = document.getElementById("username");
    var pass = document.getElementById("password");
	var confirmpassword=document.getElementById("confirmpassword");
    if (username.value === "") {

        alert("Please enter user name");

    } else if (pass.value  === "") {

        alert("Please enter password");

    } else if(confirmpassword.value  !== pass.value){

        alert("Your confirm password is not correct");

    }else{  
  
        window.location.href="login.html";  
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