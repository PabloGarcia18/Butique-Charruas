var usuarios_state = false;

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

function adduser(){
    
}