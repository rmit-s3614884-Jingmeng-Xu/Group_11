function login() {  
  
    var username = document.getElementById("username");  
    var pass = document.getElementById("password");  
  
    if(username.value == "admin" && pass.value == "123456")
    {
        window.location.href="welcome.html";  
    } 
    else 
    {
        alert("Please enter the correct username and password!")  
    }  
}  