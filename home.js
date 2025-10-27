let morebtn = document.getElementById("morebtn");
let menu = document.getElementById("moremenu");
let moreicon = document.getElementById("navmore");
let btnchange = document.getElementById("btnchange");

morebtn.onclick = function(){
    if (menu.classList == 'moremenu') {
        menu.classList='moremenu on'
        moreicon.classList='navmore rotate';
        btnchange.classList='bx bx-x';
    }
    else{
        menu.classList='moremenu';
        moreicon.classList='navmore';
        btnchange.classList='bx bx-menu';
    }
}

const courseright = document.getElementById("courseright");
let coursecont = document.getElementById("coursecont");

num =0;

courseright.onclick = function(){
    
    if (num>=5) {
        coursecont.style.transform= 'translateX(-1350px)';
        
    }

    else if (num<5) {
        coursecont.style.transform+= 'translateX(-270px)';
        num+=1;
    }

        
    
}

courseleft.onclick = function(){
    if (num==0) {
        coursecont.style.transform= 'translateX(0px)';
    }
    else if (num>0) {
        coursecont.style.transform+= 'translateX(270px)';
        num-=1;
        
    }

    
}

let logout = document.getElementById("logout");

logout.onclick = function(){
    menu.classList.add('log');
    logout.classList.add('log');
    // logout.style.transform= 'translateY(-400px)';
}

let nolog = document.getElementById("nolog");

nolog.onclick = function(){
    menu.classList.remove('log');
    logout.classList.remove('log');
}