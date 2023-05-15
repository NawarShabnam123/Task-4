document.getElementById('login').addEventListener("click", function(){
    var uEmail = document.getElementById('email').value;
    var uPass = document.getElementById('pass').value;

    const char = /[@.]/;

    if(uEmail == "" || uPass == ""){
        document.getElementById("msg").innerHTML = "Input field(s) cannot be empty.";
        document.getElementById("msg").style.margin = "20px";
        if(uEmail == ""){
            document.getElementById("email").style.border = "1px solid red";
        }
        if(uPass == ""){
            document.getElementById("pass").style.border = "1px solid red";
        }
    }
    else if(char.test(uEmail) == false){
        document.getElementById("email").style.border = "1px solid red";
        document.getElementById("msg").innerHTML = "Invalid email address.";
        document.getElementById("msg").style.margin = "20px";
    }
    else if(char.test(uEmail) == true){
        document.cookie = "lgEmail="+uEmail;
        document.cookie = "lgPass="+uPass;
        
        window.location = "./check.php";
    }
    else{
        console.log("Something happened.");
        alert("Error occured.");
        window.location.replace("./signup.php");
    }
});