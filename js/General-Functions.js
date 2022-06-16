function redirect(a){
    if (a === "Contact") {
        location.replace("http://127.0.0.1/Butique-Charruas/contact.php")
    } else if (a === "Home") {
        location.replace("http://127.0.0.1/Butique-Charruas/Index.php")
    } else if (a === "Usuario") {
        location.replace("http://127.0.0.1/Butique-Charruas/Cuenta/User.php")
    } else if (a === "Carro"){
        location.replace("http://127.0.0.1/Butique-Charruas/Checkout.php")
    }
}