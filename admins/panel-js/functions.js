var usuarios_state = false;
var añadiru = false;
var elimin = false;
var edot = false;
var editprod = false;


function home(){
    location.replace("../index.php");
}
function editusers(){
    var agregar = document.getElementById("usuariosadd");
    var eliminar = document.querySelector(".eliminar");
    var usredit = document.querySelector(".editusr");
    var bkg = document.querySelector(".interaccion")
    var prod = document.querySelector(".productosadd");
    var prod2 = document.querySelector(".buscarprod");
    if(añadiru === false){    
        agregar.style.display = "none";
        bkg.style.width = "75vw";
        prod.style.display = "none";
        buscar_usr2();
        usredit.style.display = "inline-flex";
        eliminar.style.display = "none";
        prod2.style.display = "none";
        añadiru = false;
        elimin = false;
        editprod = false;
        edot = true;
    }else{
        agregar.style.display = "none";
        eliminar.style.display = "none";
        prod.style.display = "none";
        usredit.style.display = "none";
        prod2.style.display = "none";
        bkg.style.width = "75vw";
        añadiru = false;
        elimin = false;
        edot = false;
        editprod = false;
    }
}

function addusrs(){
    var agregar = document.getElementById("usuariosadd")
    var eliminar = document.querySelector(".eliminar")
    var usredit = document.querySelector(".editusr");
    var bkg = document.querySelector(".interaccion")
    var prod = document.querySelector(".productosadd");
    var prod2 = document.querySelector(".buscarprod");
    if(añadiru === false){    
        bkg.style.width = "320px";
        agregar.style.display = "inline-grid";
        eliminar.style.display = "none"
        usredit.style.display = "none";
        prod.style.display = "none";
        prod2.style.display = "none";
        añadiru = true;
        elimin = false;
        edot = false;
        editprod = false;
    }else{
        bkg.style.width = "75vw";
        agregar.style.display = "none";
        eliminar.style.display = "none"
        usredit.style.display = "none";
        prod.style.display = "none";
        prod2.style.display = "none";
        añadiru = false;
        elimin = false;
        editprod = false;
        edot = false;
    }
}
function removeusr(){
    var agregar = document.getElementById("usuariosadd")
    var eliminar = document.querySelector(".eliminar")
    var usredit = document.querySelector(".editusr");
    var bkg = document.querySelector(".interaccion")
    var prod = document.querySelector(".productosadd");
    var prod2 = document.querySelector(".buscarprod");
    if(elimin === false){    
        bkg.style.width = "820px";
        agregar.style.display = "none";
        eliminar.style.display = "inline-flex"
        usredit.style.display = "none";
        prod.style.display = "none";
        prod2.style.display = "none";
        elimin = true;
        añadiru = false;
        edot = false;
        editprod = false;
        buscar_usr();
    }else{
        agregar.style.display = "none";
        eliminar.style.display = "none"
        prod2.style.display = "none";
        usredit.style.display = "none";
        prod.style.display = "none";
        bkg.style.width = "75vw";
        elimin = false;
        añadiru = false;
        edot = false;
        editprod = false;
    }
}
function editarstock(){
    var agregar = document.getElementById("usuariosadd");
    var prod = document.querySelector(".productosadd");
    var eliminar = document.querySelector(".eliminar");
    var usredit = document.querySelector(".editusr");
    var bkg = document.querySelector(".interaccion");
    var prod2 = document.querySelector(".buscarprod");
    if(editprod === false){    
        bkg.style.width = "75vw";
        prod2.style.display = "inline-flex";
        prod.style.display = "unset";
        agregar.style.display = "none";
        eliminar.style.display = "none"
        usredit.style.display = "none";
        buscar_prod();
        editprod = true;
        elimin = false;
        añadiru = false;
        edot = false;
    }else{
        agregar.style.display = "none";
        eliminar.style.display = "none"
        prod.style.display = "none";
        prod2.style.display = "none";
        usredit.style.display = "none";
        bkg.style.width = "75vw";
        editprod = false;
        elimin = false;
        añadiru = false;
        edot = false;
    }
}


function buscar_prod()
{   
    const user_b = document.querySelector(".Search3");
    const info = document.getElementById("mostrar_prod");

    const formbusqueda3 = new FormData();

    formbusqueda3.set("filtro_nombre", user_b.value);
    fetch('prod-carga.php',
    {
        method: 'POST',
        body: formbusqueda3
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
function buscar_usr2()
{   
    const user_b = document.querySelector(".Search2");
    const info = document.getElementById("usuario-edit");

    const formbusqueda2 = new FormData();

    formbusqueda2.set("filtro_nombre", user_b.value);
    fetch('edit-carga.php',
    {
        method: 'POST',
        body: formbusqueda2
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
    const escribir = document.getElementById("accionesusr");

    const fromacciones = new FormData();

    fromacciones.set("filtrar_user", a);

    fetch('accionesusr.php',{
        method: 'POST',
        body: fromacciones
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
    .then(function(texto){
        escribir.innerHTML = " ";
        escribir.innerHTML = texto;
    })
    .catch(function(err) 
    {
        console.log(err);
    });
    
}
function seleccionar3(a){
    const escribir = document.getElementById("edit_prod");

    const fromacciones = new FormData();

    fromacciones.set("filtrar_prod", a);

    fetch('accionesprod.php',{
        method: 'POST',
        body: fromacciones
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
    .then(function(texto){
        escribir.innerHTML = " ";
        escribir.innerHTML = texto;
    })
    .catch(function(err) 
    {
        console.log(err);
    });
    
}
function seleccionar2(a){
    const escribir = document.getElementById("acciones-edit");

    const fromedit = new FormData();

    fromedit.set("filtrar_user", a);

    fetch('editusers.php',{
        method: 'POST',
        body: fromedit
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
    .then(function(texto){
        escribir.innerHTML = " ";
        escribir.innerHTML = texto;
    })
    .catch(function(err) 
    {
        console.log(err);
    });
    
}

function fetch_add(){
    const data = new FormData(document.getElementById('usuariosadd'));

    fetch('adduser.php', 
    {
        method: 'POST',
        body: data
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
        //document.getElementById("message").textContent = texto;
        alert(texto);
    })
    .catch(function(err) 
    {
        console.log(err);
    });  
}

function eliminarproducto(a){
    const fromeliminarprod = new FormData();

    fromeliminarprod.set("filtrarprod", a);

    fetch('eliminarprod.php',{
        method: 'POST',
        body: fromeliminarprod
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
    .catch(function(err) 
    {
        console.log(err);
    });
    
}
function eliminarusr(a){
    const fromeliminar = new FormData();

    fromeliminar.set("filtrar_user", a);

    fetch('eliminar.php',{
        method: 'POST',
        body: fromeliminar
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
    .catch(function(err) 
    {
        console.log(err);
    });
    
}
function confirmar(){
    const data = new FormData(document.getElementById('userconfirm'));

    fetch('edicionlista.php', 
    {
        method: 'POST',
        body: data
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
        //document.getElementById("message").textContent = texto;
        alert(texto);
    })
    .catch(function(err) 
    {
        console.log(err);
    });  
}
function fetch_editp(){
    const data = new FormData(document.getElementById('editproductof'));

    fetch('upload.php', 
    {
        method: 'POST',
        body: data
    })
    .then(function(response) 
    {
        if(response.ok) 
        {
            alert(texto);
            return response.text();
        } else 
        {
            throw "Error";
        }
    })
    .then(function(texto) 
    {
        //document.getElementById("message").textContent = texto;
        alert(texto);
    })
    .catch(function(err) 
    {
        console.log(err);
    });  
}


