function redirect(a){
    if (a === "Contact") {
        location.replace("http://127.0.0.1/Butique-Charruas/contact.php");
    } else if (a === "Home") {
        location.replace("http://127.0.0.1/Butique-Charruas/Index.php");
    } else if (a === "Usuario") {
        var login_exit = document.getElementById('login-leave');
        var login = document.querySelector('.login-cont');
        var body = document.querySelector('body');
        login.classList.remove('hidden'); 
        login_exit.classList.remove('hidden'); 
        login.style.left = "25vw";
    } else if (a === "Carro"){
        location.replace("http://127.0.0.1/Butique-Charruas/Checkout.php");
    } else if (a === "Scroll"){
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
window.onscroll = function() {
  var user = document.querySelector('.perfil_white');
  var basket = document.querySelector('.carro_white');
  var navbar = document.querySelector('nav');
  var contacto = document.querySelector('.nav-contacto');
  var nosotros = document.querySelector('.nav-nosotros');
  var vinos = document.querySelector('.nav-vinos');
  var experiencias = document.querySelector('.nav-expe');
  var logo = document.querySelector('.nav-logo')
  var flecha = document.querySelector('.arrow')
  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('scrolled');
    contacto.style.display = "unset";
    nosotros.style.display = "unset";
    experiencias.style.display = "unset";
    logo.style.display = "unset";
    vinos.style.display = "unset";
    logo.style.opacity = "1";
    contacto.style.opacity = "1";
    nosotros.style.opacity = "1";
    vinos.style.opacity = "1";
    experiencias.style.opacity = "1";

    logo.style.top = "-3px";
    contacto.style.top = "0";
    nosotros.style.top = "0";
    vinos.style.top = "0";
    experiencias.style.top = "0";
    flecha.style.opacity = "0";
    flecha.style.display = "none";
    //user.stlye.animation = "hideopacity 0.7s";
    //basket.stlye.animation = "hideopacity 0.7s";
    //logo.style.animation = "showopaccity 0.7s"
  } else {
    navbar.classList.remove('scrolled');
    
    user.style.opacity = "1";
    basket.style.opacity = "1";
    logo.style.opacity = "0";
    contacto.style.opacity = "0";
    nosotros.style.opacity = "0";
    vinos.style.opacity = "0";
    experiencias.style.opacity = "0";
    flecha.style.opacity = "1";
    flecha.style.display = "unset";
    //logo.stlye.animation = "hideopacity 0.7s";
  }
}


function scroll(){
  var navbar = document.querySelector('nav');
  var contacto = document.querySelector('.nav-contacto');
  var nosotros = document.querySelector('.nav-nosotros');
  var vinos = document.querySelector('.nav-vinos');
  var experiencias = document.querySelector('.nav-expe');
  var logo = document.querySelector('.nav-logo')
  var flecha = document.querySelector('.arrow')
    
  navbar.classList.add('scrolled');
  contacto.style.display = "unset";
  nosotros.style.display = "unset";
  experiencias.style.display = "unset";
  logo.style.display = "unset";
  vinos.style.display = "unset";
  logo.style.opacity = "1";
  contacto.style.opacity = "1";
  nosotros.style.opacity = "1";
  vinos.style.opacity = "1";
  experiencias.style.opacity = "1";
  logo.style.top = "-3px";
  contacto.style.top = "0";
  nosotros.style.top = "0";
  vinos.style.top = "0";
  experiencias.style.top = "0";
  flecha.style.opacity = "0";
  flecha.style.display = "none";
}