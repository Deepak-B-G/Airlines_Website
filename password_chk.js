 function ChkPassword () {
    let init = document.getElementById("initial").value;
    let sec =  document.getElementById("second").value;
    if(init.value == " ") {
        alert("You did not enter the password \n" + "Please enter one now");
        return false;
    }
    if(init.value != sec.value) {
        alert("Passwords mismatched \n" + "Re-enter both again");
        return false;
    }
    else{
        return true;
    }
 }
