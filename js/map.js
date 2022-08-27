const usuarios = new Map();
let cont= 0;
function crearusuario(){

    let nombre_usr = document.getElementById("val_nombre").value;
    let new_usr = {
        mail: document.getElementById("val_mail").value,
        pass: document.getElementById("val_pass").value,
        num_usr: cont,
    };
   
    if(usuarios.has(nombre_usr))
    {
        console.error("imposible crear usuario. error:·0189");
    }else
    {
        usuarios.set(nombre_usr,new_usr);
        //cont++;
        cont+=1;
    }
}

function TraerUsuarios(){
    let nom_usuario = prompt("que usuario desea buscar?"); //pasa por string, para preguntar un numbero usar parseint
    console.log("Id:" + usuarios.get(nom_usuario).num_usr);
    console.log("Contraseña:" + usuarios.get(nom_usuario).pass);
    console.log("Mail:" + usuarios.get(nom_usuario).mail);
    mostrar_info();
}   
function mostrar_info()
    {
        document.getElementById("info_users").innerHTML = "";
        document.getElementById("info_users").innerHTML = "Mail:" + usuarios.get(nom_usuario).mail;
}