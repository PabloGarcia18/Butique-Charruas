var usuarios_state = false;
var añadiru = false;

function addusrs(){
    var agregar = document.getElementById("usuariosadd")
    if(añadiru === false){    
        agregar.style.display = "inline-grid";
        añadiru = true;
    }else{
        agregar.style.display = "none";

        añadiru = false;
    }
}

function show(){

    if(usuarios_state === false){
        let adduser = document.getElementById("adduser");
        let removeuser = document.getElementById("removeuser");
        let edituser = document.getElementById("edituser");
        
        usuarios_state = true;
        adduser.style.display = "unset";
        edituser.style.display = "unset";
        removeuser.style.display = "unset";
    }else{
        usuarios_state = false;
        adduser.style.display = "none";
        edituser.style.display = "none";
        removeuser.style.display = "none";
        
    }
}