var userinput = document.getElementById("email");
var passinput = document.getElementById("password");

var username = "return";
var password = "return123";

function logintype(){
    var getemail = userinput.value;
    var getpass = passinput.value;

    if(getemail == username && getpass == password){
        window.location.href = "../index.html#Webpick";
    }else{
        alert("Account Incorrect");
        userinput.style = "border-color: red; color: red" ;
        passinput.style = "border-color: red; color: red";
    }
} 