var state = false;
var state_s = false;

function slowhid(){
    var searchd = document.getElementById('search-div');
    
    searchd.style.display = "none";
    return true;
}

function slowop(){
    var searchd = document.getElementById('search-div');
    
    searchd.style.opacity = "1";
    return true;
}

function timeda(){
    var tring = document.getElementById('tring-cart');
    var cont = document.getElementById('cont-cart');

    cont.style.opacity = "1";
    tring.style.opacity = "1"; 
}

function timedb(){
    var tring = document.getElementById('tring-cart');
    var cont = document.getElementById('cont-cart');
    cont.style.display = "none";
    tring.style.display = "none";
}

function redirect(a){
    if (a === "Contact") {
        location.replace("http://127.0.0.1/Butique-Charruas/contact.php");
    } else if (a === "Home") {
        location.replace("http://127.0.0.1/Butique-Charruas/Index.php");
    } else if (a === "Usuario") {
        var login_exit = document.getElementById('login-leave');
        var login = document.querySelector('.login-cont');
        login.classList.remove('hidden'); 
        login_exit.classList.remove('hidden'); 
        login.style.left = "25vw";
    }else if (a === "search"){ 
        if(state_s === false){
            //Se activa
            var search = document.getElementById('search-div');
            search.style.display = "unset"
            setTimeout(slowop, 200);
            state_s = true;
        }else{
            //Se desactiva
            var search = document.getElementById('search-div');
            search.style.opacity = "0"
            setTimeout(slowhid, 200);
            state_s = false;
        }
    }else if (a === "Carro"){
        var tring = document.getElementById('tring-cart');
        var cont = document.getElementById('cont-cart');
        if(state === false){
            state = true;
            cont.style.display = "unset";
            tring.style.display = "unset";
            setTimeout(timeda, 200);
        }else{
            state = false;
            cont.style.opacity = "0";
            tring.style.opacity = "0";
            setTimeout(timedb, 500);
        }
        
    } else if (a === "tienda"){
        location.replace("http://127.0.0.1/Butique-Charruas/tienda.php");
    } else if (a === "contacto"){
        location.replace("http://127.0.0.1/Butique-Charruas/contacto.php");
    } else if (a === "experiencias"){
        location.replace("http://127.0.0.1/Butique-Charruas/experiencias.php");
    }else if (a === "nosotros"){
        location.replace("http://127.0.0.1/Butique-Charruas/nosotros.php");
    }
    
    else if (a === "Scroll"){
        scroll();
    }
}
function exitlogin(){
  var login_exit = document.getElementById('login-leave');
  var login = document.querySelector('.login-cont');
  
  login.style.animation = "hideopacity 0.7s";
  login.style.left = "-100vw";
  login.classList.add('hidden'); 
  login_exit.classList.add('hidden');
}