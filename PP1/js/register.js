
/**
 * Created by Kay on 2016/3/8.
 */
function login() {

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