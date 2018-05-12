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