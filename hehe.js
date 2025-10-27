let show = document.getElementById("lock");
let password = document.getElementById("password");

show.onclick = function(){
    if (password.type=="password") {
        password.type = "text";
        show.classList= 'bx bxs-lock-open-alt'
    }
    else{
        password.type = "password";
        show.classList= 'bx bxs-lock-alt'
    }
}