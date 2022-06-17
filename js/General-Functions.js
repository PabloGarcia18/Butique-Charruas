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