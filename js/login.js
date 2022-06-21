document.querySelectorAll(".user-input").forEach(element => {
    element.addEventListener("blur", (event) => {
        if (event.target.value != ""){
            event.target.nextElementSibling.classList.add("filled2");
        } else {
            event.target.nextElementSibling.classList.remove("filled2");
        }
    })
});

document.querySelectorAll(".password-input").forEach(element => {
    element.addEventListener("blur", (event) => {
        if (event.target.value != ""){
            event.target.nextElementSibling.classList.add("filled");
        } else {
            event.target.nextElementSibling.classList.remove("filled");
        }
    })
});

let bd_users = 
[
  ["Pablo","3242"],
  ["Katy","5321"],
];
function login(){
    let username = document.getElementById("username").value, password = document.getElementById("password").value, valido = false;

    if(username == "" || username== null || password == "" || password == null){
        alert("Ingresa un usuario y contraseña valido");
    }else
    {
        db_users.forEach((usuario) => {
            if(usuario[0]==username && usuario[1]==password){valido=true}
        });
        if(valido){
            alert("Bienvenido")
            return 1;
        }else
        {
            alert("Usuario o contraseña invalida")
            return 0;
        }
    
    
    }


}