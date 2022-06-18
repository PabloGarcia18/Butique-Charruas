function redirect(a){
    if (a === "Contact") {
        location.replace("http://127.0.0.1/Butique-Charruas/contact.php")
    } else if (a === "Home") {
        location.replace("http://127.0.0.1/Butique-Charruas/Index.php")
    } else if (a === "Usuario") {
        location.replace("http://127.0.0.1/Butique-Charruas/account/login.php") 
        //* Colocar un If si esta Logeado para renviarlo a su Perfil, de lo contrario que se envie a
        //* Crear cuenta
    } else if (a === "Carro"){
        location.replace("http://127.0.0.1/Butique-Charruas/Checkout.php")
    }
}

var user = document.querySelector('.perfil_white')
var basket = document.querySelector('.carro_white')
var navbar = document.querySelector('nav')

window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('scrolled')
    basket.style.opacity = "0";
    user.style.opacity = "0";
    user.stlye.animation = "hideopacity 0.7s";
    basket.stlye.animation = "hideopacity 0.7s";
  } else {
    navbar.classList.remove('scrolled')
    user.style.opacity = "1";
    basket.style.opacity = "1";
  }
}