var state = false;

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
    } else if (a === "Carro"){
        var tring = document.getElementById('tring-cart');
        var cont = document.getElementById('cont-cart');
        if(state === false){
            state = true;
            cont.style.display = "unset";
            tring.style.display = "unset";
            
        }else{
            state = false;
            cont.style.display = "none";
            tring.style.display = "none";
            
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