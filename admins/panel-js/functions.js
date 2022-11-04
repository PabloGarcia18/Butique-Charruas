var usuarios_state = false;
var añadiru = false;
var elimin = false;

function addusrs(){
    var agregar = document.getElementById("usuariosadd")
    var eliminar = document.querySelector(".eliminar")
    if(añadiru === false){    
        agregar.style.display = "inline-grid";
        eliminar.style.display = "none"
        añadiru = true;
        elimin = false;
    }else{
        agregar.style.display = "none";
        eliminar.style.display = "none"

        añadiru = false;
        elimin = false;
    }
}
function removeusr(){
    var agregar = document.getElementById("usuariosadd")
    var eliminar = document.querySelector(".eliminar")
    if(elimin === false){    
        agregar.style.display = "none";
        eliminar.style.display = "inline-grid"
        elimin = true;
        añadiru = false;
    }else{
        agregar.style.display = "none";
        eliminar.style.display = "none"
        elimin = false;
        añadiru = false;
    }
}

function buscar_usr()
{   
    const user_b = document.querySelector(".Search");
    const info = document.getElementById("eliminar");

    const formbusqueda = new FormData();

    formbusqueda.set("filtro_nombre", user_b.value);
    fetch('cargaruser.php',
    {
        method: 'POST',
        body: formbusqueda
    })
    .then(function(response) 
    {
        if(response.ok) 
        {
            return response.text();
        } else 
        {
            throw "Error";
        }
    })
    .then(function(texto) 
    {
        info.innerHTML = " ";
        info.innerHTML = texto;
    })
    .catch(function(err) 
    {
        console.log(err);
    });
}
function seleccionar(a){
    console.log("Hola");
    console.log(a);
}