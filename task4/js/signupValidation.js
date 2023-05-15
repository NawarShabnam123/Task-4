document.getElementById('signup').addEventListener("click", function(){
    var uName = document.getElementById('name').value;
    var uEmail = document.getElementById('email').value;
    var uPass1 = document.getElementById('pass1').value;
    var uPass2 = document.getElementById('pass2').value;

    const char = /[@.]/;

    if(uName == "" || uEmail == "" || uPass1 == "" || uPass2 == ""){
        document.getElementById("msg").innerHTML = "Input field(s) cannot be empty.";
        document.getElementById("msg").style.margin = "20px";
        if(uName == ""){
            document.getElementById("name").style.border = "1px solid red";
        }
        if(uEmail == ""){
            document.getElementById("email").style.border = "1px solid red";
        }
        if(uPass1 == ""){
            document.getElementById("pass1").style.border = "1px solid red";
        }
        if(uPass2 == ""){
            document.getElementById("pass2").style.border = "1px solid red";
        }
    }
    else if(char.test(uEmail) == false){
        document.getElementById("email").style.border = "1px solid red";
        document.getElementById("msg").innerHTML = "Entered email is a invalid email address.";
        document.getElementById("msg").style.margin = "20px";
    }
    else if(uPass1 != uPass2){
        document.getElementById("pass1").style.border = "1px solid red";
        document.getElementById("pass2").style.border = "1px solid red";
        document.getElementById("msg").innerHTML = "Passwords didn't match.";
        document.getElementById("msg").style.margin = "20px";
    }
    else if(char.test(uEmail) == true){
        if(uPass1 == uPass2){
            console.log("Continue");

            document.getElementById("msg").innerHTML = "";
            document.getElementById("msg").style.margin = "0";
        
            document.getElementById("name").style.border = "1px solid gray";
            document.getElementById("email").style.border = "1px solid gray";
            document.getElementById("pass1").style.border = "1px solid gray";
            document.getElementById("pass2").style.border = "1px solid gray";

            document.cookie = "uname="+uName;
            document.cookie = "uemail="+uEmail;
            document.cookie = "upass="+uPass1;
            
            window.location = "./insert.php";
        }
    }
    else{
        console.log("Something happened.");
        alert("Error occured.");
        window.location.replace("./signup.php");
    }
});